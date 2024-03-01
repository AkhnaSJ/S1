<?php
    $conn = mysqli_connect('localhost','root','','users');
    if($conn){
        echo "connected";
    }else{
        echo "not connected";
    }
?>