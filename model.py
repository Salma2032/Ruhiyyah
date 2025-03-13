# Import necessary libraries
import pandas as pd
import numpy as np
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder, StandardScaler
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score, classification_report, confusion_matrix
from imblearn.over_sampling import SMOTE
from flask import Flask, request, jsonify
from flask_cors import CORS
import joblib

# Step 1: Load the data
data = pd.read_csv("/Applications/XAMPP/xamppfiles/htdocs/ConcentrEsi/sentiment_analysis.csv")

# Step 2: Handle Outliers (Clipping to 1.5 IQR)
Q1 = data['Age'].quantile(0.25)
Q3 = data['Age'].quantile(0.75)
IQR = Q3 - Q1
lower_bound = Q1 - 1.5 * IQR
upper_bound = Q3 + 1.5 * IQR
data['Age'] = np.clip(data['Age'], lower_bound, upper_bound)

# Step 3: Encode categorical variables
label_encoders = {}
categorical_columns = ['Age','Sex', 'Pregnant', 'Job Title', 'Student', 'Difficulty Sleeping', 'Anxious', 'Introvert', 'Mood Swings', 'Appetite Loss', 'Mood']
for column in categorical_columns:
    le = LabelEncoder()
    data[column] = le.fit_transform(data[column])
    label_encoders[column] = le

# Separate features and target
X = data.drop('Mood', axis=1)  # Use 'Mood' as the target
y = data['Mood']

# Step 4: Standardize numerical features
scaler = StandardScaler()
X['Age'] = scaler.fit_transform(X[['Age']])
print("Feature columns:", X.columns)

# Step 5: Handle Imbalanced Data using SMOTE
smote = SMOTE(random_state=42)
X_resampled, y_resampled = smote.fit_resample(X, y)

# Step 6: Split the data
X_train, X_test, y_train, y_test = train_test_split(X_resampled, y_resampled, test_size=0.2, random_state=42)

# Step 7: Train the Random Forest model
rf = RandomForestClassifier(n_estimators=100, random_state=42)
rf.fit(X_train, y_train)

# Make predictions
y_pred = rf.predict(X_test)

# Step 8: Evaluate the model
accuracy = accuracy_score(y_test, y_pred)
print(f"Accuracy: {accuracy:.2f}")
print("\nClassification Report:")
print(classification_report(y_test, y_pred))

# Confusion Matrix
cm = confusion_matrix(y_test, y_pred)
plt.figure(figsize=(8, 6))
sns.heatmap(cm, annot=True, fmt='d', cmap='Blues', xticklabels=label_encoders['Mood'].classes_, yticklabels=label_encoders['Mood'].classes_)
plt.xlabel('Predicted')
plt.ylabel('Actual')
plt.title('Confusion Matrix - Random Forest')
plt.show()

# Save the model
joblib.dump(rf, 'sentiment_model.pkl')
print("Model saved as sentiment_model.pkl")

# Flask API for prediction
app = Flask(__name__)
CORS(app)
model = joblib.load('sentiment_model.pkl')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    features = np.array(data['features']).reshape(1, -1)
    prediction = model.predict(features)
    return jsonify({'prediction': int(prediction[0])})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5001)