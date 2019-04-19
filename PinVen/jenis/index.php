<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/jenis.php";

    @$cariJenis = $_GET['cariJenis'];
    if($_SESSION['level_user'] == "Administrator"){

    }
    else {
        header('location: ../index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>PinVen</title>
</head>
<body>
    <?php require_once "../partial/_header.php" ?>
    <form align="center" action="?search=<?=$cariJenis?>" methode="get">
        <input type="text" name="cariJenis" id="">
        <input class="search" type="submit" value="Cari">
    </form>
    <hr>
    <h3> List Jenis </h3> 
    <?php $query = $jenis->storedProcedure('hitung_jenis');?>
    <p align="center">Total jenis saat ini adalah : <?= $query['total_jenis'] ?></p><br>
    <table border="1" align="center">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td>Nama Jenis</td>  
            <td>Kode Jenis</td>            
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariJenis)){
            foreach($jenis->search('nama_jenis',$cariJenis) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama_jenis'] ?></td>
                <td><?= $data['kode_jenis'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td><a href="edit.php?id=<?=$data['id_jenis']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_jenis']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:3rem" align="center">Data tidak ada ? <a href="add.php">Tambahkan Jenis</a></p>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>