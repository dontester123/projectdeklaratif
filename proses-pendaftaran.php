<?php

include("inc_koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $gelar = $_POST['gelar'];
    $usia = $_POST['usia'];

    // buat query
    $sql = "INSERT INTO daftar_guru (nama, gelar, usia) VALUE ('$nama', '$gelar', '$usia')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
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