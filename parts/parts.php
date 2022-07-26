<?php
session_start();
$connect =  mysqli_connect("localhost","root","","vehicle_service");

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shoping_cart"]))
    {
        $item_array_id=array_column($_SESSION["shoping_cart"],"item_id");
        if(!in_array($_GET["id"],$item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array=array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array=array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][$count] = $item_array; 
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("item removed")</script>';
                echo '<script>window.location="parts.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include('../include/script.php');?>
    <link rel="stylesheet" href="pa.css">
</head>

<body class="minbody">
    <div class="header">
        <div class="menub">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../tjl.png" style="height: 100px;width:100px; margin-left:20px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse ms- navbar-collapse justify-content-center">
                    <ul class="navbar-nav ml-auto" id="ulco">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Purches</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div> <br><br>
    <div class="container">
        <h3 align="center">Phurches the parts</h3>
        <br>
        <br>
        <br>
    <div class="row">
        <?php
        $query = "SELECT * FROM parts ORDER BY id ASC";
        $result=mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0 )
        {
            while($row = mysqli_fetch_array($result))
             {
                ?>
        
            <div class="col-md-4" style="margin-top:20px;">
                <form method="post" action="parts.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid black; background-color:white;border-radius:5px; padding:16px;"
                        align="center">
                        <img src="images/<?php echo $row["image"];?>" class="img-responsive" /> <br>
                        <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                        <h4 class="trext-danger">LKR.<?php echo $row["price"];?></h4>
                        <input type="text" name="quantity" value="1" class="form-control" />
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger"
                            value="add to cart" />
                    </div>
                </form>
            </div>
        <?php
        }
        }
        ?>
        </div>
        <div style="clear:both"></div>
        <br>
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%"> Item</th>
                    <th width="10%"> quantity</th>
                    <th width="20%"> Price</th>
                    <th width="15%"> Total</th>
                    <th width="5%"> Action</th>
                </tr>
                <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                        ?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$<?php echo $values["item_price"]; ?></td>
                    <td> $ <?php echo number_format($values["item_quantity"] *  $values["item_price"], 2) ;?></td>
                    <td><a href="parts.php? action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                class="text-danger">Remove</span></a></td>
                </tr>
                <?php 
                $total=$total+($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">total</td>
                    <td align="right">$<?php echo number_format($total,2); ?></td>
                    <td><a href="parts.php? action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                class="text-primary">Purches</span></a></td>
                </tr>
                <?php 
                } ?>
            </table>
        </div>
    </div>
    <br>
</body>

</html>