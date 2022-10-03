<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM tb_baju WHERE id_baju=" . $id;
$hasil = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Model Baju </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstr
ap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA
wiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ubah Model Baju </title>
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>Data Penjualan Baju</h2>
    </div>
    <h1 class="ml-5">Ubah Model Baju  </h1>

    <form method="post" action="prosesubah.php" class="ml-5">
        <?php while ($data = mysqli_fetch_array($hasil)) { ?>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class=" form-group row">
                <label for=" merk" class="col-sm-1 col-form-label">Model Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="model_baju" class="form-control" value="<?php echo $data['model_baju'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-1 col-formlabel">Bahan Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="bahan_baju" class="form-control" value="<?php echo $data['bahan_baju'] ?>">
                </div>

            </div>
            <div class="form-group row">
                <label for="warna" class="col-sm-1 col-formlabel">Warna Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="warna_baju" class="formcontrol" value="<?php echo $data['warna_baju'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-1 col-formlabel">Ukuran Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="ukuran_baju" class="form-control" value="<?php echo $data['ukuran_baju'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-1 col-formlabel">Kategori Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="kategori_baju" class="form-control" value="<?php echo $data['kategori_baju'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-1 col-formlabel">Harga Baju</label>
                <div class="col-sm-3">
                    <input type="text" name="harga_baju" class="form-control" value="<?php echo $data['harga_baju'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0
mr-0">Kirim</button>
            <a href="index.php" class="btn btn-primary mb-1 mt-1 ml0"><i class="fas fa-user-plus mr-0"></i>Data Penjualan Baju</a>
    </form>
<?php } ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVN
A/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/po
pper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fak
FPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyj
Uar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>