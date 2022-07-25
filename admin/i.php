<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include('../include/script.php');?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#546675;">
    <div class="container">
        <div class="row" style="margin-top:200px;">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card bg-dark">
                    <div class="card-header text-center">
                        <h3 style="color:#F0AD4E;">Login</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center" style="color:white;"> Sign in to start session</p>
                    </div>
                    <form method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control ml-3" name="username" placeholder="Username">
                            <div class="input-group-append mr-3">
                                <div class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control ml-3" name="password" placeholder="Password">
                            <div class="input-group-append mr-3">
                                <div class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-warning btn-block ml-4 mr-4">Sign In</button><br>
                            </div>
                            <a href="../main/dashboard.php">
                                <p class="text-center" style="color:#F0AD4E;">Go to Website</p>
                            </a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>