<?php
include("inc_header.php");
$sql = "SELECT * FROM daftar_guru";
$query = mysqli_query($koneksi, $sql);
$sqlsiswa = "SELECT * FROM daftar_siswa";
$querysiswa = mysqli_query($koneksi, $sqlsiswa);
?>
<div class="row justify-content-center my-4">
    <h1 class="text-center">DASHBOARD</h1>
    <div class="col-md-4 card mx-3">
        <div class="card-body">
            <h5 class="card-title">Total Data Guru</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Berikut total data guru yang telah ditambahkan</h6>
            <p class="card-text"><?php echo mysqli_num_rows($query) ?></p>
            <a href="admin_guru.php" class="btn btn-primary card-link">Halaman Guru</a>
        </div>
    </div>
    <div class="col-md-4 card">
        <div class="card-body">
            <h5 class="card-title">Total Data siswa</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Berikut total data siswa yang telah ditambahkan</h6>
            <p class="card-text"><?php echo mysqli_num_rows($querysiswa) ?></p>
            <a href="admin_siswa.php" class="btn btn-info card-link">Halaman siswa</a>
        </div>
    </div>
</div>

<?php
include("inc_footer.php");
?>