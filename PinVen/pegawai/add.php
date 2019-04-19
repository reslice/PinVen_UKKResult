<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/Pegawai.php";
    require_once $BASE_URL . "models/Level.php";

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
        <table align="center">
            <tr><input type="number" name="nip" id="" Placeholder="Nip"></tr>
            <tr><input type="text" name="nama_pegawai" id="" Placeholder="Nama Pegawai"></tr>
            <tr><input type="password" name="password" id="" Placeholder="Password"></tr>
            <tr><input type="text" name="alamat" id="" Placeholder="Alamat"></tr>
            <tr><input class="search" type="submit" name="submit" value="Kirim"></tr>
        </table>
    </form>
    <hr>

</body>
</html>