<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
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

        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 100px;
            padding: 20px;
        }

        .card {
            width: 325px;
            background-color: #f0f0f0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
            margin: 50px;
        }

        .card img {
            width: 100%;
            height: 200px; 
            object-fit: cover; 
        }

        .card-content {
            padding: 16px;
        }

        .card-content h3 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #000;
        }

        .card-content p {
            color: #666;
            font-size: 15px;
            line-height: 1.3;
        }
        
        .card-content .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 16px;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lampung Explore</div>
        <nav>
            <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="destination.php" class="active">Destination</a></li>
            <li><a href="review.php">Rating and Review</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="card-container">
        <div class="card">
            <img src="gambar/aslan.jpg" alt="error">
            <div class="card-content">
                <h3>Bukit Aslan</h3>
                <p>Bukit Aslan menawarkan pemandangan matahari terbit dan terbenam yang memukau serta suasana hijau yang asri, ideal untuk trekking dan fotografi.</p>
                <a href="more-destination.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="gambar/marina.jpg" alt="error">
            <div class="card-content">
                <h3>Pantai Marina</h3>
                <p>Pantai Marina terkenal dengan pasir putih dan air laut jernih, menawarkan aktivitas seperti berenang, snorkeling, dan banana boat, serta hidangan laut segar.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="gambar/waykambas.jpg" alt="error">
            <div class="card-content">
                <h3>Way Kambas</h3>
                <p>Taman Nasional Way Kambas adalah pusat konservasi gajah Sumatera, juga menjadi habitat berbagai satwa liar lainnya, cocok untuk pecinta alam dan satwa.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="gambar/krakataupark.jpeg" alt="error">
            <div class="card-content">
                <h3>Krakatau Park</h3>
                <p>Krakatau Park menawarkan trekking di sekitar Gunung Krakatau dan fasilitas camping, ideal untuk petualangan dan menikmati keindahan alam.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="gambar/kiluan.jpg" alt="error">
            <div class="card-content">
                <h3>Teluk Kiluan</h3>
                <p>Teluk Kiluan terkenal dengan wisata lumba-lumba, snorkeling, dan pemandangan sunset yang spektakuler, sempurna untuk relaksasi dan fotografi.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="gambar/pahawang.jpg" alt="error">
            <div class="card-content">
                <h3>Pulau Pahawang</h3>
                <p>Pulau Pahawang adalah destinasi populer untuk snorkeling dan diving dengan terumbu karang indah dan kehidupan laut yang kaya, dilengkapi dengan homestay dan resort.</p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    </div>
</body>
</html>
