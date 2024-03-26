<?php

include 'koneksi.php';

$Nama = $_POST['Nama'];
$Asal = $_POST['Asal'];
$lahir = $_POST['lahir'];
$Umur = $_POST['Umur'];

$query = "INSERT INTO anak_anak (nama, Asal, lahir, Umur)
          VALUES ('$Nama', '$Asal', '$lahir', '$Umur') ";

if($conn->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>