<html>
    <head>
        <title>Add Marks</title>
    </head>
    <body>
        <form action="" method="POST">
        <table border=1 align=center>
                <tr>
                    <th>KTU ID</th>
                    <td><input type="text" name="ktu_id"></td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td><input type="text" name="subject"></td>
                </tr>
                <tr>
                    <th>Series 1</th>
                    <td><input type="text" name="series_1"></td>
                </tr>
                <tr>
                    <th>Series 2</th>
                    <td><input type="text" name="series_2"></td>
                </tr>
                <tr>
                    <th>Assignment 1</th>
                    <td><input type="text" name="assignment_1"></td>
                </tr>
                <tr>
                    <th>Assignment 2</th>
                    <td><input type="text" name="assignment_2"></td>
                </tr>
                <tr>
                    <th>Attendance</th>
                    <td><input type="text" name="attendance"></td>
                </tr>
                <tr align=center>
                    <td colspan="2"><input type="submit" name="add" value="Add">
                </tr>
            </table>
        </form>
    </body>
</html>



<?php
    if(isset($_POST['add'])){
        include 'conn.php';
        $ktu_id = $_POST['ktu_id'];
        $subject = $_POST['subject'];
        $series_1 = $_POST['series_1'];
        $series_2 = $_POST['series_2'];
        $assignment_1 = $_POST['assignment_1'];
        $assignment_2 = $_POST['assignment_2'];
        $attendance = $_POST['attendance'];

        $sql = "SELECT * FROM users WHERE ktu_id = '$ktu_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['ktu_id'] = $row['ktu_id'];

            $sql = "INSERT INTO marks VALUES ('$ktu_id','$subject','$series_1','$series_2','$assignment_1','$assignment_2','$attendance')";

            $result = mysqli_query($conn,$sql);
            if($result){
                echo "Marks added Sucessfully!";
            }else{
                echo "Cannot add Marks!";
            }
        }else{
            echo "Invalid KTU ID!";
        }
    }
    echo "<center><a href='login.php'>Login</a> or <a href='register.php'>Register</a></center>";
?>