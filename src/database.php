<?php
$host = "your-db-host";
$db_user = "your-db-username";
$db_pass = "your-db-password";
$db_name = "your-db-name";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
