<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/ruang.php";

    @$cariRuang = $_GET['cariRuang'];
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
    <form align="center" action="?search=<?=$cariRuang?>" methode="get">
        <input type="text" name="cariRuang" placeholder="Cari Ruang" id="">
        <input class="search" type="submit" value="Cari">
    </form>
    <hr>
    <h3> List Ruang </h3>
    <table border="1" align="center">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td>Nama Ruang</td>  
            <td>Kode Ruang</td>            
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariRuang)){
            foreach($ruang->search('nama_ruang',$cariRuang) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama_ruang'] ?></td>
                <td><?= $data['kode_ruang'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td><a href="edit.php?id=<?=$data['id_ruang']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_ruang']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:3rem" align="center">Data tidak ada ? <a href="add.php">Tambahkan Inventaris</a></p>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>