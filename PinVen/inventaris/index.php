<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/inventaris.php";
    require_once $BASE_URL . "models/level.php";
    require_once $BASE_URL . "models/jenis.php";
    require_once $BASE_URL . "models/ruang.php";
    require_once $BASE_URL . "models/petugas.php";

    @$cariInventaris = $_GET['cariInventaris'];
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
    <br>
    <form align="center" action="?search=<?=$cariInventaris?>" methode="get">
        <input type="text" name="cariInventaris" id="" placeholder="Cari Inventaris">
        <input type="submit" class="search" value="Cari">
    </form>
    <br>
    <hr>
    <h3 align="center"> List Inventaris </h3>
    <table border="1">
        <tr style="background-color:#333;color:#fff">
            <td>No</td>
            <td>Nama Inventaris</td> 
            <td>Kondisi</td> 
            <td>Keterangan</td>
            <td>Jumlah</td>
            <td>Jenis</td>
            <td>Tempat Penyimpanan</td>
            <td>Kode Inventaris</td>            
            <td> Petugas Yang Bertanggu Jawab </td>
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($cariInventaris)){
            foreach($inventaris->search('nama',$cariInventaris) as $data) { ?>
               <tr>
               <td><?= $no++ ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['kondisi']?></td>
                <td><?= $data['keterangan']?></td>
                <td><?= $data['jumlah']?></td>
                <?php foreach($jenis->all() as $detailJenis){
                    if($detailJenis['id_jenis'] == $data['id_jenis']){
                        echo "<td>$detailJenis[nama_jenis]</td>";
                    }
                }      
                ?>
                <?php foreach($ruang->all() as $detailRuang){
                    if($detailRuang['id_ruang'] == $data['id_ruang']){
                        echo "<td>$detailRuang[nama_ruang]</td>";
                    }
                }
                ?>
                <td><?= $data['kode_inventaris'] ?></td>
                <?php foreach($petugas->all() as $detailPetugas){
                    if($detailPetugas['id_petugas'] == $data['id_petugas']){
                        echo "<td>$detailPetugas[nama_petugas]</td>";
                    }
                }
                ?>
                <td><a href="edit.php?id=<?=$data['id_inventaris']?>">Edit</a> | <a href="delete.php?id=<?=$data['id_inventaris']?>">Delete</a></td>
               </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:3rem" align="center">Data tidak ada ? <a href="add.php">Tambahkan Inventaris</a></p>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>