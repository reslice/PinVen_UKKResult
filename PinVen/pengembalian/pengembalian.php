<?php   
    require_once "../autoload.php";
    require_once $BASE_URL . "models/peminjaman.php";
    require_once $BASE_URL . "models/detail-pinjam.php";
    require_once $BASE_URL . "models/inventaris.php";

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $idInventaris = $_GET['id'];
        $dataDetail = $detailPinjam->where('id_detail_pinjam',$id);
        $dataPeminjaman = $peminjaman->where('id_peminjaman',$dataDetail['id_peminjaman']);
        $dataInventaris = $inventaris->where('id_inventaris',$dataDetail['id_inventaris']);
        $jumlahTotal = $dataInventaris['jumlah'] + $dataDetail['jumlah'];
        
    }
    else {
        header('location: ../index.php');
    }
        $query = $peminjaman->update([
            'status_peminjaman' => "Sudah Kembali"
        ],'id_peminjaman',$dataPeminjaman['id_peminjaman']);
        if($query){
            $query = $inventaris->update([
              'jumlah' => $dataInventaris['jumlah'] + $dataDetail['jumlah']
            ],'id_inventaris',$dataDetail['id_inventaris']);
            if($query){
                alert("Data Sudah Dikembalikan",'index.php');
            }else {
                alert("data gagal di update");
            }
        }

            


?>