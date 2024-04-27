<?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang dikirimkan melalui form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $type = $_POST['type'];

    // Melakukan koneksi ke database
    include '../services/koneksi.php';

    // Membuat query SQL untuk melakukan update data
    $query = "UPDATE product SET name_product='$nama', price='$harga', stock='$stock', type_product='$type' WHERE id='$id'";

    // Menjalankan query
    if ($conn->query($query) === TRUE) {
        header("location: /pweb/");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();
}
?>
