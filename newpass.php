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

<body>
    <?php
include_once('include/blh.php');
?>
    <section class="sect">
        <div class="cont">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-4 col-xl-4 text-center mt-5">
                <div class="logo">
                    <img src="images/tjl.png" alt="logo">
                </div>
                <form class="rounded bg-white shadow p-5" id="form1">
                    <h3 class="text-dark fw-bolder fs-4 mb-2">Setup New Password</h3>
                    <div class="fw-normal text-muted mb-2">
                        Already have reset your password ? <a href="login.php"
                            class="text-primary fw-bold text-decoration-none">Sign in</a>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="Password" class="form-control" id="fpass" placeholder="Password">
                        <label for="fpass">New Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="Password" class="form-control" id="fpass" placeholder="Password">
                        <label for="fpass">Confirm Password</label>
                    </div>
                    <div class="form-checked d-flex align-items-center">
                        <input type="checkbox" class="form-check-input" id="gridcheck">
                        <label for="gridcheck" class="form-check-label ms-2">I Agree <a href="">Terms and
                                conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary submit_btn my-4">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>