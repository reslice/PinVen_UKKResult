<?php

    require_once "autoload.php";
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
                <li><a href="./peminjaman-pegawai">Pinjam Inventory</a></li>
                <li><a href="bantuan.php">Bantuan</a></li>
                <li><a href="logout.php" class="logout">Log Out</a></li>                    
            </ul>
        </nav>
<hr class="tutupNav">
    <p align="center" style="font-size:3em;margin-top:14rem;">Selamat Datang ,  <?=$_SESSION['nama_user']?></p>
    <hr style="width:45%;margin: 1rem auto;border:1.5px solid #666">
    <p align="center" style="font-size:.9em;margin-top:14rem;">Developed IN SMK NEGERI 1 DENPASAR With love BY <a href="https://github.com/reslice"><span style="color:blue">Reslice</span></a></p>

</body>
</html>


