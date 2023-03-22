<?php 

    session_start();

    $con = mysqli_connect('localhost', 'root', '',);
    mysqli_select_db($con, 'db_users');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "select * from tbl_users where email = '$email' && password ='$password'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if(mysqli_num_rows($result) > 0){
        header('location:home.php');
    }else{
        header('location:login.php');
    }

     
?>