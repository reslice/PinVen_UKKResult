<?php

    require_once $BASE_URL . "libraries/Model.php";

    class Pegawai extends Model {
        protected $table ="pegawai";
    }
    $pegawai = new Pegawai();

?>