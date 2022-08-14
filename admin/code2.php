<!-- mechanic -->
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
    if(isset($_POST['add2']))
    {
        $name = $_POST['name'];
        $phoneno = $_POST['contact'];
        $email = $_POST['email'];
        $status = $_POST['status'];
        $date=$_POST['date'];

        $query = "INSERT INTO mechanic (name,contact,email,status,Date_created) VALUES('$name','$phoneno','$email','$status','$date')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            // echo "added"
            $_SESSION['Success'] = "mechanic details added";
            header('Location:mechanic.php');
        }
        else
        {
            // echo "not added"
            $_SESSION['Status'] = "mechanic details Not added";
            header('Location:mechanic.php');
        }

    }

if(isset($_POST['updatebtn']))
{   $id=$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $phoneno = $_POST['edit_phoneno'];
    $email = $_POST['edit_email'];
    $status = $_POST['edit_status'];
    $date = $_POST['edit_date'];

    $query = "UPDATE mechanic SET name='$name',contact='$phoneno',email='$email',status='$status',date_created='now()' WHERE mechanic_id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Updated";
            header('Location:mechanic.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Updated";
        header('Location:mechanic.php');
    }
}

if(isset($_POST['del_btn']))
{
    $id=$_POST['del_id']; 

    $query = "DELETE FROM mechanic WHERE mechanic_id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Deleted";
            header('Location:mechanic.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Deleted";
        header('Location:mechanic.php');
    }
}



    ?>
</body>
</html>