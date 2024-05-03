<?php include 'condb.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nillarut</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<?php include 'manu.php' ; ?>
<div class="container ">
  <div class="row "style="margin-top: 200px;">
  <?php
  $ids=$_GET['id'];
    $sql = "SELECT * FROM product2, type WHERE product2.type_id= type.type_id and product2.pro_id='$ids'   ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $imagePath = $row['image'];
    ?>
    <div class="col-md-4">
        <img src="<?= $imagePath ?>" width="450px" class="mt-5 p-2 my-2 border" />

    </div>


    <div class="col-md-6" style="margin-top: 80px;">
        <br><br>
    <div style="font-size: 25px;">ID: <?= $row['pro_id'] ?><br></div>
        <h5 class="text-success"style="font-size: 35px;"><?= $row['pro_name'] ?></h5>
        <div class="text" style="font-size: 25px;">
            Type product :<b class="text-type" style="font-size: 30px;"> <?= $row['type_name'] ?> <br></b>
            Price <b class="text-danger"><?= $row['price'] ?> </b> Bath <br>
            <a class="btn btn-outline-dark mt-5" style="font-size: 30px;" href="order.php?id=<?= $row['pro_id'] ?>" > Add cart </a>
        </div>
        
    </div>
    
  </div>
</div>
<?php
    mysqli_close($conn);
    ?>


</body>
</html>