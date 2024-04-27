<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $type = $_POST["type"];


    $query = "INSERT INTO product (name_product, price, stock, type_product) VALUES ('$nama', '$harga', '$stock', '$type')";

    if (mysqli_query($conn, $query)) {
        header("location: /pweb/");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Akses tidak sah.";
}