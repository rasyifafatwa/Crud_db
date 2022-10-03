<?php
include_once("koneksi.php");
$query = "SELECT * FROM tb_baju";
$hasil = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Baju</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Daftar Toko Hp</title>
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA BAJU DI TOKO </h2>
    </div>
    <a href="tambahbaju.php" class="btn btn-primary
mb-1 mt-1"><i class="fas fa-user-plus mr2"></i>Tambah Baju</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID Baju</th>
                <th scope="col">Model Baju</th>
                <th scope="col">Bahan Baju</th>
                <th scope="col">Warna Baju</th>
                <th scope="col">Ukuran Baju</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga Baju</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <th scope="row"> <?php echo $data['id_baju']; ?>
                    </th>
                    <td> <?php echo $data['model_baju']; ?> </td>
                    <td> <?php echo $data['bahan_baju']; ?> </td>
                    <td> <?php echo $data['warna_baju']; ?> </td>
                    <td> <?php echo $data['ukuran_baju']; ?> </td>
                    <td> <?php echo $data['kategori_baju']; ?> </td>
                    <td> <?php echo $data['harga_baju']; ?> </td>
                    <td> <a href="ubahbaju.php?id=<?php echo
                    $data['id_baju'] ?>">Edit</a> | <a href="hapusbaju.php?id=<?php echo
                    $data['id_baju'] ?>">Delete</a> </td>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>