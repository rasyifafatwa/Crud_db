<?php
include_once("koneksi.php");
$model_baju = $_POST['model_baju'];
$bahan_baju = $_POST['bahan_baju'];
$warna_baju = $_POST['warna_baju'];
$ukuran_baju = $_POST['ukuran_baju'];
$kategori_baju = $_POST['kategori_baju'];
$harga_baju = $_POST['harga_baju'];
$query = "INSERT INTO tb_baju
(model_baju, bahan_baju, warna_baju,ukuran_baju,kategori_baju, harga_baju) VALUE
('$model_baju','$bahan_baju','$warna_baju','$ukuran_baju', '$kategori_baju', '$harga_baju')";

$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "input data gagal";
}