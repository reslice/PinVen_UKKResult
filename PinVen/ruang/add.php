<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/Ruang.php";
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

            <input type="text" name="namaRuang" id="" Placeholder="Nama Ruang">
            <input type="text" name="kodeRuang" id="" Placeholder="Kode Ruang">
            <input type="text" name="keterangan" id="" Placeholder="Keterangan">
            <input class="search" type="submit" name="submit" value="Kirim">

    </form>
    <hr>
    <p style="margin:1rem" align="center"><a href="index.php">Kembali</a></p>
</body>
</html>