<?php
$conn =  mysqli_connect("localhost","root","","vehicle_service");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/a.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include('../include/script.php'); ?>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

    <body>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="">
                            <i class="fa fa-wrench"></i>
                            <div class="title">TJS</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-dashboard"></i>
                            <div class="title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-user"></i>
                            <div class="title">Mechanic</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-file-text-o"></i>
                            <div class="title">Service Request</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-file-o"></i>
                            <div class="title">Report</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-list"></i>
                            <div class="title">Parts list </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-list"></i>
                            <div class="title">Service list</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <div class="title">User list</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-question"></i>
                            <div class="title">Help</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="top-bar">
                    <i></i>
                    <div class="user">
                        <img src="image/ad.png" alt="">
                    </div>
                </div>
                <div class="cards">
                    <div class="card bg-secondary">
                        <div class="card-content">
                            <div class="count"><?php
                        $inv=$conn->query("SELECT count(id) as total FROM `parts`")->fetch_assoc()['total'];
                        echo number_format($inv);
                        ?>
                            </div>
                            <div class="card-name">Total Parts</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-list"></i>
                        </div>
                    </div>
                    <div class="card bg-info">
                        <div class="card-content">
                            <div class="count"><?php
                        $mechanics = $conn->query("SELECT sum(mechanic_id)as total FROM `mechanic` where status='1'")->fetch_assoc()['total'];
                        echo number_format($mechanics);
                        ?>
                            </div>
                            <div class="card-name">Mechanic</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="card bg-success">
                        <div class="card-content">
                            <div class="count"><?php
                        $services = $conn->query("SELECT sum(service_id)as total FROM `service_list` where status='1'")->fetch_assoc()['total'];
                        echo number_format($services);
                        ?>
                            </div>
                            <div class="card-name">Services</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-list"></i>
                        </div>
                    </div>
                    <div class="card bg-warning">
                        <div class="card-content">
                            <div class="count"><?php
                        $mechanics = $conn->query("SELECT sum(mechanic_id)as total FROM `mechanic` where status='1'")->fetch_assoc()['total'];
                        echo number_format($mechanics);
                        ?>
                            </div>
                            <div class="card-name">Finished Request</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-file-text-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>