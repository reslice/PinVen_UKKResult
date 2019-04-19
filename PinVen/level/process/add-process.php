<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/level.php";

    if(isset($_POST['submit'])){
        $namaLevel = $_POST['namaLevel'];
        if(!empty($namaLevel)){
            $query = $level->insert([
                'nama_level' => $namaLevel
            ]);
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