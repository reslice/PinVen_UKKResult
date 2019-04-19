<?php



    require_once "autoload.php";
    require_once $BASE_URL . "models/jenis.php";
    if(empty($_SESSION)){
        header('location: login.php');
    }
    $akses = ["Administrator","Petugas"];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>PinVen | Pinjam Inventaris</title>

</head>
<body>   
       <?php require_once "partial/_header.php" ?>
       <nav>
            <ul>
                <li><a href="./peminjaman">Pinjam Inventory</a></li>
                <?php 
                    
                    if($_SESSION['level_user'] == "Administrator"){ ?>
                        <li><a href="./inventaris">Manajemen Inventory</a></li>
                        <li><a href="./petugas">Petugas</a></li>
                        <li><a href="./jenis">Jenis</a></li>
                   <?php } ?>
                <li><a href="./pegawai">Peminjam</a></li>               
                <li><a href="./pengembalian">Pengembalian</a></li>
                <li><a href="./laporan">Laporan</a></li>
                <li><a href="logoutMaster.php" class="logout">Log Out</a></li>                    
            </ul>
        </nav>
<hr class="tutupNav">
    
    <p align="center" style="font-size:3em;margin-top:14rem;">Selamat Datang ,  <?=$_SESSION['nama_user']?></p>
    <hr style="width:45%;margin: 1rem auto;border:1.5px solid #666">
    <p align="center" style="font-size:.9em;margin-top:14rem;">Developed IN SMK NEGERI 1 DENPASAR With love BY <a href="https://github.com/reslice">Reslice</a></p>
</body>
</html>