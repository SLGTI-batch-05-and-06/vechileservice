<!-- service -->
<?php 
session_start();
$conn = mysqli_connect("localhost","root","","vehicle_service")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../include/script.php'); ?>
</head>
<body>
<?php 
    if(isset($_POST['add3']))
    {
        $service = $_POST['service'];
        $status = $_POST['status'];
        $date = $_POST['date'];

        $query = "INSERT INTO service_list (service,status,Date_created) VALUES('$service','$status','$date')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            // echo "added"
            $_SESSION['success'] = "service details added";
            header('Location:service.php');
        }
        else
        {
            // echo "not added"
            $_SESSION['Status'] = "service details Not added";
            header('Location:service.php');
        }

    }

    if(isset($_POST['updatebtn']))
    {   $id=$_POST['edit_id'];
        $service = $_POST['edit_service'];
        $status = $_POST['edit_status'];
        $date = $_POST['edit_date'];
    
        $query = "UPDATE service_list SET service='$service',status='$status',date_created='$date' WHERE service_id='$id' ";
        $query_run = mysqli_query($conn,$query);
    
        if($query_run)
        {
            $_SESSION['success'] = "Your data is Updated";
                header('Location:service.php');
    
        }
        else
        {
            $_SESSION['Status'] = "Your data is Not Updated";
            header('Location:service.php');
        }
    }

if(isset($_POST['del_btn']))
{
    $id=$_POST['del_id']; 

    $query = "DELETE FROM service_list WHERE service_id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Deleted";
            header('Location:service.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Deleted";
        header('Location:service.php');
    }
}



    ?>
</body>
</html>