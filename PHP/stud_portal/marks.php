<?php
    include 'conn.php';
    session_start();
    echo "Welcome, {$_SESSION['name']}";
    $ktu_id = $_SESSION['ktu_id'];
    if($ktu_id != 'admin101') {
        $sql = "SELECT * FROM marks WHERE ktu_id = '$ktu_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h1 align='center'>Marks</h1>
            <table border=1 align=center>
                <tr>
                    <th>KTU ID</th>
                    <td>{$row['ktu_id']}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{$row['subject']}</td>
                </tr>
                <tr>
                    <th>Series 1</th>
                    <td>{$row['series_1']}</td>
                </tr>
                <tr>
                    <th>Series 2</th>
                    <td>{$row['series_2']}</td>
                </tr>
                <tr>
                    <th>Assignment 1</th>
                    <td>{$row['assignment_1']}</td>
                </tr>
                <tr>
                    <th>Assignment 2</th>
                    <td>{$row['assignment_2']}</td>
                </tr>
                <tr>
                    <th>Attendance</th>
                    <td>{$row['attendance']}</td>
                </tr>
            </table>";
        }
    }else{
            $sql = "SELECT * FROM marks WHERE ktu_id != '$ktu_id'";
            $result = mysqli_query($conn, $sql);
            echo "<h1 align='center'>Student Marks</h1>
            <table border='1' align='center'>
                <tr>
                    <th>KTU ID</th>
                    <th>Subject</th>
                    <th>Series 1</th>
                    <th>Series 2</th>
                    <th>Assignment 1</th>
                    <th>Assignment 2</th>
                    <th>Attendance</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo"
                    <tr>
                        <td>{$row['ktu_id']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['series_1']}</td>
                        <td>{$row['series_2']}</td>
                        <td>{$row['assignment_1']}</td>
                        <td>{$row['assignment_2']}</td>
                        <td>{$row['attendance']}</td>
                    </tr>";
                }
            echo "</table>";
            echo "<center><a href='add_marks.php'><button>Add Marks</button></a></center>";
    }
?>