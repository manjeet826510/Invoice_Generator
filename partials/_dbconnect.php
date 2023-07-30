<?php
// Replace 'your_db_host', 'your_db_username', 'your_db_password', and 'your_db_name' with your actual database credentials
$conn = mysqli_connect('localhost', 'root', '', 'dbms_project');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>