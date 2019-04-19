<?php

    require_once $BASE_URL . "libraries/Model.php";

    class Jenis extends Model {
        protected $table ="jenis";
    }
    $jenis = new Jenis();

?>