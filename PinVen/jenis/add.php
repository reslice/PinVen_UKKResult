<?php 

    require_once "../autoload.php";
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

            <input type="text" name="namaJenis" id="" Placeholder="Nama Jenis">
            <input type="text" name="kodeJenis" id="" Placeholder="Kode Jenis">
            <input type="text" name="keterangan" id="" Placeholder="Keterangan">
            <input class="search" type="submit" name="submit" value="Kirim">

    </form>
    <hr>

</body>
</html>