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
            <li><a class="active" href="index.php">Book List</a></li>
            <li><a href="add_books.php">Add Book</a></li>
            <li><a href="update_books.php">Update Book</a></li>
            <li><a href="delete_books.php">Delete Book</a></li>
        </ul>
        <?php
        
        echo "<h2>Book List </h2>";

        include 'open.php';

        ///// Select Data from DB and show in screen/////
        
        $sql = "SELECT * FROM books";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<br>" . "| ID: " . $row["book_id"] . " " . " | Book Name: " . $row["book_name"] . " " . " | Book Author: " . $row["author"] . " " . " | Book Price: " . $row["price"] . " | <br>";
                echo "<br>";
            }
        } else {
            echo "0 results";
        }
//close conection//

        mysqli_close($conn);
        ?>
    </body>
</html>
