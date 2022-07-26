<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/i.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="include/b.css">
    <?php include('include/script.php');?>
</head>

<body >
    <?php
include_once('include/blh.php');
?>
    <section class="sect">
        <div class="cont">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-4 col-xl-4 text-center mt-5">
                <div class="logo">
                    <img src="tjl.png" alt="logo">
                </div>
                <form class="rounded bg-white shadow p-5" id="form1">
                    <h3 class="text-dark fw-bolder fs-4 mb-2">Reset Password</h3>
                    <div class="fw-normal text-muted mb-4">
                        Enter Your Email to reset password
                    </div>
                    <div class="form-floating mb-3">
                        <label for="finput">Email address</label>
                        <input type="email" class="form-control" id="finput" placeholder="name@example.com">

                    </div>
                    <button type="submit" class="btn btn-primary submit_btn my-4">Submit</button>
                    <button type="submit" class="btn secondary submit_btn my-4 ms-3">cancel</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>