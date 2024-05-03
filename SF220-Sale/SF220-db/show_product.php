<?php
include'condb.php';
error_reporting(E_ALL); 
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link href="Booststrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class=" h1 text-center alert alert-info nb-4 mt-4" role="alert">แสดงข้อมูลสินค้า</div>
<a href = "fr_product.php"   class="btn btn-success mb-4 ">Add</a>
    <table class="table table-striped">
        <tr>

            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รหัสประเภทสินค้า</th>
            <th>ราคา</th>
            <th>สี</th>
            <th>ไซส์</th>
            <th>จำนวน</th>
            <th>รูปภาพ</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
<?php
$sql = "SELECT * FROM product2";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){


?>


        <tr>
            <td><?=$row["pro_id"]?></td>
            <td><?=$row["pro_name"]?></td>
            <td><?=$row["type_id"]?></td>
            <td><?=$row["price"]?></td>
            <td><?=$row["color"]?></td>
            <td><?=$row["size"]?></td>
            <td><?=$row["amount"]?></td>
            <td><?=$row["image"]?></td>
            <td><a href = "edit_product.php?id=<?=$row["pro_id"]?>"   class="btn btn-primary ">Edit</a></td>
            <td><a href = "delete_product.php?id=<?=$row["pro_id"]?>"   class="btn btn-danger " onclick="Del(this.href);return false;">Delete</a></td>



        </tr>
<?php
}
mysqli_close($conn);
?>
</table>
</div>
</body>
</html>

<script language="JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}

</script>