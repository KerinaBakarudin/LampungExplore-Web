<?php
include '../conn/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $destinasi = $_POST['destinasi'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $target_dir = "destinasi/";

    if (!empty($foto)) {
        $target_file = $target_dir . basename($foto);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                $sql = "UPDATE destinasi SET destinasi='$destinasi', deskripsi='$deskripsi', foto='$foto' WHERE id=$id";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $sql = "UPDATE destinasi SET destinasi='$destinasi', deskripsi='$deskripsi' WHERE id=$id";
    }

    if ($mysqli->query($sql) === TRUE) {
        header('Location: destination-admin.php');
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

    $mysqli->close();
}
?>
