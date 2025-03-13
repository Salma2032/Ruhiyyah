<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Concentresi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$prediction = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user data from the form
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $pregnant = $_POST['pregnant'];
    $job_title = $_POST['job_title'];
    $student = $_POST['student'];
    $difficulty_sleeping = $_POST['difficulty_sleeping'];
    $anxious = $_POST['anxious'];
    $introvert = $_POST['introvert'];
    $mood_swings = $_POST['mood_swings'];
    $appetite_loss = $_POST['appetite_loss'];

    // Insert data into the database
    $sql = "INSERT INTO user_info (age, sex, pregnant, job_title, student, difficulty_sleeping, anxious, introvert, mood_swings, appetite_loss)
    VALUES ('$age', '$sex', '$pregnant', '$job_title', '$student', '$difficulty_sleeping', '$anxious', '$introvert', '$mood_swings', '$appetite_loss')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Prepare data for the model
    $data = array(
        "features" => array(
            intval($age),          // Age (numeric)
            intval($sex),          // Sex (0 or 1)
            intval($pregnant),     // Pregnant (0 or 1)
            intval($job_title),    // Job Title (encoded integer)
            intval($student),      // Student (0 or 1)
            intval($difficulty_sleeping), // Difficulty Sleeping (0 or 1)
            intval($introvert),    // Introvert (0 or 1)
            intval($mood_swings),  // Mood Swings (0-3)
            intval($appetite_loss) // Appetite Loss (0-3)
        )
    );

    // Send data to the model
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context = stream_context_create($options);
    $response = file_get_contents("http://localhost:5001/predict", false, $context);
    $result = json_decode($response, true);

    if ($result !== null && isset($result['prediction'])) {
        $prediction = "Prediction: " . $result['prediction'];
    } else {
        $prediction = "Error in prediction response.";
    }

    echo $prediction;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
        .prediction-result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Information Form</h2>
        <form method="POST" action="">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>

            <label for="pregnant">Pregnant:</label>
            <select id="pregnant" name="pregnant" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>

            <label for="student">Student:</label>
            <select id="student" name="student" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label for="difficulty_sleeping">Difficulty Sleeping:</label>
            <select id="difficulty_sleeping" name="difficulty_sleeping" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label for="anxious">Anxious:</label>
            <select id="anxious" name="anxious" required>
                <option value="0">Rare</option>
                <option value="1">Sometimes</option>
                <option value="2">Often</option>
                <option value="3">Always</option>
            </select>

            <label for="introvert">Introvert:</label>
            <select id="introvert" name="introvert" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label for="mood_swings">Mood Swings:</label>
            <select id="mood_swings" name="mood_swings" required>
                <option value="0">Rare</option>
                <option value="1">Sometimes</option>
                <option value="2">Often</option>
                <option value="3">Always</option>
            </select>

            <label for="appetite_loss">Appetite Loss:</label>
            <select id="appetite_loss" name="appetite_loss" required>
                <option value="0">Rare</option>
                <option value="1">Sometimes</option>
                <option value="2">Often</option>
                <option value="3">Always</option>
            </select>

            <button type="submit">Submit
                