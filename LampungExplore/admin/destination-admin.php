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

        .container {
            margin-top: 100px;
            padding: 20px;
            text-align: center;
        }

        .add-button {
            margin-bottom: 20px;
        }

        .add-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .add-button a:hover {
            background-color: darkorange;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
        }

        .card {
            width: 325px;
            background-color: #f0f0f0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
            margin: 20px;
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: 200px; 
            object-fit: cover; 
        }

        .card-content {
            padding: 16px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
            flex: 1;
        }

        .card-content .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 16px;
            color: #fff;
            align-self: flex-start;
        }

        .card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .card-actions a {
            color: #fff;
            text-decoration: none;
        }

        .card-actions .edit {
            color: orange;
        }

        .card-actions .delete {
            color: #F44336;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lampung Explore</div>
        <nav>
            <ul>
            <li><a href="dashboard-admin.php">Home</a></li>
                <li><a href="destination-admin.php" class="active">Destination</a></li>
                <li><a href="review-admin.php">Rating and Review</a></li>
                <li><a href="booking-admin.php">Booking</a></li>
                <li><a href="../index.php">Log Out</a>
            </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="add-button">
            <a href="tambah-destination.php">Tambah Destinasi</a>
        </div>

        <div class="card-container">
            <?php
            include '../conn/koneksi.php';
            $sql = "SELECT * FROM destinasi";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="destinasi/' . $row["foto"] . '" alt="' . $row["destinasi"] . '">';
                    echo '<div class="card-content">';
                    echo '<h3>' . $row["destinasi"] . '</h3>';
                    echo '<p>' . $row["deskripsi"] . '</p>';
                    echo '<a href="' . '" class="btn">Booking</a>';
                    echo '<div class="card-actions">';
                    echo '<a href="edit-destination.php?id=' . $row["id"] . '" class="edit">Edit</a>';
                    echo '<a href="delete-destination.php?id=' . $row["id"] . '" class="delete">Delete</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p style="color: #fff; text-align: center;">No destinations found.</p>';
            }

            $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
