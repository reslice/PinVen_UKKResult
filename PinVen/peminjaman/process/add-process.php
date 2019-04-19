<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/peminjaman.php";
    require_once $BASE_URL . "models/detail-pinjam.php";
    require_once $BASE_URL . "models/inventaris.php";


    if(isset($_POST['submit'])){
       $tanggalPinjam = $_POST['tanggalPinjam'];
       $tanggalKembali = $_POST['tanggalKembali'];
       $idPegawai = $_POST['idPegawai'];
       $idInventaris = $_POST['idInventaris'];
       $jumlah = $_POST['jumlah'];

       $checkInventaris = $inventaris->where('id_inventaris',$idInventaris);
       echo $checkInventaris['jumlah'];
       if($checkInventaris['jumlah'] < $jumlah){
           alert("Stok di gudang Kurang!","../index.php");
       }
       
       
        if(!empty($tanggalPinjam) && !empty($tanggalKembali) && is_numeric($idPegawai)  && is_numeric($jumlah)){
            $query = $peminjaman->insert([
                'tanggal_pinjam' => $tanggalPinjam,
                'tanggal_kembali' => $tanggalKembali,
                'id_pegawai' => $idPegawai,
                'status_peminjaman' => "Belum Kembali",
            ]);
            if($query){
                $query = $detailPinjam->insert([
                    'id_inventaris' => $idInventaris,
                    'id_peminjaman' => $peminjaman->getLastId(),
                    'jumlah' => $jumlah,
                ]);
                if($query){
                    alert("Berhasil Meminjam",'../index.php');
                }
            }
            else {
                die();
            }
        }
    }
    else {
        echo "gagal";
    }

?>