<?php
// Replace 'your_db_host', 'your_db_username', 'your_db_password', and 'your_db_name' with your actual database credentials
$servername = "localhost";
$username = "root";
$password = ""; //your sql pass
$database = "DBMS_Project"; //your db name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>