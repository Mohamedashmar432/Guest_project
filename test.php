<?php
$host = "sql12.freesqldatabase.com";
$db_user = "sql12782867";
$db_pass = "F5cfCeCCeq";
$db_name = "users";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    printf("connection error bro");
    die("Connection failed: " . $conn->connect_error);
}
printf("success");
?>
