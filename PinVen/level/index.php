<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/level.php";
    
    @$cariLevel = $_GET['cariLevel'];

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
    <form align="center" action="?search=<?=$cariLevel?>" methode="get">
        <input type="text" name="cariLevel" value="Cari Level" id="">
        <input class="search" type="submit" value="Cari">
    </form>
    <hr>
    <h3> List Level </h3>
    <table border="1" align="center">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariLevel)){
            foreach($level->search('nama_level',$cariLevel) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama_level'] ?></td>
                <td><a href="edit.php?id=<?=$data['id_level']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_level']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:1rem" align="center">Data tidak ada ? <a href="add.php">Tambah Level</a></p><br>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>