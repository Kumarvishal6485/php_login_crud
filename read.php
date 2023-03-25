<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .container{
            width: 100vw;
            height: 100vh;
            position: relative;
        }
        .main{
            width: 400px;
            height: 1000px;
            position: absolute;
            left: 33%;
            top: 5%;
        }
    </style>
</head>

<body>
    <table class="table table-dark">
        <tr>
            <th>S.no</th>
            <th>Username</th>
            <th>Email</th>
            <th>Name</th>
            <th>Date of joining</th>
            <th>Action</th>
        </tr>
    
    <?php
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn,$sql);
        while($fetch = mysqli_fetch_assoc($result)){
    ?>
            <tr>
                <td><?php echo $fetch['id'];?></td>
                <td><?php echo $fetch['username'];?></td>
                <td><?php echo $fetch['email'];?></td>
                <td><?php echo $fetch['name'];?></td>
                <td><?php echo $fetch['doj'];?></td>
                <td><a href="edit.php?id=<?php echo $fetch['id'];?>" class="btn btn-primary">Update</a> <a href="delete.php?id=<?php echo $fetch['id'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
    <?php    }
    ?>
    </table>
</body>

</html>