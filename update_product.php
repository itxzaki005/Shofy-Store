<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_product'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "uploads/" . $image);
    } else {
        $image = $_POST['existing_image'];
    }

    // Update product in database
    $updateStmt = $conn->prepare("UPDATE sh_product SET product_name = ?, category = ?, description = ?, image = ? WHERE id = ?");
    $updateStmt->execute([$product_name, $category, $description, $image, $product_id]);

    echo "<script>alert('Product updated successfully!'); window.location.href = 'dashboard.php';</script>";
}
?>
