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

<body>
    <h1 class="text-light">Welcome to<?php echo $_settings->info('name')?></h1>
    <hr class="border-light">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-light elevation-1"><i class="fa fa-th-list"></i></span>
                <div class=" info-box-content">
                    <span class="info-box-text">Total Parts</span>
                    <span class="info-box-number">
                        <?php
                        $inv=$conn->query("SELECT count(id) as total FROM `parts`")->fetch_assoc()['total'];
                        echo number_format($inv);
                        ?>
                        <?php ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Mechanics</span>
                    <span class="info-box-number">
                        <?php
                        $mechanics = $conn->query("SELECT sum(mechanic_id)as total FROM `mechanic` where status='1'")->fetch_assoc()['total'];
                        echo number_format($mechanics);
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-th-list"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Services</span>
                    <span class="info-box-number">
                        <?php
                        $services = $conn->query("SELECT sum(service_id)as total FROM `service_list` where status='1'")->fetch_assoc()['total'];
                        echo number_format($services);
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-file-invoice"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Finished Requests</span>
                    <span class="info-box-number">
                        <?php
                        $services = $conn->query("SELECT sum(request_id)as total FROM `service_request` where status='3'")->fetch_assoc()['total'];
                        echo number_format($services);
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>