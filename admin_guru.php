<?php
include("inc_header.php");
if (!in_array("guru", $_SESSION['admin_akses'])) {
    echo "Kamu tidak punya akses";
    include("inc_footer.php");
    exit();
}
?>
    <header>
        <h3>Daftar Guru</h3>
    </header>

    <nav>
        <a class="btn btn-success" href="form-tambah-guru.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gelar</th>
            <th>Usia</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar_guru";
        $query = mysqli_query($koneksi, $sql);

        while($guru = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$guru['id']."</td>";
            echo "<td>".$guru['nama']."</td>";
            echo "<td>".$guru['gelar']."</td>";
            echo "<td>".$guru['usia']."</td>";
        

            echo "<td>";
            echo "<a class='btn btn-info' href='form-editguru.php?id=".$guru['id']."'>Edit</a> | ";
            echo "<a class='btn btn-danger' href='form-hapusguru.php?id=".$guru['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
<?php
include("inc_footer.php");
?>