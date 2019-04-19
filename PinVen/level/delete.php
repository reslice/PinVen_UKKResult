<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "models/level.php";

    
        $id = $_GET['id'];
        if(!empty($id)){
            $query = $level->delete('id_level',$id);
            if($query){
                alert("Berhasil Menambahkan !","index.php");
            }
            else {
                echo "ass";
            }
        }
    
    else {
        echo "gagal";
    }

?>