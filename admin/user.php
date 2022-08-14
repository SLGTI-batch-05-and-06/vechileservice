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
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exml" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exml">Add user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="code1.php" method="POST" id="adduser">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter user name">
                                </div>
                                <div class="form-group">
                                    <label>Phone No</label>
                                    <input type="text" name="phoneno" class="form-control" id="imga"
                                        placeholder="Enter the phone number">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter the email">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="Enter the address">
                                </div>
                                <div class="form-group">
                                    <label class="mr-sm-2" for="Select1">Gender</label>
                                    <select class="custom-select mr-sm-2" id="Select1" name="gender">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="Password" name="password" class="form-control" placeholder="Enter the password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="add1" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
           
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                Add New user
            </button>
            <div class="card shadow" style="margin-top:100px;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Details
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                            Add New User
                        </button>
                    </h6>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                        echo '<h2 class="bg-success text-white">'.$_SESSION['success'].'</h2>';
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['Status']) && $_SESSION['Status'] !='')
                    {
                        echo '<h2 class="bg-danger text-white">'.$_SESSION['Status'].'</h2>';
                        unset($_SESSION['Status']);
                    }
                    ?>
                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM user";
                        $query_run = mysqli_query($conn,$query);
                        ?>
                        <table class="table table-bordered mt-5" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phoneno</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Password</th>
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
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['phoneno']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <form action="manage/user_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['user_id']; ?>">
                                            <button type="submit" name="editbtn" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code1.php" method="post">
                                            <input type="hidden" name="del_id" value="<?php echo $row['user_id']; ?>">
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