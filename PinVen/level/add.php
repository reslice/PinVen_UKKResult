<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/level.php";

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

            <input type="text" name="namaLevel" id="" Placeholder="Nama Level">
            <input class="search" type="submit" name="submit" value="Kirim">

    </form>
    <hr>

</body>
</html>