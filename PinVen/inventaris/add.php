<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/Petugas.php";
    require_once $BASE_URL . "models/Level.php";
    require_once $BASE_URL . "models/Ruang.php";
    require_once $BASE_URL . "models/Jenis.php";
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
    <form align="center" action="process/add-process.php" method="POST">
           <input type="text" name="namaBarang" id="" Placeholder="Nama Barang">
            <select name="kondisi" id="">
                <option value="Baik"> Baik </option>
                <option value="Kurang Baik"> Kurang Baik </option>
                <option value="Rusak"> Rusak </option>
            </select>
            <input type="text" name="keterangan" id="" Placeholder="Keterangan">
            <input type="number" name="jumlah" id="" Placeholder="Jumlah Stock">

                <select name="idJenis">
                    <?php foreach($jenis->all() as $data){?>
                        <option value="<?=$data['id_jenis']?>"><?=$data['nama_jenis']?></option>
                    <?php }?>
                </select>


                <select name="idRuang">
                    <?php foreach($ruang->all() as $data){?>
                        <option value="<?=$data['id_ruang']?>"><?=$data['nama_ruang']?></option>
                    <?php }?>
                </select>
                
           <input type="text" name="kodeInventaris" id="" Placeholder="Kode Inventaris">
            <input class="search" type="submit" name="submit" value="Kirim">

    </form>


</body>
</html>