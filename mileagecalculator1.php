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

        input[type="button"] {
            background-color: #32CD32;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="button"]:hover {
            background-color: #228B22;
        }
        p.marg {
            text-align: center;
        }
    </style>
    <script>
        function validate() {
            let fuel = parseFloat(document.getElementById("fuel").value);
            let distance = parseFloat(document.getElementById("distance").value);

            let mileage = distance / fuel;
            let answerSpan = document.getElementById("answer");
            answerSpan.textContent = mileage.toFixed(2) + " miles per gallon"; 
        }
    </script>
    
</head>
<body>
    <div class="header">
        BikeMileagePro
    </div>
    <div class="container"> 
        <p>Cruise through precision with our advanced Mileage Calculator, where you can input essential details like distance traveled and fuel consumed to receive accurate mileage readings. We understand the importance of real-time data in gauging your motorcycle's performance. Simply enter the distance covered and the amount of fuel used, and our calculator will crunch the numbers to provide you with precise mileage figures. For instance, if you've traveled 150 miles and refilled your tank with 3 gallons of fuel, our calculator will promptly furnish you with your bike's mileage. Empower yourself with the knowledge to optimize your riding experience and make informed decisions about your motorcycle's efficiency.</p>

        <p>Rev up your journey with our dynamic Mileage Calculator, designed to give you on-the-spot accuracy in calculating your bike's mileage. Whether you're embarking on a cross-country adventure or simply commuting to work, our calculator puts the power in your hands. Input your travel distance and fuel consumption, and watch as our calculator delivers precise mileage results tailored to your ride. For instance, if you've covered 200 miles on 4.5 gallons of fuel, our calculator will swiftly compute your bike's mileage. Say goodbye to guesswork and hello to data-driven insights with our Mileage Calculator.</p>

        <p>Experience the road like never before with our user-friendly Mileage Calculator, where you can effortlessly input your journey details and receive instant, accurate mileage readings. No more second-guessing or estimations—our calculator ensures that you have the facts at your fingertips. Simply enter the distance you've traveled and the fuel consumed, and our calculator will do the rest. For example, if you've driven 180 miles and used 4 gallons of fuel, our calculator will swiftly generate your bike's mileage. Take control of your riding experience and unlock the full potential of your motorcycle with our Mileage Calculator.</p><br><br><br>
        
        <p>MILEAGE CALCULATOR</p>
    </div>
    <div class="containers">
        <form action="">
            <table>
                <tr>
                    <th><label for="fuel">Fuel Consumed (gallons)</label></th>
                    <td><input type="text" name="fuel" id="fuel" placeholder="Enter the amount of fuel consumed" required></td>
                </tr>
                <tr>
                    <th><label for="distance">Distance Traveled (miles)</label></th>
                    <td><input type="text" name="distance" id="distance" placeholder="Enter the distance traveled" required></td>
                </tr>
                <tr>
                    <th><label for="distance">Mileage given by your your vehicle is </label></th>
                    <td><span id="answer"></span></td> <!-- Moved the span inside the td element -->
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Calculate" onclick="validate()"></td> <!-- Changed the input type to button -->
                </tr>
            </table>
        </form>
    </div>
   
</body>
</html>
