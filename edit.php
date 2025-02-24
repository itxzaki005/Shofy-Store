<?php
include 'connection.php'; // Database connection
if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid Request'); window.location.href = 'dashboard.php';</script>";
    exit;
}

$product_id = $_GET['id'];

// Fetch product details
$stmt = $conn->prepare("SELECT * FROM sh_product WHERE id = ?");
$stmt->execute([$product_id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "<script>alert('Product not found!'); window.location.href = 'dashboard.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            width: 400px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
            text-align: left;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            background: #f5f5f5;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
            border-radius: 8px;
            transition: 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        img {
            margin-top: 10px;
            border-radius: 8px;
            max-width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Product</h2>
    <form method="post" enctype="multipart/form-data" action="update_product.php">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

        <label>Product Name</label>
        <input type="text" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required>

        <label>Category</label>
        <input type="text" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" required>

        <label>Description</label>
        <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea>

        <label>Product Image</label>
        <input type="file" name="image">
        <?php if (!empty($product['image'])) { ?>
            <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image">
        <?php } ?>

        <button type="submit" name="update_product">Update Product</button>
    </form>
</div>

</body>
</html>
