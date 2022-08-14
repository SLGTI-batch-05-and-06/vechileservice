<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include('include/script.php');?>
    <link rel="stylesheet" href="css/pay.css">
</head>

<body class="main">
<div class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="images/tjl.png" style="height: 100px;width:100px; margin-left:20px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse ms- navbar-collapse justify-content-center">
                    <ul class="navbar-nav ml-auto" id="ulc">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Online Payment</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>

                    <div class="inputbox">
                        <span>Invoice ID</span>
                        <input type="text" placeholder="tj00001">
                    </div>
                    <div class="inputbox">
                        <span>Vehicle Number</span>
                        <input type="text" placeholder="ABC-4565">
                    </div>
                    <div class="inputbox">
                        <span>Email</span>
                        <input type="Email" placeholder="Example@example.com">
                    </div>
                    <div class="inputbox">
                        <span>Name/company</span>
                        <input type="text" placeholder="Thanex/TJ Services">
                    </div>
                    <div class="flex">
                        <div class="inputbox">
                            <span>Mobile Number</span>
                            <input type="float" placeholder="0761234567">
                        </div>
                        <div class="inputbox">
                            <span>Amount</span>
                            <input type="double" placeholder="1000.00">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputbox">
                        <span>Cards accepted</span>
                        <img src="card_img.png" alt="">
                    </div>

                    <div class="inputbox">
                        <span>Name on card</span>
                        <input type="text" placeholder="Thanexan">
                    </div>
                    <div class="inputbox">
                        <span>Credit card number </span>
                        <input type="float" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputbox">
                        <span>Exp month</span>
                        <input type="text" placeholder="january">
                    </div>
                    <div class="flex">
                        <div class="inputbox">
                            <span>Exp year</span>
                            <input type="text" placeholder="2022">
                        </div>
                        <div class="inputbox">
                            <span>CVV</span>
                            <input float="text" placeholder="1234">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Processed to pay" class="submit-btn">
        </form>
    </div>

</body>

</html>