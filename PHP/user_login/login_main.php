<?php
    include 'conn.php';
    session_start();
    $email = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        header ('Location: welcome.php');
    }else{
        echo "Invalid Username and Password!!";
    }
?>