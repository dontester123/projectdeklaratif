<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses_tambahsiswa.php" method="POST">

        <fieldset>

        <div class="form-group col-6">
            <label for="nama">Nama: </label>
            <input type="text" class="form-control" name="nama" placeholder="nama" />
        </div>
        <div class="form-group col-6 my-3">
            <label for="kelas">Kelas: </label>
            <input type="text" name="Kelas" class="form-control" placeholder="kelas" />
        </div>
        <div class="form-group col-6">
            <label for="jurusan">jurusan: </label>
            <input type="text" name="jurusan" class="form-control" placeholder="jurusan" />
        </div>
        <div class="form-group my-3">
            <input type="submit" value="Daftar" class="btn btn-primary" name="daftarsiswa" />
        </div>

        </fieldset>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>