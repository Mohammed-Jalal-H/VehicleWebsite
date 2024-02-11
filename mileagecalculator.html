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

        .containers {
            max-width: 800px;
            margin: 50px auto; /* Adjusted margin to center vertically */
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid black;
            padding: 10px;
        }

        table th, table td {
            padding:20px;
            text-align: left;
            
        }

        input[type="text"] {
            width: 90%; /* Increased input size */
            padding: 8px;
            margin: 5px 0;
            border: none;
            border-bottom: 1px solid #ccc; /* Added bottom border */
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
        p.marg{
            text-align: center;
        }
        p.para{
            texst-align:center;
        }
        .answer{
            color:black;
            margin-left:550px;
            margin-bottom:100px;
            font-style:bold;
            font-size:large;
        }
        
    </style>
</head>
<body>
    <div class="header">
        BikeMileagePro
    </div>
    <div class="container"> 
        <p>Welcome to our Mileage Calculator, where you can discover the precise mileage of each bike model at the time of purchase. We pride ourselves on providing accurate and reliable information to help you make informed decisions about your motorcycle purchase. With our calculator, you can confidently explore the fuel efficiency of various bike models, ensuring that you find the perfect match for your riding needs. Whether you're interested in the sleek speed of sport bikes or the enduring reliability of touring models, our calculator offers 100% certainty in mileage estimates. Empower yourself with the knowledge you need to make the best choice for your riding adventures. Start exploring the world of motorcycle mileage today!</p>
        <p>Step into the world of motorcycles with confidence and clarity. Our Mileage Calculator is your trusted companion in the journey of bike selection. We understand the importance of accurate data when it comes to choosing your ride. With our comprehensive database, you can explore the fuel efficiency of popular bike models across various brands. From the iconic Harley-Davidson to the nimble Ducati, we've got you covered. Our commitment to precision ensures that you receive reliable mileage estimates tailored to your preferences. Whether you're a seasoned rider or a newcomer to the biking community, our calculator simplifies the decision-making process. Embrace the freedom of the open road with the assurance of knowing your bike's mileage. Welcome to your ultimate resource for motorcycle exploration.</p>        <p id="marg">MILEAGE CALCULATOR</p>
        <p id="para">Please provide the details of the vehicle you are searching for. Enter the series name, specifying any relevant information such as the model range or series identifier. For instance, you might enter "Yamaha's FZ series" or "BMW 3 Series" to narrow down your search.

Next, enter the brand or manufacturer name associated with the series you provided. This could be the name of the company that produces the vehicle series you're interested in. For example, if you're looking for Yamaha's FZ series, enter "Yamaha" as the brand name. If you're interested in BMW's 3 Series, enter "BMW" accordingly.

Your inputs will help us retrieve the specific vehicle details you're interested in, ensuring accurate search results.</p>
    </div>
    <div class="containers">
        <form method="post">
            <table>
                <tr>
                    <th><label for="series">Series</label></th>
                    <td><input type="text" name="series" id="series" placeholder="Enter a Series Type" required></td>
                </tr>
                <tr>
                    <th><label for="model">Model</label></th>
                    <td><input type="text" name="model" id="model" placeholder="Enter a Model Type" required></td>
                </tr>
                <tr>
                    <th><label for="fuel">FuelType</label></th>
                    <td><input type="text" name="fuel" id="fuel" placeholder="Enter a Fuel Type" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Calculate Mileage"></td>
                </tr>
            </table>
        </form>
    </div>
    <div style="height: 100px;"></div>
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
        $Series = $_POST['series'];
        $model = $_POST['model'];
        $fuel = $_POST['fuel'];

        // SQL query to retrieve data based on form inputs
        $sql = "SELECT * FROM mileage WHERE Series = '$Series' AND model = '$model' ";
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
