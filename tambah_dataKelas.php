<?php
include 'koneksi.php';

$mataKuliah_kls   = $_POST['mataKuliah_kls'];
$kode_kelas     = $_POST['kode_kelas'];


$query = "INSERT INTO data_kelas (mataKuliah_kls, kode_kelas) VALUES ('$mataKuliah_kls', '$kode_kelas')";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='data_kelas.php';</script>";
    }

?>
