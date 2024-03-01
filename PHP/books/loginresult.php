<?php
    include 'conn.php';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: book.php');
    }else{
        echo "Invalid Username and Password!";
    }

