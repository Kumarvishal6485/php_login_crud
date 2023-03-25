<?php
    include 'db.php';
    $id=$_GET['id'];
    $sql="select * from login where id='$id'";
    $result = mysqli_query($conn,$sql);
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
</head>

<body>
<?php while($fetch = mysqli_fetch_assoc($result))
        {
            ?>
    <form action = "update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $fetch['id'];?>">
        <input type="text" name="username" value= "<?php echo $fetch['username'];?>">
        <input type="email" name="email" value="<?php echo $fetch['email'];?>">
        <input type="text" name="name" value="<?php echo $fetch['name'];?>">
        <button type="submit" class="btn btn-primary" value = "update">Submit</button>
    </form>
    <?php }?>
    
</body>
</html>