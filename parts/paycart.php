<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../include/script.php');?>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="pa.css">
</head>

<body>

    <body class="minbody">
        <div class="header">
            <div class="menub">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="../tjl.png" style="height: 100px;width:100px; margin-left:20px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse ms- navbar-collapse justify-content-center">
                        <ul class="navbar-nav ml-auto" id="ulco">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Payment</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="card" style="margin-top:150px;">
                            <div class="card-header bg-danger">
                                <h2 class="text-center " style="color:white;">Payment</h2>
                            </div>
                            <div class="card-body">
                                <div>
                                    <label for="I1">ivoice id</label>
                                    <input type="text" class="form-control" id="I1" placeholder="10">
                                </div><br>
                                <div>
                                    <label for="I2">Total Amount</label>
                                    <input type="text" class="form-control" id="I2" placeholder="1000.00">
                                </div><br>
                                <div>
                                    <label for="I1">Card Accepted</label><br>
                                    <img src="../images/card_img.png" class="img1">
                                </div><br>
                                <div>
                                    <label for="I3">Name on card</label>
                                    <input type="text" class="form-control" id="I3" placeholder="Thanex">
                                </div><br>
                                <div>
                                    <label for="I4">Credit Card Number</label>
                                    <input type="text" class="form-control" id="I4" placeholder="1111-2222-3333-4444">
                                </div><br>
                                <div>
                                    <label for="I5">Exp Month</label>
                                    <input type="text" class="form-control" id="I5" placeholder="january">
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="I6">Exp year</label>
                                        <input type="text" class="form-control" id="I6" placeholder="2022">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="I7">CVV</label>
                                        <input type="text" class="form-control" id="I7" placeholder="456">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Proced to pay" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>