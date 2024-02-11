<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Efficiency Platform</title>
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
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
        }

        .feature {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .feature h2 {
            color: #32CD32;
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

        .footer {
            background-color: #32CD32;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .footer a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
      BikeMileagePro
    </div>

    <div class="container">
        <div class="feature">
            <h2>Mileage Calculator Tool</h2>
            <p>Plan your trips with precision using our intuitive mileage calculator tool. Get accurate estimates of fuel consumption based on factors like distance, vehicle type, and driving conditions.</p>
            <a href="mileagecalculator1.php" class="button">Mileage Calculator</a>
        </div>

        <div class="feature">
            <h2>Explore the Mileage</h2>
            <p>Explore the mileage capabilities of your favorite bikes. Discover how different bikes perform in various conditions, from city streets to open highways.</p>
            <a href="mileagecalculator.php" class="button">Explore the Mileage</a>
        </div>

        <div class="feature">
            <h2>Know About Vehicle</h2>
            <p>Discover comprehensive details about the vehicle to make the right decision.Explore detailed information about the vehicle to make an informed choice.</p>
            <a href="know.php" class="button">Comparison</a>
        </div>

        <div class="feature">
            <h2>Fuel Efficiency Tips</h2>
            <p>Discover actionable steps to increase your vehicle's fuel efficiency and reduce your carbon footprint. From proper tire inflation to eco-friendly driving habits, start saving fuel today.</p>
            <a href="fuelefficiencytips.php" class="button">Fuel Efficiency Tips</a>
        </div>

        <div class="feature">
            <h2>Articles</h2>
            <p>Explore our collection of informative articles covering topics related to fuel efficiency, eco-friendly driving, and vehicle maintenance. Stay up-to-date with the latest industry trends and expert insights.</p>
            <a href="article.php" class="button">Articles</a>
        </div>

        <div class="feature">
            <h2>FAQ</h2>
            <p>Find answers to common questions about fuel efficiency, vehicle maintenance, and eco-friendly driving practices. Get expert advice to optimize your driving experience.</p>
            <a href="faq.php" class="button">FAQ</a>
        </div>
    </div>

    <div class="footer">
        <a href="termsofuse.php">Terms and Privacy Policy</a> |
        <a href="aboutus.php">About Us</a> |
        <a href="contactus.php">Contact Us</a>
    </div>
</body>
</html>
