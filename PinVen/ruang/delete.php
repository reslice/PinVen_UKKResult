<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "models/ruang.php";

    
        $id = $_GET['id'];
        if(!empty($id)){
            $query = $ruang->delete('id_ruang',$id);
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