<?php
include 'koneksi.php';

$kodematkul   = $_POST['kodematkul'];
$matkul     = $_POST['matkul'];


$query = "INSERT INTO data_matkul (kodematkul, matkul) VALUES ('$kodematkul', '$matkul')";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='data_mata_kuliah.php';</script>";
    }

?>
