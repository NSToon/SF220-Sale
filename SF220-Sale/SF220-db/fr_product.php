
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="Booststrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Assuming correct path to Bootstrap CSS -->
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            
       
    <div class=" h1 text-center alert alert-info nb-4 mt-4" role="alert">เพิ่มข้อมูลสินค้า</div>
    <form method="POST" action="insert_product.php" enctype="multipart/form-data">


    <label>ชื่อสินค้า</label>
    <input type="text" name="p_name" class="form-control" placeholder="ชื่อสินค้า" required><br>

    <label>รหัสประเภทสินค้า </label>
    <input type="number" name="p_type_id"  class="form-control"  placeholder="Ex. 001 , 002" required > <br>


    <label>ราคาขาย </label>
    <input type="number" name="price" class="form-control" placeholder="Ex. 690.00 " required><br>

    <label>สี</label>
    <input type="text" name="color" class="form-control" placeholder="สี" required><br>

    <label>ไซส์</label>
    <input type="text" name="size" class="form-control" placeholder="ไซส์" required><br>

    <label>จำนวน</label>
    <input type="number" name="amount" class="form-control" placeholder="จำนวน" required><br>

    <label>รูปภาพ</label>
    <input type="file" name="image" class="form-control-file"  required ><br>



    <input type="submit" value="submit" class="btn btn-success nb-4 mt-4 " >
    <a href =  "show_product.php" class="btn btn-danger nb-4 mt-4" >Cancel</a>


</form> 
</div>
</div>
</div>
</body>
</html>

 