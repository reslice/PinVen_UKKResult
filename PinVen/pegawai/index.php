<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/pegawai.php";
    require_once $BASE_URL . "models/level.php";

    @$cariPegawai = $_GET['cariPegawai'];

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
    <form align="center" action="?search=<?=$cariPegawai?>" methode="get">
        <input type="text" name="cariPegawai" id="">
        <input class="search" type="submit" value="Cari">
    </form>
    <hr>
    <h3> List Pegawai </h3>
    <table border="1" align="center">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td> Nama Pegawai</td>  
            <td> NIP </td>            
            <td> Alamat</td>
            <td >Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariPegawai)){
            foreach($pegawai->search('nama_pegawai',$cariPegawai) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama_pegawai'] ?></td>
                <td><?= $data['nip'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><a href="edit.php?id=<?=$data['id_pegawai']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_pegawai']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:1rem" align="center">Data tidak ada ? <a href="add.php">Daftarkan Pegawai</a></p><br>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
    
</body>
</html>