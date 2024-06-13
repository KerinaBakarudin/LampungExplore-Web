<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampung Explore</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #000;
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
            height: 100vh;
            background-image: url(gambar/siger2.png);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 72px;
            margin-bottom: 20px;
            justify-content: left;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .btn {
            padding: 15px 30px;
            background: orange;
            color: #000;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover {
            background: #ff9900;
        }

        .tours {
            padding: 50px;
            text-align: center;
        }

        .tours h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .tour-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .tour-card {
            background: #333;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .tour-card img {
            width: 220px;
            height: 170px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .tour-card p {
            margin: 10px 0;
        }

        .inspire {
            padding: 50px;
            text-align: center;
            background: url('gambar/inspire.jpg') no-repeat center center/cover;
        }

        .inspire h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .inspire-content {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .inspire-content .video {
            width: 45%;
        }

        .inspire-content .video img {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Lampung Explore</div>
    <nav>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="destination.php">Destination</a></li>
            <li><a href="review.php">Rating and Review</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Visit Lampung</h1>
        <a href="#" class="btn">Get Started</a>
    </div>
</section>

<section class="tours">
    <h2>Popular Destination</h2>
    <div class="tour-cards">
        <div class="tour-card">
            <img src="gambar/marina.jpg" alt="Tour 1">
            <p>Pantai Marina</p>
            <p></p>
        </div>
        <div class="tour-card">
            <img src="gambar/waykambas.jpg" alt="Tour 2">
            <p>Way Kambas</p>
            <p></p>
        </div>
        <div class="tour-card">
            <img src="gambar/krakataupark.jpeg" alt="Tour 3">
            <p>Krakatau Park</p>
            <p></p>
        </div>
        <div class="tour-card">
            <img src="gambar/aslan.jpg" alt="Tour 4">
            <p>Bukit Aslan</p>
            <p></p>
        </div>
    </div>
</section>

<section class="inspire">
    <h2>Travel and Inspire Your Life</h2>
    <div class="inspire-content">
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MokQGW8RQIvpWFE_" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qHZnBg53ZESD2OCL" frameborder="0" allowfullscreen></iframe>
        </div>        
    </div>
</section>

</body>
</html>
