<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan Wisata</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
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

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            width: 100%;
            max-width: 1000px;
        }
        h2 {
            color: #ff8c00;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ff8c00;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
                <li><a href="review-admin.php">Rating and Review</a></li>
                <li><a href="booking-admin.php" class="active">Booking</a></li>
                <li><a href="../index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Daftar Pemesanan Wisata</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Email</th>
                    <th>Tujuan Wisata</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Wisata</th>
                    <th>Jumlah Orang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../conn/koneksi.php';

                $sql = "SELECT * FROM booking";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["nama"] . '</td>';
                        echo '<td>' . $row["alamat"] . '</td>';
                        echo '<td>' . $row["no_telpon"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '<td>' . $row["tujuan_wisata"] . '</td>';
                        echo '<td>' . $row["tanggal_pemesanan"] . '</td>';
                        echo '<td>' . $row["tanggal_wisata"] . '</td>';
                        echo '<td>' . $row["jumlah_orang"] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="9" style="text-align:center;">Tidak ada pemesanan ditemukan.</td></tr>';
                }

                $mysqli->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
