<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/petugas.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $namaPetugas = $_POST['nama_petugas'];
        $idLevel= $_POST['id_level'];
        if(!empty($namaPetugas) && !empty($username) && !empty($password)&& is_numeric($idLevel)){
            $query = $petugas->insert([
                'username' => $username,
                'password' => $password,
                'nama_petugas' => $namaPetugas,
                'id_level' => $idLevel
            ]);
            if($query){
                alert("Berhasil Menambahkan !","../index.php");
            }
            else {
                echo "Gagal";
            }
        }
    }
    else {
        echo "gagal";
    }

?>