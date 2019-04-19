<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/petugas.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namaPetugas = $_POST['nama_petugas'];
        $idLevel= $_POST['idLevel'];
        if(!empty($namaPetugas) && !empty($username) && !empty($password)&& is_numeric($idLevel)){
            $query = $petugas->update([
                'username' => $username,
                'password' => $password,
                'nama_petugas' => $namaPetugas,
                'id_level' => $idLevel
            ],'id_petugas',$id);
            if($query){
                alert("Berhasil Mengupdate !","../index.php");
            }
            else {

            }
        }
    }
    else {
        echo "gagal";
    }

?>