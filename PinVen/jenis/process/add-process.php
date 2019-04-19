<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/jenis.php";

    if(isset($_POST['submit'])){
        $namaJenis = $_POST['namaJenis'];
        $kodeJenis = random($_POST['kodeJenis'],'3');
        $keterangan = $_POST['keterangan'];
        if(!empty($namaJenis) && !empty($kodeJenis) && !empty($keterangan)){
            $query = $jenis->insert([
                'nama_jenis' => $namaJenis,
                'kode_jenis' => $kodeJenis,
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