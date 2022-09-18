<?php
$servername = "localhost";
$username = "mikelesnr";
$password = "Michael2331#";
$dbname = "crudoperation";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die(mysqli_error($conn));
}