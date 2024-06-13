<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi</title>
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
        <h2>Tambah Destinasi</h2>
        <form action="tambah-destination.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="destinasi">Nama Destinasi:</label>
                <input type="text" id="destinasi" name="destinasi" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" required> </textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" accept="image/*" required>
            </div>
  
            <div class="form-group button-group">
                <button type="button" onclick="history.back()">Kembali</button>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

    <?php
    include '../conn/koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $destinasi = $_POST['destinasi'];
        $deskripsi = $_POST['deskripsi'];

        // File yang diunggah
        $nama_file = $_FILES['foto']['name'];
        $ukuran_file = $_FILES['foto']['size'];
        $tmp_file = $_FILES['foto']['tmp_name'];
        $upload_dir = "destinasi/";
        $target_file = $upload_dir . basename($nama_file);

        // Cek apakah file berhasil diunggah
        if (move_uploaded_file($tmp_file, $target_file)) {
            $stmt = $mysqli->prepare("INSERT INTO destinasi (destinasi, deskripsi, foto) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $destinasi, $deskripsi, $nama_file);
            if ($stmt->execute()){
                header("Location: destination-admin.php");
            } else{
                echo "Error: ".$stmt->error;
            }
            $stmt->close();
        } else {
            echo "<h5 style='color: red; text-align: center;'>Pengunggahan file gagal.</h5>";
        }
    }
    ?>

</body>
</html>
