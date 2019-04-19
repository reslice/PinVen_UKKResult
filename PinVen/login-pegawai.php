<?php
    require_once "autoload.php";
    require_once $BASE_URL . "models/pegawai.php";

    if(isset($_POST['submit'])){
    
        $username = $_POST['user'];
        $password = $_POST['pass'];

        if(!empty($username) && !empty($password)){
            foreach($pegawai->all() as $data){
                if($data['nip'] == $username && $data['password'] == $password){
                    $_SESSION['nama_user'] = $data['nama_pegawai'];
                    $_SESSION['id_user'] = $data['id_pegawai'];
                    alert("Selamat Datang $_SESSION[nama_user]","dashboard.php");
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