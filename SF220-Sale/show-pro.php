<?php include 'condb.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nillarut</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Mywebsite/index.php">
    <link rel="stylesheet" href="css.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'manu.php'; ?>
    <div class="container">
    <br><br><br><br><br><br><br><br>
    <?php
            if (isset($_GET['type_name'])) {
                echo '<h1>' . htmlspecialchars($_GET['type_name']) . '</h1>';
            } else {
                echo '<h1>All our Product</h1>';
            }
            ?>
        <br><br>
        <div class="row">
        <?php
    // Check if a specific type is requested
    if (isset($_GET['type_id']) && isset($_GET['type_name'])) {
        $type_id = mysqli_real_escape_string($conn, $_GET['type_id']);
        $type_name = mysqli_real_escape_string($conn, $_GET['type_name']);
        $sql = "SELECT * FROM product2 WHERE type_id = '$type_id' ORDER BY pro_id";
    } else {
        // If no specific type is requested, fetch all products
        $sql = "SELECT * FROM product2 ORDER BY pro_id";
    }

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        // Get the image path directly from the database
        $imagePath = $row['image'];
        // Generate the product detail page URL
        $productDetailURL = "product_detail.php?pro_id={$row['pro_id']}";
    ?>
            <div class="col-sm-3">
                <div class="text-center">
                    <!-- Displaying the image -->
                    <img src="<?= $imagePath ?>" width="250px" height="250px" class="mt-5 p-2 my-2 border">
                    <br><br><br>
                    <h5 class="text-success"><?= $row['pro_name'] ?></h5>
                    Price <b class="text-danger" ><?= $row['price'] ?> </b> Bath <br>
                    <a class="btn btn-outline-dark mt-5" style="width: 100px; height: 40px;" href="sh_product_detail.php?id=<?=$row['pro_id']?>" > More </a>
                </div>
                <br>
            </div>
            <?php
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <br><br><br><br><br>
</body>
</html>
