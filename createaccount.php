<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ss.css">
    <?php include('include/script.php'); ?>
</head>

<body class="mb">
    <?php
include_once('include/blh.php');
?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        User registration
                    </div>
                    <div class="card-body">
                        <form action="" mathod="post">
                            <br><input type="text" class="form-control" id="na" name="name" required
                                placeholder="Enter your name"><br>
                            <input type="number" class="form-control" name="phoneno" required
                                placeholder="Enter your phoneno"><br>
                            <input type="text" class="form-control" name="address" required
                                placeholder="Enter your address"><br>
                            <input type="email" class="form-control" name="email" required
                                placeholder="Enter your email"><br>
                            <input type="password" class="form-control" name="pass" required
                                placeholder="Enter your password"><br>
                            <input type="password" class="form-control" name="repass" required
                                placeholder="Confirm password"><br>
                            <input type="submit" value="Create New Account" class="btn-success" name="create"
                                style="width: 100%;"><br><br>
                            <input type="submit" value="Sign in" class="btn-primary" name="create"
                                style="width: 100%;"><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>

</html>