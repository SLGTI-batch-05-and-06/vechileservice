<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="i.css">
    <link rel="stylesheet" href="include/b.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include('include/script.php');?>
</head>
<?php
include_once('include/alh.php');
?>

<body class="mbb">

    <div class="box-area"
        style="background-image:url(ap.png); background-size:100%; background-repeat:norepeat; height:200px;">
        <h1 class="text-center text-white" id="hed">Book Appointment</h1>
    </div>
    <div class="container">

        <h2>Personal Information</h2>
        <form class="bac">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your name " required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your phone no" required>
            </div>
            <label for="font-bold">Preferred Method Of Contact:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="RadioOptions" id="Radio1" value="option1" checked>
                <label class="form-check-label" for="Radio1">Phone Call</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="RadioOptions" id="Radio2" value="option2">
                <label class="form-check-label" for="Radio2">Text</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="RadioOptions" id="Radio3" value="option3">
                <label class="form-check-label" for="Radio3">Mail</label>
            </div><br><br>
            <label for="font-bold">Your plan during repair:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="RadioOptions" id="Radio4" value="option4" checked>
                <label class="form-check-label" for="Radio4">Drop off</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="RadioOptions" id="Radio5" value="option5">
                <label class="form-check-label" for="Radio5">Text</label>
            </div>
            <div class="form-group"><br>
                <label>Select your vechile type</label>
                <select class="form-control" id="tbox">
                    <option>Bike</option>
                    <option>Car</option>
                    <option>Van</option>
                    <option>Bus</option>
                    <option>Truck</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroup1">Vehicle information</label>
                <input type="text" class="form-control" id="tbox" placeholder="Year(Required)"><br>
                <input type="text" class="form-control" id="tbox" placeholder="Make(Required)"><br>
                <input type="text" class="form-control" id="tbox" placeholder="Model(Required)"><br>
            </div>
            <div class="form-outline w-100">
                <label class="form-label" for="textAreaExample">Message</label>
                <textarea class="form-control" id="tbox" rows="4" style="background: #fff;"></textarea>
            </div>
            <div class="in1">
                <input type="submit" class="but-ba" value="Submit">
            </div>
        </form>
    </div>
    <div class="row"
        style="background-image:url(ap1.png); background-size:100%; background-repeat:norepeat; height:250px;">
    </div>
</body>

</html>