<?php
session_start();
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
                    <a href="home.php">
                        <i class="fa fa-dashboard"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="mechanic.php">
                        <i class="fa fa-user"></i>
                        <div class="title">Mechanic</div>
                    </a>
                </li>
                <li>
                    <a href="service_request.php">
                        <i class="fa fa-file-text-o"></i>
                        <div class="title">Service Request</div>
                    </a>
                </li>
                <li>
                    <a href="report.php">
                        <i class="fa fa-file-o"></i>
                        <div class="title">Report</div>
                    </a>
                </li>
                <li>
                    <a href="part.php">
                        <i class="fa fa-list"></i>
                        <div class="title">Parts list </div>
                    </a>
                </li>
                <li>
                    <a href="service.php">
                        <i class="fa fa-list"></i>
                        <div class="title">Service list</div>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="fa fa-users"></i>
                        <div class="title">User list</div>
                    </a>
                </li>
                <li>
                    <a href="help.php">
                        <i class="fa fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <i></i>
                <a href="../main/dashboard.php">
                    <h5 style="color:white;"> TjServices</h5>
                </a>
                <div class="user">
                    <img src="image/ad.png" alt="">
                </div>
            </div>
            
            <div class="card shadow" style="margin-top:100px;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">service_request Details
                    </h6>
                </div>
                <div class="card-body">
                   
                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM service_request";
                        $query_run = mysqli_query($conn,$query);
                        ?>
                        <table class="table table-bordered mt-5" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>contact_method</th>
                                    <th>plan</th>
                                    <th>vehicle_type</th>
                                    <th>year</th>
                                    <th>make</th>
                                    <th>model</th>
                                    <th>service</th>
                                    <th>status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                       ?>

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['contact_method']; ?></td>
                                    <td><?php echo $row['plan']; ?></td>
                                    <td><?php echo $row['vehicle_type']; ?></td>
                                    <td><?php echo $row['year']; ?></td>
                                    <td><?php echo $row['make']; ?></td>
                                    <td><?php echo $row['model']; ?></td>
                                    <td><?php echo $row['service']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <form action="manage/request_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="editbtn" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="del_id" value="<?php echo $row['id']; ?>" >
                                            <button type="submit" class="btn btn-danger" name="del_btn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                else{
                                    echo "No details found";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>