<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="" method="POST">
            KTU ID: <input type="text" name="ktu_id"><br>
            Name: <input type="text" name="name"><br>
            Age: <input type="text" name="age"><br>
            Gender: <input type="text" name="gender"><br>
            Phone: <input type="text" name="phone"><br>
            Semester: <input type="text" name="sem"><br>
            Roll No: <input type="text" name="roll_no"><br>
            E-mail: <input type="email" name="email"><br>
            Password: <input type="password" name="pass"><br>
            Confirm Password: <input type="password" name="repass"><br>
            <input type="submit" name="register" value="Register"><br>
        </form>
        Already have an account? <a href="login.php">Login</a><br>
    </body>
</html>

<?php
    if(isset($_POST['register'])){
        include 'conn.php';
        session_start();
        $ktu_id = $_POST['ktu_id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $sem = $_POST['sem'];
        $roll_no = $_POST['roll_no'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        if($pass != $repass){
            echo "Passwords donot match!";
        }else{
            $sql = "INSERT INTO users VALUES ('$ktu_id','$name','$age','$gender','$phone','$sem','$roll_no','$email','$pass')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "Registered Sucessfully!";
            }else{
                echo "Cannot Register!";
            }
        }
    }
?>