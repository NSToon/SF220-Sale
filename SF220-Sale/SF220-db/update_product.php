<?php
include 'condb.php';

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $f_name = $_POST['p_name'];
    $f_type_id = $_POST['p_type_id'];
    $f_price = $_POST['price'];
    $f_color = $_POST['color'];
    $f_size = $_POST['size'];
    $f_amount = $_POST['amount'];
    
    // Retrieve the product ID from the form data or URL parameter
    $id_product = $_POST['pro_id']; // Assuming the product ID is included in the form data

    // Check if a new image file was uploaded
    if(isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
        // Specify the directory where you want to store the uploaded images
        $upload_dir = 'uploads/'; // Change 'uploads/' to the actual path on your server

        // Process the uploaded file
        $file_name = $_FILES['new_image']['name'];
        $file_tmp = $_FILES['new_image']['tmp_name'];
        $file_destination = $upload_dir . $file_name;

        // Move the uploaded file to its destination directory
        if(move_uploaded_file($file_tmp, $file_destination)) {
            // File upload successful, update the image path in the database
            $image_path = $file_destination;
            
            // Construct the SQL query
            $sql = "UPDATE product2 SET 
                    pro_name = '$f_name',
                    type_id = '$f_type_id',
                    price = '$f_price',
                    color = '$f_color',
                    size = '$f_size',
                    amount = '$f_amount',
                    image = '$image_path'
                    WHERE pro_id = '$id_product'";

            // Execute the query
            $result = mysqli_query($conn, $sql);
            
            // Check if update was successful
            if ($result) {
                // Update successful
                echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
                echo "<script>window.location='show_product.php';</script>";
            } else {
                // Update failed
                echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            // Failed to move uploaded file to destination directory
            echo "<script>alert('Failed to move uploaded file');</script>";
        }
    } else {
        // No new image file uploaded, update other product details without image
        $sql = "UPDATE product2 SET 
                pro_name = '$f_name',
                type_id = '$f_type_id',
                price = '$f_price',
                color = '$f_color',
                size = '$f_size',
                amount = '$f_amount'
                WHERE pro_id = '$id_product'";

        // Execute the query
        $result = mysqli_query($conn, $sql);
        
        // Check if update was successful
        if ($result) {
            // Update successful
            echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
            echo "<script>window.location='show_product.php';</script>";
        } else {
            // Update failed
            echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้: " . mysqli_error($conn) . "');</script>";
        }
    }
}

// Close database connection
mysqli_close($conn);
?>
