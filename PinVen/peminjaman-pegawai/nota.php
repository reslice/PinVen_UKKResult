<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/inventaris.php";
    require_once $BASE_URL . "models/level.php";
    require_once $BASE_URL . "models/ruang.php";
    require_once $BASE_URL . "models/jenis.php";
    require_once $BASE_URL . "models/pegawai.php";
    
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }
    else {
        header('location: index.php');
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
    
    <form align="center"  action="process/add-process.php" method="POST">
        <input type="hidden" value="<?=$_GET['id']?>" name="idInventaris">
        <input type="hidden" value="<?= $_SESSION['id_user']?>" name="idPegawai">
        Tanggal Pinjam <input type="date" value="<?= date('Y-m-d') ?>" name="tanggalPinjam">
        Tanggal Kembali <input type="date" value="<?= date('Y-m-d')?>" name="tanggalKembali">
        Jumlah <input type="number" name="jumlah">
        Peminjam <input type="text" value="<?= $_SESSION['nama_user'] ?>" placeholder="<?= $_SESSION['nama_user'] ?> " disabled>
        <input class="search" name="submit" type="submit" value="Pinjam">
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
        </tr>
        <tr>
            <?php foreach($inventaris->whereAll('id_inventaris',$id) as $data){ ?>
                <td><?=$data['nama']?></td>
                <td><?=$data['kondisi']?></td>
                <td><?=$data['keterangan']?></td>
                <td><?=$data['jumlah']?></td>
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
            <?php } ?>
        </tr>

    </table>

</body>
</html>