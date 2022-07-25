<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="i.css">
    <link rel="stylesheet" href="include/b.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include('include/script.php'); ?>
    

</head>

<body class="mb">
    <?php
include_once('include/blh.php');
?>
    <br>
    <div class="contain">
        <h2>User Registration </h2>
        <div class="form-container">
            <form action="" method="post">
                <div class="in1">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="Enter the name" class="name" required>
                </div>
                <div class="in1">
                    <i class="fa fa-phone"></i>
                    <input type="tel" placeholder="Enter the phoneno" class="phone" required>
                </div>
                <div class="in1">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Enter the email" class="mail" required>
                </div>
                <div class="in1">
                    <i class="fa fa-address-card"></i>
                    <input type="text" placeholder="Enter the address" class="address" required>
                </div>
                <div class="in1">
                    <input type="radio" class="radio-button" name="b1">
                    <label style="margin-right: 30px;">Male</label>

                    <input type="radio" class="radio-button" name="b1">
                    <label>female</label>

                </div>
                <div class="in1">
                    <i class="fa fa-key"></i>
                    <input type="password" placeholder="Enter the password" class="pass" required>
                </div>
                <div class="in1">
                    <i class="fa fa-key"></i>
                    <input type="password" placeholder="Confirm password" class="repass" required>
                </div>
                <div class="in1">
                    <input type="checkbox" id="cb" class="check-but">
                    <label for="cb" class="check">I accept the terms and conditions</label>
                </div>
                <div class="in1">
                    <input type="submit" class="but" value="Create New Account">
                </div>
                

            </form>
        </div>
    </div>

</body>

</html>