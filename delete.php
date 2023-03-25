<?php
    include 'db.php';
    $id=$_GET['id'];
    $sql = "delete from login where id ='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:read.php");
    }
    else{
        echo "failed";
    }
?>