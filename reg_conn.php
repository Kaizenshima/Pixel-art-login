<?php 

    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost', 'root', '',);
    mysqli_select_db($con, 'db_users');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "select * from tbl_users where email = '$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($email==isset($row['email'])){
            echo "Email Already Taken";
        }
        
    }else{
        $reg = "insert into tbl_users(firstname,middlename,lastname,birthday,address,email,password) values ('$firstname','$middlename', '$lastname','$birthday','$address','$email', '$password', )";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }

     
?>