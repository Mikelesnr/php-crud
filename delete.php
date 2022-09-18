<?php
include('connect.php');
if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "deleted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}