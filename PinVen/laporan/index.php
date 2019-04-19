<?php 

    require_once "../autoload.php";
    
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
    <form align="center" action="laporan.php" method="POST">
        Tanggal Awal Laporan <input type="date" value="<?= date('Y-m-d') ?>" name="awal" id="">
        Tanggal Akhir Laporan <input type="date" value="<?= date('Y-m-d') ?>" name="akhir" id="">
        <input class="search" name="submit" type="submit" value="Cari">
    </form>
    <hr>
    <p style="margin:1rem" align="center"><a href="../index.php">Kembali</a></p>
</body>
</html>