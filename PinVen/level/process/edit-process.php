<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/level.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaLevel = $_POST['namaLevel'];
        if(!empty($namaLevel)){
            $query = $level->update([
                'nama_level' => $namaLevel
            ],'id_level',$id);
            if($query){
                alert("Berhasil Menambahkan !","../index.php");
            }
            else {

            }
        }
    }
    else {
        echo "gagal";
    }

?>