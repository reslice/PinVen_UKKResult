<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "models/pegawai.php";

    
        $id = $_GET['id'];
        if(!empty($id)){
            $query = $pegawai->delete('id_pegawai',$id);
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