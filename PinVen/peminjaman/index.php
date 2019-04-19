<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/inventaris.php";
    require_once $BASE_URL . "models/level.php";
    require_once $BASE_URL . "models/ruang.php";
    require_once $BASE_URL . "models/jenis.php";
    
    @$caripeminjaman = $_GET['caripeminjaman'];

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
    <form align="center"  action="?search=<?=$caripeminjaman?>" methode="get">
        <input type="text" name="caripeminjaman" id="" placeholder="Cari Inventaris">
        <input class="search" type="submit" value="Cari">
    </form>
    <br>
    <hr>
    <h3 > List peminjaman </h3>
    <table border="1">
        <tr style="background-color:#333;color:#fff">
            <td>Nama Barang</td> 
            <td>Kondisi</td>
            <td>Keterangan</td>
            <td>Jumlah</td>
            <td>Jenis</td>
            <td>Tempat Penyimpanan</td>           
            <td>Aksi</td>
        </tr>
        <?php $no=1; if(!empty($caripeminjaman)){
            foreach($inventaris->search('nama',$caripeminjaman) as $data) { ?>
        <tr>
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
                <td><a href="nota.php?id=<?=$data['id_inventaris']?>">Pinjam</a></td>
        </tr>
         <?php   }
        } ?>
    </table>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>

</body>
</html>