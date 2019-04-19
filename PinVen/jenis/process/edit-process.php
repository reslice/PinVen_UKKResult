<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/jenis.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaJenis = $_POST['namaJenis'];
        $kodeJenis = random($_POST['kodeJenis'],'3');
        $keterangan = $_POST['keterangan'];
        if(!empty($namaJenis)){
            $query = $jenis->update([
                'nama_jenis' => $namaJenis,
                'kode_jenis' => $kodeJenis,
                'keterangan' => $keterangan
            ],'id_jenis',$id);
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