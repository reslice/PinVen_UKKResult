<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/ruang.php";

    if(isset($_POST['submit'])){
        $namaRuang = $_POST['namaRuang'];
        $kodeRuang = random($_POST['kodeRuang'],'3');
        $keterangan = $_POST['keterangan'];
        if(!empty($namaRuang) && !empty($kodeRuang) && !empty($keterangan)){
            $query = $ruang->insert([
                'nama_ruang' => $namaRuang,
                'kode_ruang' => $kodeRuang,
                'keterangan' => $keterangan
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