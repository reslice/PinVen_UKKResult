<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/petugas.php";
    require_once $BASE_URL . "models/level.php";

    @$cariPetugas = $_GET['cariPetugas'];
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
    <form align="center" action="?search=<?=$cariPetugas?>" methode="get">
        <input type="text" name="cariPetugas" id="">
        <input class="search" type="submit" value="Cari">
    </form>
    <hr>
    <h3> List Petugas </h3>
    <table border="1" align="center">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td>Nama Petugas</td>  
            <td>Jabatan </td>            
            <td>Username</td>
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariPetugas)){
            foreach($petugas->search('nama_petugas',$cariPetugas) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama_petugas'] ?></td>
                <?php foreach($level->all() as $detailLevel){
                    if($detailLevel['id_level'] == $data['id_level']){
                        echo "<td>$detailLevel[nama_level]</td>";
                    }
                }
                ?>
                <td><?= $data['username'] ?></td>
                <td><a href="edit.php?id=<?=$data['id_petugas']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_petugas']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:3rem" align="center">Data tidak ada ? <a href="add.php">Daftarkan Petugas</a></p>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>