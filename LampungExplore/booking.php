<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Take Your Vacation Now</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            box-sizing: border-box;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: orange;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px;
            white-space: nowrap;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            color: orange;
            border-bottom: 2px solid orange;
        }

        nav ul li a.active {
            border-bottom: 2px solid orange;
        }

        .hero {
            position: relative;
            height: 100%;
            background: url('gambar/bookings.png') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .content {
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
        }
        .button-container button {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-container button:hover {
            background-color: #ff8c00;
            border-color: #ff8c00;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lampung Explore</div>
        <nav>
            <ul>
                <li><a href="dashboard.php" >Home</a></li>
                <li><a href="destination.php">Destination</a></li>
                <li><a href="review.php">Rating and Review</a></li>
                <li><a href="#" class="active">Booking</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>TAKE YOUR VACATION NOW</h1>
            <p>You know you deserve it</p>
            <div class="button-container">
                <button onclick="window.location.href='form-booking.php'">BOOK NOW</button>
            </div>
        </div>
    </div>
</body>
</html>