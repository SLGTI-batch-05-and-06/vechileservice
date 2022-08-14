<?php
session_start();
$conn =  mysqli_connect("localhost","root","","vehicle_service");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['mail'] ) && !empty($_POST['address']) &&  !empty($_POST['gender'] ) &&  !empty($_POST['password']) )
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $mail = $_POST['mail'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $cpassword = $_POST['repass'];

            if($password === $cpassword){
    
            $query = "INSERT INTO user (name,phoneno,email,address,gender,password) VALUES('$name','$phone','$mail','$address','$gender','$password')";
            $query_run = mysqli_query($conn,$query);
    
            if($query_run)
            {
                // echo "added"
                $_SESSION['Success'] = "User account created";
                header('Location:createaccount.php');
                
            }
            else
            {
                // echo "not added"
                $_SESSION['Status'] = "User account not created";
                header('Location:createaccount.php');
                
            }
        }
    else
    {
       echo "Password and confirm password does not match";
    
    }
        }
        else
        {
            echo "All fields are required";
        }
    }

    
    ?>
</body>

</html>