<?php
include("inc_header.php");
if (!in_array("siswa", $_SESSION['admin_akses'])) {
    echo "Kamu tidak punya akses";
    include("inc_footer.php");
    exit();
}
?>
    <header>
        <h3>Daftar Siswa</h3>
    </header>

    <nav>
        <a class="btn btn-success" href="form-tambah-siswa.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar_siswa";
        $query = mysqli_query($koneksi, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['kelas']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
        

            echo "<td>";
            echo "<a class='btn btn-info' href='form-edit-siswa.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a class='btn btn-danger' href='form-hapus-siswa.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
<?php
include("inc_footer.php");
?>