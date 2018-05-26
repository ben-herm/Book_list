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
            <li><a href="index.php">Book List</a></li>
            <li><a href="add_books.php">Add Book</a></li>
            <li><a class="active" href="update_books.php">Update Book</a></li>
            <li><a href="delete_books.php">Delete Book</a></li>
        </ul>


        <h2> Update Book </h2>

        <h4>Enter Book ID and change details</h4>

        <form action="update_books.php" method="post">

            <p>
                <label>Book ID:</label>
                <input type="text" name="Book_ID" >
            </p>
            <p>
                <label>Book Name:</label>
                <input type="text" name="Book_Name" >
            </p>
            <p>
                <label>Book Author:</label>
                <input type="text" name="Book_Author">
            </p>
            <p>
                <label>Price:</label>
                <input type="text" name="price" >
            </p>
            <input type="submit" value="Submit">
        </form>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            include 'open.php';

            $ID = $_POST["Book_ID"];
            $bookName = $_POST["Book_Name"];
            $author = $_POST["Book_Author"];
            $price = $_POST["price"];



            $sql = "UPDATE  books set book_name='$bookName', author='$author', price='$price'  Where book_id='$ID'";


            if ($conn->query($sql) === TRUE) {
                echo "<br> New record created successfully <br>";
                $conn->close();
                 header('Location:  http://localhost/Book_list/index.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
    </body>
</html>
