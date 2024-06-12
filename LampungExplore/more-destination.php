<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Info Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: #333;
        }
        
        .destination {
            background-color: white;
            margin: 50px auto 20px auto; /* Adjusted margin to push the box slightly up */
            padding: 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        
        .destination img {
            width: 100%;
            height: 400px; 
            object-fit: cover; 
            border-radius: 10px 10px 0 0;
        }
        
        .destination-info {
            padding: 20px;
            text-align: left; 
        }
        
        .destination-info h2 {
            margin-top: 0;
            color: darkorange;
            font-weight: 600;
        }
        
        .destination-info p {
            line-height: 1.6;
            font-weight: 300;
        }
        
        .destination-info ul {
            list-style-type: none;
            padding: 0;
        }
        
        .destination-info ul li {
            margin-bottom: 10px;
            font-weight: 400;
        }
        
        .button-container {
            text-align: center; 
            margin-top: 20px;
        }
        
        .book-now {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
        }
        
        .book-now:hover {
            background-color: darkorange;
        }   
    </style>
</head>
<body>
    <section class="destination">
        <img src="gambar/aslan.jpg" alt="Bali" class="destination-image">
        <div class="destination-info">
            <h2>Bukit Aslan</h2>
            <p> Bukit Aslan merupakan sebuah tempat wisata yang menawarkan pemandangan alam yang spektakuler dengan suasana yang asri dan tenang. Pengunjung dapat menikmati pemandangan hijau yang luas, serta pemandangan matahari terbit dan terbenam yang menakjubkan dari puncak bukit. Bukit Aslan juga menjadi tempat favorit untuk berfoto, hiking, dan berkemah. Keindahan alam yang disajikan menjadikan tempat ini cocok untuk relaksasi dan melepas penat dari kesibukan sehari-hari.</p>
            <ul>
                <li><strong>Lokasi:</strong> Desa Harapan Jaya, Kecamatan Way Ratai, Kabupaten Pesawaran, Provinsi Lampung, Indonesia.</li>
                <li><strong>Tiket Masuk:</strong> Rp 35.000</li>
            </ul>
            <div class="button-container">
                <a href="booking.php" class="book-now">Book Now</a>
            </div>

        </div>
    </section>
</body>
</html>