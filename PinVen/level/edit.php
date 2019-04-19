<?php 

    require_once "../autoload.php";
    require_once $BASE_URL . "models/level.php";

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
    <form align="center" action="process/edit-process.php" method="POST">
            <?php $data = $level->where('id_level',$id) ?>
            <input type="hidden" value="<?= $id ?>" name="id">
            <input type="text" name="namaLevel" id="" Placeholder="<?= $data['nama_level'] ?>">
            <input class="search" type="submit" name="submit" value="Update">
        </table>
    </form>
    <hr>

</body>
</html>