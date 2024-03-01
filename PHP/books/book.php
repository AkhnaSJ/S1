<html>
    <?php
        session_start();
        echo "<h3>Hi, $_SESSION[username]</h3>";
   
    ?>
    <head>
        <title>Book Details</title>
    </head>
    <body>
        <h1>Book Details</h1>
        <form action="bookresult.php" method="POST">
        Book ID: <input type="text" name="book_id">
        Book Name: <input type="text" name="book_name">
        Author: <input type="text" name="author">
        No: of copies: <select name = "copies">
            <option value="select" selected disabled>SELECT</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select><br>
        <input type="submit" name="submit" value="Add">
        </form>
    </body>
</html>
