<?php

include("inc_koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: admin_guru.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM daftar_guru WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$guru = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulir Edit Guru</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Guru</h3>
    </header>

    <form action="proses_updateguru.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $guru['id'] ?>" />

        <div class="form-group col-6">
            <label for="nama">Nama: </label>
            <input type="text" class="form-control" name="nama" placeholder="Gelar" value="<?php echo $guru['nama'] ?>" />
        </div>
        <div class="form-group col-6 my-3">
            <label for="gelar">Gelar: </label>
            <input type="text" name="gelar" class="form-control" placeholder="Gelar" value="<?php echo $guru['gelar'] ?>" />
        </div>
        <div class="form-group col-6">
            <label for="usia">Usia: </label>
            <input type="text" name="usia" class="form-control" placeholder="Usia" value="<?php echo $guru['usia'] ?>" />
        </div>
        <div class="form-group my-3">
            <input type="submit" class="btn btn-success" value="Simpan" name="simpan" />
            <a href="admin_guru.php" class="btn btn-secondary" >Kembali</a>
        </div>

        </fieldset>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>