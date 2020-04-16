<?php
include 'koneksi.php';

$matkul_sesi   = $_POST['matkul_sesi'];
$kode_sesi     = $_POST['kode_sesi'];


$query = "INSERT INTO data_sesi (matkul_sesi, kode_sesi) VALUES ('$matkul_sesi', '$kode_sesi')";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='data_sesi.php';</script>";
    }

?>
