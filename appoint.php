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
</head>

<body>
    <?php  
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['name']) &&!empty($_POST['mail'] ) && !empty($_POST['phone']) &&  !empty($_POST['Radio1'] ) &&  !empty($_POST['Radio2']) && !empty($_POST['type']) && !empty($_POST['year1']) &&!empty($_POST['make']) && !empty($_POST['model']) && !empty($_POST['service']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $radio1 = $_POST['Radio1'];
            $radio2 = $_POST['Radio2'];
            $type = $_POST['type'];
            $year1 = $_POST['year1'];
            $make = $_POST['make'];
            $model = $_POST['model'];
            $service = $_POST['service'];

           
    
            $query = "INSERT INTO service_request (name,email,phone,contact_method,plan,vehicle_type,year1,make,model,service) VALUES('$name','$mail','$phone','$radio1','$radio2','$type','$year1','$make','$model','$service')";
            $query_run = mysqli_query($conn,$query);
    
            if($query_run)
            {
                // echo "added"
                $_SESSION['Success'] = "Appointment sent we will send a conformation mail";
                header('Location:appointment.php');
                
            }
            else
            {
                // echo "not added"
                $_SESSION['Status'] = "User account not created";
                header('Location:appointment.php');
                
            }
        
   
        }
        else
        {
            echo "All fields are required";
        }
    }
?>
</body>

</html>