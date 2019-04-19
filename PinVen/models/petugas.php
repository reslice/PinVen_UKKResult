<?php

    require_once $BASE_URL . "libraries/Model.php";

    class Petugas extends Model {
        protected $table ="petugas";
        
        public function withLevel(){
            $sql = "SELECT petugas.* , level.nama_level FROM petugas
            INNER JOIN level ON petugas.id_level = level.id_level";
            $query = $this->conn->query($sql);
            if($query->rowCount() > 0){
                $rows = $query->fetchAll();
            }
            else {
                $rows = [];
            }
            return $rows;
        }
    }
    $petugas = new Petugas();

?>