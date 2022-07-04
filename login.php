<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/script.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ss.css">
</head>

<body class="mainbody">
    
    <div class="row mt-5">
        <div class="col-4"></div>

        <div class="col-4 mx-3" id="maincom">
            <form>
                <h1 class="mt-5" id="thalavar">Login</h1>
                <div class="mb-3 mt-5">
                    <input type="email" id="exampleInputEmail1"  placeholder="Enter Username">
                </div>
                <div class="mb-3 mt-5">
                    <input type="password"  id="exampleInputEmail1" placeholder="Enter Password">
                </div>
                <div class="btnmain">
                <button type="submit" class="sumitbtn">Login</button>
                </div>
                <div class="mt-4 mb-5">
                   <a class="linker" href="" > <h3 id="dont">Don't have an account?</h3></a> 
                   <a class="linker" href=""> <h3 id="sin">Sign up</h3></a> 
                   <a class="linker" href=""> <h3 id="sin">Forgot Password?</h3></a> 
                </div>
         
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>

</html>