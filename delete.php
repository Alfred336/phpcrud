<?php
    $id = $_GET['id'];

    include 'connect.php';
    $sql = "DELETE FROM crud WHERE id =$id";
    mysqli_query($conn, $sql);
?>

<a href="view.php">View Information</a>