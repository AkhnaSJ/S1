

<?php
    include 'conn.php';
    
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $no_of_copies = $_POST['copies'];

    $sql = "INSERT INTO books VALUES('$book_id','$book_name','$author','$no_of_copies')";
    $result = mysqli_query($conn,$sql);

    if($result){
    echo "Added successfully!";
    }
    else{
        echo "Cannot Add!!";
    }
?>