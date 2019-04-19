<?php

    function alert($massage,$location){
        echo "<script>
            alert('$massage');
            location.href = '$location';
        </script>";
    }

?>