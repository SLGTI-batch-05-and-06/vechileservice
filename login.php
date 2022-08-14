<?php
session_start();
$conn =  mysqli_connect("localhost","root","","vehicle_service");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/script.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ss.css">
</head>

<body class="mainbody">


    <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-4 mx-3" id="maincom">
            <form method="POST">
                <?php
                if(isset($_POST['login'])){
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $query = "SELECT * FROM `user` WHERE `email` = '$email'";
                    $query_run = mysqli_query($conn,$query);
                    if(mysqli_num_rows($query_run)>0){
                        $row = mysqli_fetch_assoc($query_run);
                        if($password = $row['password']){
                            $_SESSION['email'] = $email;
                            header("Location:main/aftlhome.php");
                        }else{
                            echo '<div class="alert alert-warning" role="alert">Password Wrong!</div>';
                        }
                    }
                    else{
                        '<div class="alert alert-info" role="alert">User not found!</div>';
                    }
                   }
                   ?>
                <h1 class="mt-5" id="thalavar">Login</h1>
                <div class="mb-3 mt-5">
                    <input type="email" id="exampleInputEmail1" placeholder="Enter Username" name="email">
                </div>
                <div class="mb-3 mt-5">
                    <input type="password" id="exampleInputEmail1" placeholder="Enter Password" name="password">
                </div>
                <div class="btnmain">
                    <button type="submit" class="sumitbtn" name="login">Login</button>
                </div>
                <div class="mt-4 mb-5">
                    <a class="linker" href="createaccount.php">
                        <h3 id="dont">Don't have an account?</h3>
                    </a>
                    <a class="linker" href="createaccount.php">
                        <h3 id="sin">Sign up</h3>
                    </a>
                    <a class="linker" href="forgot.php">
                        <h3 id="sin">Forgot Password?</h3>
                    </a>
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>

</html>