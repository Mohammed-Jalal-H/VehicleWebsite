<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mileage Calculator</title>
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
        }

        .containers1, .containers2 {
            max-width: 400px;
            margin-top: 50px;
            float: left;
            text-align: center;
        }

        .containers2 {
            margin-left: 20px;
        }

        .table1 {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 10px;
        }

        table th, table td {
            padding: 20px;
            text-align: left;
        }

        input[type="text"] {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #32CD32;
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

        p.marg {
            text-align: center;
        }

        .answer{
            margin-left:500px;
            margin-top:100px;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="header">
        BikeMileagePro
    </div>
    <div class="container">
    <p>Welcome to our detailed guide where you can learn more about motorcycles to make informed decisions about your next purchase. This page provides valuable insights into the features, specifications, and performance metrics of various motorcycle models.</p>
        <p>Explore detailed specifications, including mileage in different situations, engine power, handling, comfort, and technology features of different motorcycles side by side.</p>
        <p>Whether you're interested in adventure touring bikes like the Triumph Tiger 1200 or exploring other options such as the BMW R1250GS and the Honda Africa Twin, this guide offers a comprehensive overview of each model.</p>        <div class="containers1">
            <form method="post">
                <table class="table1">
                    <tr>
                        <th><label for="bike1">Enter the First Bike to compare</label></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="model" id="model" placeholder="Enter the Bike Model" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    <div class="respons1">
    <div class="answer"> 
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Update with your MySQL username
    $password = ""; // Update with your MySQL password
    $dbname = "bikemileagrpro"; // Update with your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form

        $model = $_POST['model'];


        // SQL query to retrieve data based on form inputs
        $sql = "SELECT * FROM mileage WHERE model = '$model' ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Output the data
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Mileage for your given bike is <br>";
                    echo "Series: " . $row["Series"] .  "<br>" .
                         "Model: " . $row["model"] .  "<br>" .
                         "Fuel Type: " . $row["fueltype"] . "<br>" .
                        
                         "Minimum Mileage on Road: " . $row["road_low"] . 
                         "Maximum Mileage on Road: " . $row["road_high"] . "<br>" .
                         "Minimum Mileage on Highway: " . $row["highway_low"] . 
                         "Maximum Mileage on Highway: " . $row["highway_high"] . "<br>";
                }
            } else {
                // No matching records found
                echo "Sorry, no records found for the provided details.";
            }
        } else {
            // Query execution error
            echo "Error: " . mysqli_error($conn);
        }
    }
    // Close connection
    $conn->close();
    ?>
    </div>
</body>
</html>
