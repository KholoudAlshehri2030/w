<?php

if(isset($_POST['submit']))
{
    include 'database_connection.php';  
    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $log_query="insert into user(user_name,user_email,user_phone,user_password) values('$name','$email','$phone','$password');";
     mysqli_query($connection,$log_query);
     header("Location: signup.php?Success");
}
else
{
   header("Location: signup.php");
}
?>