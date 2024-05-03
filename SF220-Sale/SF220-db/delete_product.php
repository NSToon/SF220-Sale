
<?php
include 'condb.php';

// Check if 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Retrieve and sanitize the 'id' parameter
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Prepare SQL DELETE statement
    $sql = "DELETE FROM product2 WHERE pro_id = '$id'";


    // Execute the DELETE query
    if (mysqli_query($conn, $sql)) {
        // Delete successful
        echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='show_product.php';</script>";
    } else {
        // Delete failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
        echo "<script>window.location='show_product.php';</script>"; // Redirect back to product list
    }
} else {
    // Handle missing 'id' parameter
    echo "<script>alert('ไม่พบรหัสสินค้าที่ต้องการลบ');</script>";
    echo "<script>window.location='show_product.php';</script>"; // Redirect back to product list
}

mysqli_close($conn);
?>




