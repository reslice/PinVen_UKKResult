<?php

    require_once "Database.php";

    class Model extends Database {

        // Deklarasi nama table tiap model 
        protected $table = "";

        // Membuat fungsi menampilkan semua data
        public function all(){
            $sql = " SELECT * FROM " . $this->table;
            $query = $this->conn->query($sql);
            // Fetch Data
            $rows = $query->fetchAll();
            return $rows;
        }
        
        // Membuat fungsi menampilkan beberapa data
        public function where($col,$val){
            $sql = " SELECT * FROM " . $this->table . " WHERE $col = '$val' ";
            $query = $this->conn->query($sql);
            if($query->rowCount() ==1 ){
                $rows = $query->fetch();
            }
            else {
                $rows = [];
            }

            return $rows;
        }     
        // Membuat fungsi Menghapus Data
        public function delete($col,$val){
            $sql = " DELETE FROM " . $this->table . " WHERE $col = '$val' ";
            $query = $this->conn->query($sql);
            print_r($sql);
            if($query){
                return true;
            }
            else {
                return false;
            }
        }
        // Membuat Menambah Data
        public function insert($data){
            $sql = " INSERT INTO " . $this->table . " ( ";
            $index = 1;

            foreach($data as $key=>$val){
                $sql .= "$key";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " ) VALUES (";
                    $index = 1;
                }
            }
            foreach($data as $val){
                $sql .= "'$val'";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " )";
                    $index = 1;
                }
            }
        $query = $this->conn->query($sql);
        if($query){
            return true;
        }
       else {
            return false;
            }
        }

        // Membuat Memperbarui Data
        public function update($data,$column,$value){
            $sql = " UPDATE " . $this->table . " SET ";
            $index = 1;

            foreach($data as $key=>$val){
                $sql .= "$key = '$val' ";
                if(count($data) > $index){
                    $sql .= " , ";
                    $index++;
                }
                else {
                    $sql .= " WHERE $column = '$value' ";
                    $index = 1;
                }
            }

        $query = $this->conn->query($sql);
        if($query){
            return true;
        }
       else {
            return false;
            }
        }
    
      // Membuat fungsi Mencari data
      public function search($col,$val){
        $sql = " SELECT * FROM " . $this->table . " WHERE $col LIKE '%$val%' ";
        $query = $this->conn->query($sql);
        if($query->rowCount() > 0){
            $rows = $query->fetchAll();
        }
        else {
            $rows = [];
        }
        
        return $rows;
    }     

    public function whereAll($col,$val){
        $sql = " SELECT * FROM " . $this->table . " WHERE $col = '$val' ";
        $query = $this->conn->query($sql);
        if($query->rowCount() > 0 ){
            $rows = $query->fetchAll();
        }
        else {
            $rows = [];
        }

        return $rows;
    }   
    // Membuat Fungsi untuk StoredProcedure
    public function storedProcedure($name){
        $sql = " CALL " . $name;
        $query = $this->conn->query($sql);
        $rows = $query->fetch();

        return $rows;
    }
    

    }

?>