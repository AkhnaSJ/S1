<?php
    include 'conn.php';
    session_start(); 
    echo "Welcome, {$_SESSION['name']}";
    $ktu_id = $_SESSION['ktu_id'];
    if($ktu_id != 'admin101') {
        $sql = "SELECT * FROM users WHERE ktu_id = '$ktu_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h1 align='center'>Student Details</h1>
            <table border=1 align=center>
                <tr>
                    <th>KTU ID</th>
                    <td>{$row['ktu_id']}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{$row['name']}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{$row['age']}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{$row['gender']}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{$row['phone']}</td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>{$row['sem']}</td>
                </tr>
                <tr>
                    <th>Roll No.</th>
                    <td>{$row['roll_no']}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{$row['email']}</td>
                </tr>
            </table>";
        }
    }else{
            $sql = "SELECT * FROM users WHERE ktu_id != '$ktu_id'";
            $result = mysqli_query($conn, $sql);
            echo "<h1 align='center'>Student Details</h1>
            <table border='1' align='center'>
                <tr>
                    <th>KTU ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Semester</th>
                    <th>Roll No.</th>
                    <th>E-mail</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo"
                    <tr>
                        <td>{$row['ktu_id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['sem']}</td>
                        <td>{$row['roll_no']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
                }
            echo "</table>";
        }
    echo "<center><a href='marks.php'>View Marks</a></center>";
?>