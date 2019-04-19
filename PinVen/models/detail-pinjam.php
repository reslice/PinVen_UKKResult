<?php

    require_once $BASE_URL . "libraries/Model.php";

    class DetailPinjam extends Model {
        protected $table ="detail_pinjam";
        public function withAll(){
            $sql = "  SELECT detail_pinjam.* ,inventaris.nama,peminjaman.*,pegawai.nama_pegawai
            FROM detail_pinjam
            INNER JOIN inventaris ON detail_pinjam.id_inventaris = inventaris.id_inventaris
            INNER JOIN peminjaman ON detail_pinjam.id_peminjaman = peminjaman.id_peminjaman
            INNER JOIN pegawai ON peminjaman.id_pegawai = pegawai.id_pegawai ";
            $query = $this->conn->query($sql);
            // Fetch Dara
            $rows = $query->fetchAll();
            return $rows;
        }
        public function between($awal,$akhir){
            $sql = "SELECT detail_pinjam.* , peminjaman.*, pegawai.nama_pegawai, inventaris.nama from detail_pinjam
            INNER JOIN peminjaman on detail_pinjam.id_peminjaman = peminjaman.id_peminjaman
            INNER JOIN pegawai on peminjaman.id_pegawai = peminjaman.id_pegawai
            INNER JOIN inventaris on detail_pinjam.id_inventaris = inventaris.id_inventaris
            WHERE peminjaman.tanggal_pinjam BETWEEN '$awal' and '$akhir'";
            $query = $this->conn->query($sql);
            // Fetch Dara
            $rows = $query->fetchAll();
            return $rows;
        }
        
    }
    $detailPinjam = new DetailPinjam();

?>