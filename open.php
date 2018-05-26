
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo 'DB  conn fail' . '<br>';
    die("Connection failed: " . $conn->connect_error);
}
?>
