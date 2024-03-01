<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="" method="POST">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="email" name="username"><br>
            Phone: <input type="text" name="phone"><br>
            Password: <input type="password" name="pass"><br>
            Re-type Password: <input type="password" name="repass"><br>
            <input type="submit" name="register" value="Register"><br>
        </form>
        Already have an account? <a href="login.php">Login</a><br>
    </body>
</html>

<?php
    if(isset($_POST['register'])){
        include 'conn.php';
        $name = $_POST['name'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        if($pass != $repass){
            echo "Passwords donot match!";
        }else{
            $sql = "INSERT INTO register (name, email, phone, password) VALUES ('$name','$username','$phone','$pass')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "Registered Sucessfully!";
            }else{
                echo "Cannot Register!";
            }
        }
    }
?>