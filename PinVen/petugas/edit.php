<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/level.php";

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }
    else {
        header('location: index.php');
    }
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
    <form align="center" action="process/edit-process.php" method="POST">

            <input type="hidden" value="<?= $id ?>" name="id">
            <input type="text" name="username" id="" Placeholder="Username">
            <input type="password" name="password" id="" Placeholder="Password">
            <input type="text" name="nama_petugas" id="" Placeholder="Nama Petugas">
            
                <select name="idLevel">
                    <?php foreach($level->all() as $data){?>
                        <option value="<?=$data['id_level']?>"><?=$data['nama_level']?></option>
                    <?php }?>
                </select>
            
            <input class="search" type="submit" name="submit" value="Update"></tr>
 
    </form>
    <hr>

</body>
</html>