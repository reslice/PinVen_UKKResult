<?php

    function random($code,$leng){
        $string = "0123456789";
        $mix = str_shuffle($string);
        $res = substr($mix,0,$leng);

        return $code . " - " . $res;
    }

?>