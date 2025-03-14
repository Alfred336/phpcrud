<?php
    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $email =$_POST['email'];

    include 'connect.php';

    $sql = "INSERT INTO crud(name, phone, email) VALUE('$name','$phone','$email')";

    if(mysqli_query($conn,$sql)){
        echo "new recode recoded";
    }
    else{
        echo "failed to save recode";
    }