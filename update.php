<?php
    $id =$_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    include 'connect.php';

    $sql = "UPDATE crud SET name='$name', phone='$phone', email='$email' WHERE id= $id";

    mysqli_query($conn,$sql);

    mysqli_close($conn);