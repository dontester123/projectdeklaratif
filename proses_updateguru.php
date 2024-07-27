<?php

include("inc_koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gelar = $_POST['gelar'];
    $usia = $_POST['usia'];

    // buat query update
    $sql = "UPDATE daftar_guru SET nama='$nama', gelar='$gelar', usia='$usia' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin_guru.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: admin_guru.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>