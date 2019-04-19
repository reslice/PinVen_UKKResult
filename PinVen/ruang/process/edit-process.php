<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/ruang.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $namaRuang = $_POST['namaRuang'];
        $kodeRuang = random($_POST['kodeRuang'],'3');
        $keterangan = $_POST['keterangan'];
        if(!empty($namaRuang)){
            $query = $ruang->update([
                'nama_ruang' => $namaRuang,
                'kode_ruang' => $kodeRuang,
                'keterangan' => $keterangan
            ],'id_ruang',$id);
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