<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "models/jenis.php";

    
        $id = $_GET['id'];
        if(!empty($id)){
            $query = $jenis->delete('id_jenis',$id);
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