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
    <link rel="stylesheet" href="../css/a.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include('../../include/script.php'); ?>
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
                    <a href="../home.php">
                        <i class="fa fa-dashboard"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="../mechanic.php">
                        <i class="fa fa-user"></i>
                        <div class="title">Mechanic</div>
                    </a>
                </li>
                <li>
                    <a href="../service_request.php">
                        <i class="fa fa-file-text-o"></i>
                        <div class="title">Service Request</div>
                    </a>
                </li>
                <li>
                    <a href="../report.php">
                        <i class="fa fa-file-o"></i>
                        <div class="title">Report</div>
                    </a>
                </li>
                <li>
                    <a href="../part.php">
                        <i class="fa fa-list"></i>
                        <div class="title">Parts list </div>
                    </a>
                </li>
                <li>
                    <a href="../service.php">
                        <i class="fa fa-list"></i>
                        <div class="title">Service list</div>
                    </a>
                </li>
                <li>
                    <a href="../user.php">
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
                <a href="../main/dashboard.php">
                    <h5 style="color:white;"> TjServices</h5>
                </a>
                <div class="user">
                    <img src="../image/ad.png" alt="">
                </div>
            </div>
            <div class="card shadow" style="margin-top:30px; margin-bottom:100px;">
                <div class="card-header py-3">
                    <h6 class="mt-5 font-weight-bold text-primary">Edit user Details</h6>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_POST['editbtn']))
                    {
                        $id = $_POST['edit_id'];
                        
                        $query = "SELECT * FROM user WHERE user_id='$id' ";
                        $query_run = mysqli_query($conn,$query);

                        foreach($query_run as $row)
                        {
                            ?>


                    <form action="../code1.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['user_id']?>">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="edit_name" value="<?php echo $row['name']?>" class="form-control"
                                placeholder="Enter user name">
                        </div>
                        <div class="form-group">
                            <label for="imga">Phoneno</label>
                            <input type="text" name="edit_phoneno" value="<?php echo $row['phoneno']?>"
                                class="form-control" id="imga" placeholder="Enter the phone number">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="edit_email" value="<?php echo $row['email']?>" class="form-control"
                                placeholder="Enter the email">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="edit_address" value="<?php echo $row['address']?>"
                                class="form-control" placeholder="Enter the address">
                        </div>

                        <div class="form-group">
                            <label class="mr-sm-2" for="Select1">Gender</label>
                            <select class="custom-select mr-sm-2" id="Select1" name="edit_gender" value=" <?php echo $row['gender'] ?>">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="edit_password" value="<?php echo $row['password']?>"
                                class="form-control" placeholder="Enter the password">
                        </div>


                        <div class="modal-footer">
                            <a href="../user.php">
                                <button type="button" class="btn btn-danger">Cancel</button></a>
                            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <?php
                        }
                    }
                
                
                    ?>


                </div>
            </div>
        </div>
    </div>
</body>

</html>