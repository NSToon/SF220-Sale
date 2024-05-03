<?php
session_start();
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'manu.php'; ?>
<br><br>
    <div class="container mt-3">
        <form id="form1" method="POST" action="insert_cart.php">
            <div class="row mt-5" >
                
                
                <div class="col-md-10"style="font-size: 20px;">
                <div class="alert alert-secondary h5" role="alert">
  <div class="Shopping-cart" style="font-size: 35px;">Shopping Cart</div>
</div>
    <table class="table table-hover">
                        
            <tr>
                <th>No.</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total Price</th>
                <th>Add - Reduce</th>
                <th>Delete</th>
            </tr>

        <?php 
        $Total = 0;
        $sumPrice = 0;
        $m = 1;
        for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
            if (($_SESSION["strProductID"][$i]) != "") { 
                $sql1 = "select * from product2 where pro_id = '" . $_SESSION["strProductID"][$i] . "'";
                $result1 = mysqli_query($conn, $sql1); 
                $row_pro = mysqli_fetch_array($result1); 
                $_SESSION["price"] = $row_pro['price'];
                $Total = $_SESSION["strQty"][$i];
                $sum = $Total * $row_pro['price'];
                $sumPrice = $sumPrice + $sum;
                $_SESSION["sumPrice"] = $sumPrice;
                            
        ?>
        <tr>
                        
            <td><?=$m?></td>
            <td>
                <img src="<?= $row_pro['image'] ?>" width="100px" height="100px" class="border">
                <?= $row_pro['pro_name'] ?>
                </td>

            <td><?=$row_pro['price']?></td>
            <td><?= isset($_SESSION["strQty"][$i]) ? $_SESSION["strQty"][$i] : '' ?></td>
            <td><?= $sum ?></td>
            <td>
                <a href="order.php?id=<?= $row_pro['pro_id'] ?>" class="btn btn-outline-dark">+</a>
                <?php if($_SESSION["strQty"][$i]  > 1){?>
                <a href="order_del.php?id=<?= $row_pro['pro_id'] ?>" class="btn btn-outline-dark">-</a>


                <?php } ?>
            </td>
            <td><a href="pro_delete.php?Line=<?=$i?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php
                    $m++;
                }
            }
                    
        ?>
        <tr>
    <td class="text-end"colspan="4">Total Cost</td>
    <td class="text-center" ><?=$sumPrice?></td>
    <td >Bath</td>
    </tr>
    </table>
    <div style="text-align:right ">
    <a href="show-pro.php"><button type="button" class="btn btn-outline-secondary"style="font-size: 20px;">Buy more</button></a> 
    <a href="d13.php"><button type="submit" class="btn btn-outline-success"style="font-size: 20px;">Check Out</button></a>
    </div>

                        

            </div>
            <br>
            <div class="row mt-5">
    <div class="col-md-6" style="width:1000px">
    <div class="alert " h4 role="alert">
    <b class="info-for-del" style="font-size: 35px;">Information for delivery </b>
</div>

<div style="font-size: 25px;">Firstname - Lastname</div>
<input type="text" name="cus_name" class="form-control mt-4" required placeholder="Firstname - Lastname"><br>
<div style="font-size: 25px;">Address :</div>
<textarea class="form-control mt-4" required placeholder="Address" name="cus_add" rows="3"> </textarea><br>
<div style="font-size: 25px;">Tel.</div>
<input type="number" name="cus_tel" class="form-control mt-4" required placeholder="Telephone">
<br><br><br><br><br><br><br><br>
    </div>
    </form>

    </div>
</body>
</html>
<style>
    .col-md-6{
    height: 555px;
    padding: 30px;
    background: #e2e3e5;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;   
}
</style>
