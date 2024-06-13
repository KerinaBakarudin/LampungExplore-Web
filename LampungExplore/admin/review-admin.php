<?php
include '../conn/koneksi.php'; // Memastikan koneksi ke database

// Memanggil kolom yang ada pada tabel aset
$query_mysql = mysqli_query($mysqli, "SELECT * FROM review");

if (!$query_mysql) {
    die('Query Error: ' . mysqli_error($mysqli));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating & Review</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
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

        .review {
            padding: 100px 50px;
            text-align: center;
        }

        .heading {
            margin-bottom: 50px;
            font-size: 36px;
            color: #333;
        }

        .heading span {
            color: orange;
        }

        .write-comment-button {
            margin-bottom: 50px;
        }

        .write-comment-button a{
            text-decoration: none;
        }

        .write-comment-button button {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .write-comment-button button:hover {
            background-color: darkorange;
        }

        .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 24px; /* Atur jarak antara box */
    justify-content: space-between; /* Mengatur penempatan box */
}

.box {
    flex: 1 1 calc(33.33% - 16px); /* Menentukan lebar setiap box review (33.33% untuk tiga box dalam satu baris) */
    max-width: calc(33.33% - 16px); /* Lebar maksimum untuk setiap box review */
    background: #fff;
    box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 24px;
    position: relative;
    box-sizing: border-box;
    margin-bottom: 24px; /* Jarak antara box secara vertikal */
}




        .box .fa-quote-right {
            position: absolute;
            bottom: 24px;
            right: 24px;
            font-size: 48px;
            color: #eee;
        }

        .stars {
            margin-bottom: 16px;
        }

        .stars i {
            color: #f39c12;
            font-size: 20px;
        }

        .box p {
            color: #777;
            font-size: 16px;
            margin: 16px 0;
        }

        .user {
            display: flex;
            align-items: center;
            margin-top: 16px;
        }

        .user img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 16px;
        }

        .user-info h3 {
            font-size: 18px;
            color: #333;
            margin: 0;
        }

        .actions {
            position: absolute;
            top: 24px;
            right: 24px;
        }

        .actions a {
            color: #aaa;
            margin-left: 8px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .actions a:hover {
            color: #f39c12;
        }

    </style>
</head>
<body>

<header>
    <div class="logo">Lampung Explore</div>
    <nav>
        <ul>
            <li><a href="dashboard-admin.php">Home</a></li>
                <li><a href="destination-admin.php">Destination</a></li>
                <li><a href="review-admin.php" class="active">Rating and Review</a></li>
                <li><a href="booking-admin.php">Booking</a></li>
                <li><a href="../index.php">Log Out</a>
            </li>
        </ul>
    </nav>
</header>
    
<div class="review">
    <h1 class="heading">Traveler's <span>Review</span></h1>
    
    <div class="box-container"> <!-- Letakkan di luar loop while -->
        <?php while ($data = mysqli_fetch_assoc($query_mysql)) { ?>
            <div class="box">

                <div class="stars">
                    <?php 
                    $rating = $data['rating'];
                    for ($i = 0; $i < 5; $i++) { 
                        if ($i < $rating) {
                            echo '<i class="fas fa-star"></i>';
                        } else {
                            echo '<i class="far fa-star"></i>';
                        }
                    }
                    ?>
                </div>
                <p><?php echo $data['komentar']; ?></p>
                <div class="user">
                    <div class="user-info">
                        <h3><?php echo $data['nama']; ?></h3>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
