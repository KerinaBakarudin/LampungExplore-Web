<?php
include '../conn/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM destinasi WHERE id = $id";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Destination not found.";
        exit;
    }
} else {
    echo "No destination ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Wisata</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('../gambar/formbook.png') no-repeat center center;
            background-size: cover;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #ff8c00;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
        }
        .form-group input[type="date"],
        .form-group input[type="number"] {
            padding: 8px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button {
            background-color: #ff8c00;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            width: 48%;
        }
        .button-group button:hover {
            background-color: #e67e22;
        }
        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ff8c00;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Edit Destination</h1>
    <form action="update-destination.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="destinasi">Nama Destinasi:</label>
                <input type="text" id="destinasi" name="destinasi" value="<?php echo $row['destinasi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required><?php echo $row['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" id="foto" name="foto">
                <img src="destinasi/<?php echo $row['foto']; ?>" alt="<?php echo $row['destinasi']; ?>" style="width: 100%; margin-top: 10px;">
            </div>
  
            <div class="form-group button-group">
                <button type="button" onclick="history.back()">Kembali</button>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
