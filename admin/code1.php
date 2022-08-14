<!-- user -->
<?php 
session_start();
$conn = mysqli_connect("localhost","root","","vehicle_service")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../include/script.php'); ?>
</head>

<body>
    <?php 
    if(isset($_POST['add1']))
    {
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $query = "INSERT INTO user (name,phoneno,email,address,gender,password) VALUES('$name','$phoneno','$email','$address','$gender','$password')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            // echo "added"
            $_SESSION['success'] = "user details added";
            header('Location:user.php');
        }
        else
        {
            // echo "not added"
            $_SESSION['Status'] = "user details Not added";
            header('Location:user.php');
        }

    }
    ?>
    <?php
if(isset($_POST['updatebtn']))
{   $id=$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $phoneno = $_POST['edit_phoneno'];
    $email = $_POST['edit_email'];
    $address = $_POST['edit_address'];
    $gender = $_POST['edit_gender'];
    $password = $_POST['edit_password'];

    $query = "UPDATE user SET name='$name',phoneno='$phoneno',email='$email',address='$address',gender='$gender',password='$password' WHERE user_id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Updated";
            header('Location:user.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Updated";
        header('Location:user.php');
    }
}
?>
<?php

if(isset($_POST['del_btn']))
{
    $id=$_POST['del_id']; 

    $query = "DELETE FROM user WHERE user_id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Deleted";
            header('Location:user.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Deleted";
        header('Location:user.php');
    }
}



    ?>
</body>

</html>