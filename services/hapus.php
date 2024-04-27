<?php
include 'koneksi.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM product WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: /pweb/");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak diberikan";
}

$conn->close();
