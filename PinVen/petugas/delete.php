<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "models/petugas.php";
    if($_SESSION['level_user'] == "Administrator"){

    }
    else {
        header('location: ../index.php');
    }

    
        $id = $_GET['id'];
        if(!empty($id)){
            $query = $petugas->delete('id_petugas',$id);
            if($query){
                alert("Berhasil Menghapus !","index.php");
            }
            else {
                echo "ass";
            }
        }
    
    else {
        echo "gagal";
    }

?>