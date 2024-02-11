<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            text-align: center;
            font-size: 32px;
            font-style: italic;
            background-color: #32CD32;
            padding: 20px 0;
            color: white;
            margin-bottom: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #32CD32;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #228B22;
        }

        .login-link {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        BikeMileagePro
    </div>

    <div class="container">
        <!-- Signup Form -->
        <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Sign Up</h2>
            <label for="signupUsername">Username:</label>
            <input type="text" id="signupUsername" name="signupUsername" required>
            <label for="signupPassword">Password:</label>
            <input type="password" id="signupPassword" name="signupPassword" required>
            <input type="submit" value="Sign Up">
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="logins.php">Log in here</a>.</p>
        </div>
    </div>
</body>
</html>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bikemileagrpro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['signupUsername'];
    $Password = $_POST['signupPassword'];
    $sql = "INSERT INTO usertable (Username, Password) 
            VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Username, $Password);
    
    // Execute the query
    if ($stmt->execute()) {
        // Redirect after successful insertion
        header("Location: logins.php");
        exit(); // Ensure no further code execution after redirection
    } else {
        // Handle insertion failure
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>