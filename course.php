<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    echo "Form submitted!<br>";
    print_r($_POST); // Debugging: Print POST data

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

    echo "SQL Query: " . $sql . "<br>"; // Debugging: Print SQL query

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Prepare data for the model
    $data = array(
        "features" => array(
            intval($age),
            intval($sex),
            intval($pregnant),
            intval($student),
            intval($difficulty_sleeping),
            intval($anxious),
            intval($introvert),
            intval($mood_swings),
            intval($appetite_loss)
        )
    );

    echo "Data being sent to the model: " . json_encode($data) . "<br>"; // Debugging: Print data

    // Send data to the model
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context = stream_context_create($options);
    $response = file_get_contents("http://localhost:5000/predict", false, $context);

    if ($response === FALSE) {
        echo "Error calling the model API.<br>";
    } else {
        echo "Model API Response: " . $response . "<br>"; // Debugging: Print API response
        $result = json_decode($response, true);
        $prediction = "Prediction: " . $result['prediction'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step User Form</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 450px;
            height: auto;
            max-width: 100%;
        }
        .form-group {
            display: none;
            margin-bottom: 15px;
        }
        .form-group.active {
            display: block;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background: #f9f9f9;
            margin-bottom: 15px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .back-btn {
            width: 100%;
            padding: 12px;
            background: #6c757d;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .back-btn:hover {
            background: #5a6268;
        }
        .progress-bar {
            width: 100%;
            height: 8px;
            background: #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .progress {
            height: 100%;
            width: 0%;
            background: #28a745;
            transition: width 0.4s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Information Form</h2>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <form id="multiStepForm">
            <!-- Step 1: Age -->
            <div class="form-group active">
                <label for="age">What is your age?</label>
                <input type="number" id="age" name="age" required>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 2: Sex -->
            <div class="form-group">
                <label for="sex">Select your gender:</label>
                <select id="sex" name="sex" required>
                    <option value="" disabled selected>Select</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 3: Pregnant -->
            <div class="form-group">
                <label for="pregnant">Are you pregnant?</label>
                <select id="pregnant" name="pregnant" required>
                    <option value="" disabled selected>Select</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 4: Job Title -->
            <div class="form-group">
                <label for="job_title">What is your job title?</label>
                <input type="text" id="job_title" name="job_title" required>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 5: Student -->
            <div class="form-group">
                <label for="student">Are you a student?</label>
                <select id="student" name="student" required>
                    <option value="" disabled selected>Select</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 6: Difficulty Sleeping -->
            <div class="form-group">
                <label for="difficulty_sleeping">Do you have difficulty sleeping?</label>
                <select id="difficulty_sleeping" name="difficulty_sleeping" required>
                    <option value="" disabled selected>Select</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 7: Anxious -->
            <div class="form-group">
                <label for="anxious">How often do you feel anxious?</label>
                <select id="anxious" name="anxious" required>
                    <option value="0">Rarely</option>
                    <option value="1">Sometimes</option>
                    <option value="2">Often</option>
                    <option value="3">Always</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 8: Introvert -->
            <div class="form-group">
                <label for="introvert">Are you an introvert?</label>
                <select id="introvert" name="introvert" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 9: Mood Swings -->
            <div class="form-group">
                <label for="mood_swings">How often do you experience mood swings?</label>
                <select id="mood_swings" name="mood_swings" required>
                    <option value="0">Rarely</option>
                    <option value="1">Sometimes</option>
                    <option value="2">Often</option>
                    <option value="3">Always</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Step 10: Appetite Loss -->
            <div class="form-group">
                <label for="appetite_loss">How often do you experience appetite loss?</label>
                <select id="appetite_loss" name="appetite_loss" required>
                    <option value="0">Rarely</option>
                    <option value="1">Sometimes</option>
                    <option value="2">Often</option>
                    <option value="3">Always</option>
                </select>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="button" class="btn" onclick="nextStep()">Next</button>
            </div>

            <!-- Final Step -->
            <div class="form-group">
                <h3>All questions answered!</h3>
                <button type="button" class="back-btn" onclick="prevStep()">Back</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".form-group");
        const progressBar = document.querySelector(".progress");

        function nextStep() {
            if (currentStep < steps.length - 1) {
                steps[currentStep].classList.remove("active");
                currentStep++;
                steps[currentStep].classList.add("active");

                // Update progress bar
                progressBar.style.width = ((currentStep / (steps.length - 1)) * 100) + "%";
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                steps[currentStep].classList.remove("active");
                currentStep--;
                steps[currentStep].classList.add("active");

                // Update progress bar
                progressBar.style.width = ((currentStep / (steps.length - 1)) * 100) + "%";
            }
        }

        document.getElementById("multiStepForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Form submitted successfully!");
        });
    </script>
</body>
</html>

