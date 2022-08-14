<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/i.css">
    <link rel="stylesheet" href="include/b.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include('include/script.php');?>
</head>
<?php
include_once('include/alh.php');
?>

<body class="mbb">

    <div class="box-area"
        style="background-image:url(images/ap.png); background-size:100%; background-repeat:norepeat; height:200px;">
        <h1 class="text-center text-white" id="hed">Book Appointment</h1>
    </div>
    <div class="container">

        <h2>Personal Information</h2>
        <form class="bac">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your name " required name="name">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your address" required name="mail">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" id="tbox" placeholder="Enter your phone no" required
                    name="phone">
            </div>
            <label for="font-bold">Preferred Method Of Contact:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Radio1" id="Radio1" value="phonecall" checked>
                <label class="form-check-label" for="Radio1">Phone Call</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Radio1" id="Radio2" value="text">
                <label class="form-check-label" for="Radio2">Text</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Radio1" id="Radio3" value="mail">
                <label class="form-check-label" for="Radio3">Mail</label>
            </div><br><br>
            <label for="font-bold">Your plan during repair:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Radio2" id="Radio4" value="Dropoff" checked>
                <label class="form-check-label" for="Radio4">Drop off</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Radio2" id="Radio5" value="waiting">
                <label class="form-check-label" for="Radio5">Waiting</label>
            </div>
            <div class="form-group"><br>
                <label>Select your vechile type</label>
                <select class="form-control" id="tbox" name="type">
                    <option value="bike">Bike</option>
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="bus">Bus</option>
                    <option value="truck">Truck</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroup1">Vehicle information</label>
                <input type="text" class="form-control" id="tbox" placeholder="Year(Required)" name="year1"><br>
                <input type="text" class="form-control" id="tbox" placeholder="Make(Required)" name="make"><br>
                <input type="text" class="form-control" id="tbox" placeholder="Model(Required)" name="model"><br>
            </div>
            <div class="form-group">
                <select class="form-control" aria-label=".form-select-sm example" name="service" id="tbox">
                    <option selected>Select your service</option>
                    <option value="waterwash">Water wash</option>
                    <option value="tirerepair">New tires & tire repair</option>
                    <option value="brakerepair">Brakes repair</option>
                    <option value="oilchanging">Oil change</option>
                    <option value="checkenginelight">Check engine light</option>
                    <option value="belt&hoses">Belt & hoses</option>
                    <option value="acheatingrepair">Ac heating repair</option>
                    <option value="brakerepair">Streeing & suspension</option>
                </select>
            </div>
            <div class="in1">
                <input type="submit" class="but-ba" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <div class="row"
        style="background-image:url(images/ap1.png); background-size:100%; background-repeat:norepeat; height:250px;">
    </div>
</body>

</html>