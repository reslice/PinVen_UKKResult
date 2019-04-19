<?php

    function confirm($massage,$loc1,$loc2){
        
    echo "<script>
    var confirm = confirm('$massage');
    if(confirm == true){
       location.href = '$loc1';
   }
   else {
       location.href = '$loc1';
   }
   </script>";
    }


?>