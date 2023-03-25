<?php
    include 'db.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    if($username != '' && $name != '' && $password != '' && $password == $cpassword){
        $sql = "INSERT INTO login(name,email,password,username) VALUES('$name','$email','$password','$username')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location:read.php");
        }
        else{
            echo "sorry try again later";
            header("Location:login.php");
        }
    }
?>