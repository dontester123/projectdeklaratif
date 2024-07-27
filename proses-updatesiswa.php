<?php

include("inc_koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpansiswa'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // buat query update
    $sql = "UPDATE daftar_siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
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