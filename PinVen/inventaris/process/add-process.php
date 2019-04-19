<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "models/inventaris.php";
    if($_SESSION['level_user'] == "Administrator"){

    }
    else {
        header('location: ../index.php');
    }

    if(isset($_POST['submit'])){
       $namaBarang = $_POST['namaBarang'];
       $kondisi = $_POST['kondisi'];
       $keterangan = $_POST['keterangan'];
       $jumlah = $_POST['jumlah'];
       $idJenis = $_POST['idJenis'];
       $idRuang = $_POST['idRuang'];
       $idPetugas = $_SESSION['id_user'];
       $kodeInventaris = random($_POST['kodeInventaris'],"3");
       $tanggalRegister = date('y-m-d');
       echo $namaBarang;

        if(!empty($namaBarang) && !empty($kondisi) && !empty($keterangan)  && is_numeric($jumlah) && is_numeric($idJenis) && is_numeric($idRuang) && is_numeric($idPetugas)){
            $query = $inventaris->insert([
                'nama' => $namaBarang,
                'kondisi' => $kondisi,
                'keterangan' => $keterangan,
                'jumlah' => $jumlah,
                'id_jenis' => $idJenis,
                'tanggal_register' => $tanggalRegister,
                'id_ruang' => $idRuang,
                'kode_inventaris' => $kodeInventaris,
                'id_petugas' => $idPetugas
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