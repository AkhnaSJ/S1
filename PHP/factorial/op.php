<?php
    $num = $_POST['number'];
    function factorial($num){
        if($num == 0){
            return 1;
        }
        return $num * factorial($num-1);        
    }
    echo "Factorial of $num: ",factorial($num);
?>