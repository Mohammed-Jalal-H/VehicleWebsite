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
    $articlename = $_POST['articleTitle'];
    $article = $_POST['articleContent'];
    $sql = "INSERT INTO articeltable (articlename, article) 
            VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $articlename, $article);
    
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Resources</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .headers {
            text-align: center;
            font-size: 32px;
            font-style: italic;
            background-color: #32CD32;
            padding: 20px 0;
            color: white;
            margin-bottom: 20px;
        }
        .button {
            display: block;
            width: 200px;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #32CD32;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #228B22;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
        }

        .resource-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .resource {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 4px solid #32CD32;
        }

        .resource h2 {
            color: #32CD32;
        }

        .resource p {
            margin: 10px 0;
        }

        .user {
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .user h2 {
            color: #32CD32;
            margin-bottom: 10px;
        }

        .user form {
            margin-top: 10px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"], textarea {
            width: calc(100% - 16px); /* Adjusted for padding */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #32CD32;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #228B22;
        }
    </style>
</head>
<body>
    <div class="headers">
        BikeMileagePro
    </div>

    <div class="container">
        <div class="resource-container">
            <div class="resource">
                <h2>Motorcycle Maintenance:</h2>
                <p><strong>"The Complete Motorcycle Maintenance Guide"</strong> - Covers basic maintenance tasks such as oil changes, chain lubrication, brake adjustments, and tire checks.</p>
                <p><strong>"DIY Motorcycle Maintenance: Essential Tips and Tricks"</strong> - Provides step-by-step instructions and troubleshooting advice for common maintenance issues.</p>
                <p><strong>"Motorcycle Maintenance Checklist: Keep Your Bike in Top Condition"</strong> - A comprehensive checklist for regular maintenance tasks to ensure your motorcycle runs smoothly and safely.</p>
            </div>
            <div class="resource">
                <h2>Riding Techniques:</h2>
                <p><strong>"Advanced Motorcycle Riding Techniques: Mastering Cornering and Braking"</strong> - Offers advanced tips for improving cornering skills, braking techniques, and body positioning.</p>
                <p><strong>"Motorcycle Riding Tips for Beginners: Building Confidence on Two Wheels"</strong> - Covers basic riding techniques, safety precautions, and tips for new riders to develop confidence and skills.</p>
                <p><strong>"Mastering Motorcycle Riding in Different Weather Conditions"</strong> - Provides guidance on riding in various weather conditions, including rain, wind, and extreme heat.</p>
            </div>
            <div class="resource">
                <h2>Fuel-Saving Strategies:</h2>
                <p><strong>"Maximizing Fuel Efficiency on Your Motorcycle: Tips and Tricks"</strong> - Offers practical advice for conserving fuel, including proper tire inflation, smooth acceleration, and maintaining a steady speed.</p>
                <p><strong>"Eco-Friendly Motorcycle Riding: Reduce Your Carbon Footprint on Two Wheels"</strong> - Discusses eco-conscious riding practices, such as minimizing idling time, using eco-friendly fuels, and reducing emissions through proper maintenance.</p>
            </div>
            <div class="user">
                <h2>User Submission:</h2>
                <form id="ArticleForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                    <table>
                        <tr>
                            <th><label for="articleTitle">Article Title</label></th>
                            <td><input type="text" id="articleTitle" name="articleTitle"></td>
                        </tr>
                        <tr>
                            <th><label for="articleContent">Article Content</label></th>
                            <td><textarea id="articleContent" name="articleContent" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <input type="submit" value="Submit Article"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

