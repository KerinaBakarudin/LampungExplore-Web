<?php
include '../conn/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the destination image from the server
    $sql = "SELECT foto FROM destinasi WHERE id = $id";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = "destinasi/" . $row['foto'];
        if (file_exists($file_path)) {
            unlink($file_path); // Delete the file
        }
    }

    // Delete the destination record from the database
    $sql = "DELETE FROM destinasi WHERE id = $id";
    if ($mysqli->query($sql) === TRUE) {
        header('Location: destination-admin.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

    $mysqli->close();
} else {
    echo "No destination ID provided.";
}
?>
