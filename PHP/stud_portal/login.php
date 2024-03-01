<html>  
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="" method="POST">
            <h1>LOGIN</h1>
            KTU ID: <input type="text" name="ktu_id">
            Password: <input type="password" name="password">
            <input type="submit" name="login" value="Login">
        </form>
        Don't have an account? <a href="register.php">Register</a><br>
    </body>
</html>

<?php
    if(isset($_POST['login'])){
        include 'conn.php';
        session_start();
        $ktu_id = $_POST['ktu_id'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE ktu_id = '$ktu_id' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['ktu_id'] = $row['ktu_id'];
            $_SESSION['name'] = $row['name'];
            header ('Location: details.php');
        }else{
            echo "Invalid Username and Password!!";
        }
    }
?>

