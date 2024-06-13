<?php
include 'koneksi.php'; // Pastikan file ini menghubungkan ke database Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $no_telpon = mysqli_real_escape_string($mysqli, $_POST['no_telpon']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $tujuan_wisata = mysqli_real_escape_string($mysqli, $_POST['tujuan_wisata']);
    $tanggal_pemesanan = mysqli_real_escape_string($mysqli, $_POST['tanggal_pemesanan']);
    $tanggal_wisata = mysqli_real_escape_string($mysqli, $_POST['tanggal_wisata']);
    $jumlah_orang = mysqli_real_escape_string($mysqli, $_POST['jumlah_orang']);

    $query = "INSERT INTO booking (nama, alamat, no_telpon, email, tujuan_wisata, tanggal_pemesanan, tanggal_wisata, jumlah_orang) 
              VALUES ('$nama', '$alamat', '$no_telpon', '$email', '$tujuan_wisata', '$tanggal_pemesanan', '$tanggal_wisata', '$jumlah_orang')";

    if (mysqli_query($mysqli, $query)) {
        header('Location: ../destination.php'); // Redirect ke halaman review setelah update
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>
