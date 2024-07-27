<?php
session_start();
include("inc_koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <!-- <nav>
            <ul>
                
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <div class="d-flex">
                        <li class="nav-item"></li>
                    </div>
                    
                </ul>
                </div>
            </div>
            </nav> -->

            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="admin_depan.php">Halaman Depan</a>
                    <a class="navbar-brand" href="admin_guru.php">Halaman Guru</a>
                    <a class="navbar-brand" href="admin_siswa.php">Halaman Siswa</a>
                    <form class="d-flex" role="search">
                        <a class="navbar-brand" href="logout.php">Logout >></a>
                    </form>
                </div>
            </nav>