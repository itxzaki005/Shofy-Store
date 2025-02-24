
      
<?php
ob_start();  // Start output buffering

session_start();
include 'connection.php'; 
include 'links.php';
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch user details
$stmt = $conn->prepare("SELECT * FROM sh_user WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<script>alert('User not found! Redirecting to login page...'); window.location.href = 'login.php';</script>";
    exit;
}

// Fetch user's products
$user_email = $user['email'];
$productStmt = $conn->prepare("SELECT * FROM sh_product WHERE email = ?");
$productStmt->execute([$user_email]);
$products = $productStmt->fetchAll(PDO::FETCH_ASSOC);

// Handle Profile Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $updateStmt = $conn->prepare("UPDATE sh_user SET name = ?, email = ? WHERE id = ?");
    $updateStmt->execute([$name, $email, $user_id]);

    echo "<script>alert('Profile updated successfully!'); window.location.href = 'profile.php';</script>";
}

ob_end_flush();  // End output buffering
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile-section, .product-section {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile-section {
            flex: 1 1 30%;
            margin-right: 20px;
        }

        .product-section {
            flex: 1 1 65%;
        }

        h2, h3 {
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .product-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            max-width: 100%;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .product-card img:hover {
            transform: scale(1.05);
        }

        .product-card h4 {
            font-size: 20px;
            color: #007bff;
            margin-top: 10px;
        }

        .product-card p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .category, .description {
            font-weight: bold;
            color: #333;
            font-size: 16px;
        }

        .category {
            color: #007bff;
        }

        .description {
            color: #666;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .profile-section, .product-section {
                flex: 1 1 100%;
                margin-right: 0;
            }

            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Profile Section (Left Side) -->
    <div class="profile-section">
        <h2>Profile</h2>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
            <button type="submit" name="update_profile">Update Profile</button>
        </form>
    </div>

    <!-- Product Section (Right Side) -->
    <div class="product-section">
        <h3>Your Products</h3>

        <!-- Profile Image Display -->
        <div class="profile-image-container">
            <img src="uploads/image1.jpg" alt="Profile Image">
        </div>       

        <?php if (empty($products)) { ?>
            <p>No products found.</p>
        <?php } else { ?>
            <div class="image-gallery">
                <?php foreach ($products as $product) { ?>
                    <div class="product-card">
                        <?php if (!empty($product['image']) && file_exists("uploads/" . $product['image'])) { ?>
                            <div class="product-image-container">
                                <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                            </div>
                        <?php } else { ?>
                            <div class="product-image-container">
                                <img src="uploads/mobile.jpg" alt="Default Image"> <!-- Fallback image -->
                            </div>
                        <?php } ?>
                        <h4><?php echo htmlspecialchars($product['product_name']); ?></h4>
                        <p class="category"><strong>Category:</strong> <?php echo isset($product['category']) && !empty($product['category']) ? htmlspecialchars($product['category']) : 'No category'; ?></p>
                        <p class="description"><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="back-button">
            <a href="dashboard.php"><button>Back to Dashboard</button></a>
        </div>
    </div>
</div>

</body>



<?php include 'footer.php';
     include 'java.php';?>
</html>