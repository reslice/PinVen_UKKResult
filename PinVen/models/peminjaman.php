<?php

    require_once $BASE_URL . "libraries/Model.php";

    class Peminjaman extends Model {
        protected $table ="peminjaman";

        public function getLastId(){
            return $this->conn->lastInsertId();
        }
    }
    $peminjaman = new Peminjaman();

?>