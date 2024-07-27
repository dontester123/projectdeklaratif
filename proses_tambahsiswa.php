<?php

include("inc_koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftarsiswa'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $sql = "INSERT INTO daftar_siswa (nama, kelas, jurusan) VALUE ('$nama', '$kelas', '$jurusan')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin_siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: admin_siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>