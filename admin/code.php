<!-- part -->
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
    <!-- parts -->
    <?php 
    if(isset($_POST['add']))
    {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];

        $query = "INSERT INTO parts (name,image,price) VALUES('$name','$image','$price')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            // echo "added"
            $_SESSION['Success'] = "Part details added";
            header('Location:part.php');
        }
        else
        {
            // echo "not added"
            $_SESSION['Status'] = "Part details Not added";
            header('Location:part.php');
        }

    }

if(isset($_POST['updatebtn']))
{   $id=$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $image = $_POST['edit_image'];
    $price = $_POST['edit_price'];

    $query = "UPDATE parts SET name='$name',image='$image',price='$price' WHERE id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Updated";
            header('Location:part.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Updated";
        header('Location:part.php');
    }
}

if(isset($_POST['del_btn']))
{
    $id=$_POST['del_id']; 

    $query = "DELETE FROM parts WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is Deleted";
            header('Location:part.php');

    }
    else
    {
        $_SESSION['Status'] = "Your data is Not Deleted";
        header('Location:part.php');
    }
}



    ?>

</body>

</html>