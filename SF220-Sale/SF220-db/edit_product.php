
 <?php
include 'condb.php';

// Check if 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    // Retrieve the 'id' parameter from the URL
    $id = $_GET['id'];
    
    // Retrieve product details based on the provided ID
    $sql = "SELECT * FROM product2 WHERE pro_id='$id'";
    $result = mysqli_query($conn, $sql);
    
    // Check if a product was found with the provided ID
    if(mysqli_num_rows($result) > 0) {
        // Fetch product details
        $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="Booststrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Assuming correct path to Bootstrap CSS -->
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class=" h1 text-center alert alert-info nb-4 mt-4" role="alert">แก้ไขข้อมูลสินค้า</div>
                <form method="POST" action="update_product.php" enctype="multipart/form-data">

                    <label>รหัสสินค้า</label>
                    <input type="text" name="pro_id" class="form-control" readonly value="<?=$row['pro_id']?>"><br>

                    <label>ชื่อสินค้า</label>
                    <input type="text" name="p_name" class="form-control" value="<?=$row['pro_name']?>"><br>

                    <label>รหัสประเภทสินค้า</label>
                    <input type="text" name="p_type_id" class="form-control" value="<?=$row['type_id']?>"><br>

                    <label>ราคา</label>
                    <input type="number" name="price" class="form-control" value="<?=$row['price']?>"><br>

                    <label>สี</label>
                    <input type="text" name="color" class="form-control" value="<?=$row['color']?>"><br>

                    <label>ไซส์</label>
                    <input type="text" name="size" class="form-control" value="<?=$row['size']?>"><br>

                    <label>จำนวน</label>
                    <input type="number" name="amount" class="form-control" value="<?=$row['amount']?>"><br>

                    <label>รูปปัจจุบัน</label>
                    <br>
                    <img src="<?=$row['image']?>" alt="Current Image" style="max-width: 200px; max-height: 200px;"><br><br>

                    <label>อัปโหลดรูปใหม่ (หากต้องการแก้ไข)</label><br>
                    <input type="file" name="new_image" class="form-control-file nb-4 mt-4"><br>

                    <input type="submit" value="Update" class="btn btn-success nb-4 mt-4">
                    <a href="show_product.php" class="btn btn-danger nb-4 mt-4">Cancel</a>

                </form> 
            </div>
        </div>
    </div>
</body>

</html>

<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
    } else {
        // No product found with the provided ID
        echo "No product found with the provided ID.";
    }
} else {
    // 'id' parameter is missing in the URL
    echo "Error: 'id' parameter is missing.";
}

// Close the database connection
mysqli_close($conn);
?>
