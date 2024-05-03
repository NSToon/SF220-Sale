
<?php
include 'condb.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $f_name = $_POST['p_name'];
    $f_type_id = $_POST['p_type_id'];
    $f_price = $_POST['price'];
    $f_color = $_POST['color'];
    $f_size = $_POST['size'];
    $f_amount = $_POST['amount'];

    // Handle file upload
    if(isset($_FILES["image"])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowed_extensions)) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";
                // Insert data into database
                $sql = "INSERT INTO product2 (pro_name, type_id, price, color, size, amount, image) 
                        VALUES ('$f_name', '$f_type_id', '$f_price', '$f_color', '$f_size', '$f_amount', '$target_file')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
                    echo "<script>window.location='show_product.php';</script>";
                } else {
                    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้: " . mysqli_error($conn) . "');</script>";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file uploaded.";
    }
}
?>

