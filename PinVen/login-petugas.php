<?php
    require_once "autoload.php";
    require_once $BASE_URL . "models/petugas.php";

    if(isset($_POST['submit'])){
    
        $username = $_POST['user'];
        $password = $_POST['pass'];

        if(!empty($username) && !empty($password)){
            foreach($petugas->withLevel() as $data){
                if($data['username'] == $username && $data['password'] == $password){
                    $_SESSION['nama_user'] = $data['nama_petugas'];
                    $_SESSION['level_user'] = $data['nama_level'];
                    $_SESSION['id_user'] = $data['id_petugas'];
                    alert("Selamat Datang $_SESSION[nama_user]","index.php");
                }

            }
        }else{
            echo "form kosong";
        }
        
    
    }
    
    else {
        echo "gagal cok"; 
    }

?>