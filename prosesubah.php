<?php
include_once("koneksi.php");
$id = $_POST['id'];
$model_baju = $_POST['model_baju'];
$bahan_baju = $_POST['bahan_baju'];
$warna_baju = $_POST['warna_baju'];
$ukuran_baju = $_POST['ukuran_baju'];
$kategori_baju = $_POST['kategori_baju'];
$harga_baju = $_POST['harga_baju'];
$query = "UPDATE tb_baju SET
id_baju='$id',model_baju='$model_baju',bahan_baju='$bahan_baju', 
warna_baju='$warna_baju',ukuran_baju = '$ukuran_baju', 
kategori_baju= '$kategori_baju', harga_baju = '$harga_baju' WHERE id_baju=$id";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo $query . "<br>";
    echo "Update data gagal";
}