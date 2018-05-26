<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" type="text/css" href="pCSS.css">
    </head>
    <body>


        <ul>
            <li><a href="index.php ">Book List</a></li>
            <li><a href="add_books.php">Add Book</a></li>
            <li><a href="update_books.php">Update Book</a></li>
            <li><a class="active" href="UpdateBook">Delete Book</a></li>
        </ul>

        <h3>Book Delete</h3>

        <form action="delete_books.php" method="post">
            <p>
                <label>Enter book Id to be Deleted:</label>
                <input type="text" name="BookID" >
            </p>
            <input type="submit" value="Submit">

        </form>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'open.php';


            $bookID = $_POST["BookID"];



// sql to delete a record
            $sql = "DELETE FROM books WHERE book_id='$bookID'";

            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                $conn->close();
                header('Location:  http://localhost/Book_list/index.php');
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
        ?>
    </body>
</html>
