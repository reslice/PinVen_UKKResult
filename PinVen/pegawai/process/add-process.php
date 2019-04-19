<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/pegawai.php";

    if(isset($_POST['submit'])){
        $nip = $_POST['nip'];
        $password = $_POST['password'];
        $namaPegawai = $_POST['nama_pegawai'];
        $alamat= $_POST['alamat'];
        if(!empty($namaPegawai) && is_numeric($nip) && !empty($password)&& !empty($alamat)){
            $query = $pegawai->insert([
                'nama_pegawai' => $namaPegawai,
                'password' => $password,
                'nip' => $nip,
                'alamat' => $alamat
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