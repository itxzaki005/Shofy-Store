<?php
session_start();

include 'connection.php'; // Include the database connection
include'header.php';
include 'links.php';
// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id']; // Get user ID from session

// Fetch user details
$stmt = $conn->prepare("SELECT * FROM sh_user WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<script>alert('User not found! Redirecting to login page...'); window.location.href = 'login.php';</script>";
    exit;
}

// Fetch user's products
$productStmt = $conn->prepare("SELECT * FROM sh_product WHERE email = ?");
$productStmt->execute([$user['email']]);
$products = $productStmt->fetchAll(PDO::FETCH_ASSOC);

// Handle Logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Handle Product Update
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

    // Update product
    $updateStmt = $conn->prepare("UPDATE sh_product SET product_name = ?, category = ?, description = ?, image = ? WHERE id = ? AND user_email = ?");
    $updateStmt->execute([$product_name, $category, $description, $image, $product_id, $user['email']]);

    echo "<script>alert('Product updated successfully!'); window.location.href = 'dashboard.php';</script>";
    exit;
}

// Handle Product Deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];
    $deleteStmt = $conn->prepare("DELETE FROM sh_product WHERE id = ? AND email = ?");
    $deleteStmt->execute([$product_id, $user['email']]);

    echo "<script>alert('Product deleted successfully!'); window.location.href = 'dashboard.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
       
       /* General Table Styling */
table { 
    width: 100%; 
    border-collapse: collapse; 
    margin: 20px 0; 
    background: rgba(255, 255, 255, 0.9); /* Soft Glass Effect */
    border-radius: 12px; 
    overflow: hidden; 
    backdrop-filter: blur(10px); 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table Header */
th { 
    background: linear-gradient(135deg, #007bff, #00c6ff); 
    color: white; 
    font-weight: bold; 
    padding: 18px; 
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid #007bff;
}

/* Table Rows */
td { 
    padding: 15px; 
    border-bottom: 1px solid rgba(0, 0, 0, 0.1); 
    text-align: center; 
    color: #333; 
    font-size: 16px;
}

/* Input and Image Styling */
td input, td img { 
    background: rgba(240, 240, 240, 0.8); 
    border: 1px solid rgba(200, 200, 200, 0.5); 
    color: #333; 
    padding: 10px; 
    width: 100%; 
    box-sizing: border-box; 
    max-width: 80px; 
    border-radius: 8px; 
}

/* Button Styling */
button { 
    background: linear-gradient(135deg, #007bff, #00c6ff); 
    color: white; 
    border: none; 
    padding: 12px 24px; 
    font-size: 16px; 
    font-weight: bold; 
    cursor: pointer; 
    margin: 5px; 
    border-radius: 8px; 
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Button Hover */
button:hover { 
    background: linear-gradient(135deg, #00c6ff, #007bff); 
    transform: translateY(-2px); 
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Delete Button */
.delete-btn { 
    background: linear-gradient(135deg, #ff3d3d, #d32f2f); 
}

/* Delete Button Hover */
.delete-btn:hover { 
    background: linear-gradient(135deg, #d32f2f, #ff3d3d); 
    transform: translateY(-2px);
}

/* Navigation Styling */
nav { 
    margin-bottom: 20px; 
    text-align: center;
}

nav a { 
    margin: 0 12px; 
    color: #007bff; 
    text-decoration: none; 
    font-weight: bold; 
    font-size: 18px;
    transition: 0.3s;
}

nav a:hover { 
    text-decoration: underline; 
    color: #0056b3;
}

    </style>
</head>
<body>

<div class="container">
    <nav>
        <a href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="dashboard.php">Dashboard</a>
    </nav>

    <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>

    <h3>Your Products</h3>
    <a href="product.php"><button>Add New Product</button></a>

    <?php if (empty($products)) { ?>
        <p>No products found.</p>
    <?php } else { ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
        <td>
            <input type="text" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required disabled>
        </td>
        <td>
            <input type="text" name="category" value="<?php echo 'Electric'; ?>" required disabled>
        </td>
        <td>
            <input type="text" name="description" value="<?php echo htmlspecialchars($product['description']); ?>" required disabled>
        </td>
        <td>
            <?php if (!empty($product['image'])) { ?>
                <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image">
            <?php } else { ?>
                <img src="uploads/mobile.jpg" alt="Default Image">
            <?php } ?>
        </td>
        <td>
            <!-- Redirects to edit.php with product ID -->
            <button type="button" class="edit-btn" onclick="redirectToEdit(<?php echo $product['id']; ?>)">Edit</button>
            <button type="submit" name="delete_product" class="delete-btn" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
        </td>
    </form>
</tr>

                <?php } ?>
            </tbody>
        </table>
    <?php } ?>

    <form method="post">
        <button type="submit" name="logout">Sign Out</button>
    </form>
</div>

<script>
    function enableEdit(button) {
        let row = button.closest('tr');
        let inputs = row.querySelectorAll('input');
        let updateButton = row.querySelector('button[name="update_product"]');
        
        inputs.forEach(input => input.disabled = false);
        updateButton.disabled = false;
        button.disabled = true; // Disable edit button once editing starts
    }
</script>

</body>

<?php include 'footer.php';
     include 'java.php';?>
<script>
function redirectToEdit(productId) {
    window.location.href = `edit.php?id=${productId}`;
}
</script>

</body>
</html>
