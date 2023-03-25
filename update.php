<?php
        include 'db.php';
        $id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql="update login set username='$username',email='$email',name = '$name' where id='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location:read.php");
        }
        
        
?>