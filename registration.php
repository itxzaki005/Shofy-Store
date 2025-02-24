<?php
include 'connection.php'; 
// Ensure this file contains a valid database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get form data and sanitize input
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Validate passwords
        if ($password !== $confirm_password) {
            echo "<script>alert('Password and confirm password do not match.');</script>";
            exit();
        }

        // Check if username exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM sh_user WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetchColumn() > 0) {
            echo "<script>alert('Username is already taken. Please choose a different username.');</script>";
            exit();
        }

        // Check if email exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM sh_user WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetchColumn() > 0) {
            echo "<script>alert('Email is already registered. Please use a different email.');</script>";
            exit();
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Generate a unique user ID
        $user_id = uniqid('', true);

        // Get user IP
        $user_ip = $_SERVER['REMOTE_ADDR'];

        // Insert into sh_user table
        $sql_user = "INSERT INTO sh_user (user_id, name, username, email, password, ip) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql_user);
        $stmt->execute([$user_id, $name, $username, $email, $hashed_password, $user_ip]);

        // Now insert the user info into the sh_product database
        // Assuming there's a user table in sh_product to store user details (e.g., user_info)
        $sql_product_user = "INSERT INTO sh_product (user_id, name, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql_product_user);
        $stmt->execute([$user_id, $name, $email]);

        // Redirect to the profile page with success
        echo "<script>
                alert('Registration successful. Redirecting to profile page...');
                window.location.href = 'profile.php';
              </script>";
        exit();

    } catch (PDOException $e) {
        echo "<script>alert('Database Error: " . addslashes($e->getMessage()) . "');</script>";
    }
}

$conn = null; // Close database connection
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #121212;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .preloader h1 {
            font-size: 2rem;
            color: #fff;
            animation: fadeInOut 1.5s infinite;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }

        .container {
            background-color: #1e1e1e;
            color: #ffffff;
            padding: 30px;
            width: 400px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
            display: none; /* Hide the container initially */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label, input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            padding: 10px;
            border: 1px solid #444;
            border-radius: 8px;
            background: #2b2b2b;
            color: #fff;
        }

        input[type="submit"] {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            padding: 10px;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
        }

        a {
            text-align: center;
            display: block;
            margin-top: 10px;
            color: #6a11cb;
            text-decoration: none;
        }

        a:hover {
            color: #2575fc;
        }
    </style>
    <script>
        // Preloader functionality
        window.onload = function() {
            const preloader = document.querySelector('.preloader');
            const container = document.querySelector('.container');

            setTimeout(() => {
                preloader.style.display = 'none'; // Hide preloader
                container.style.display = 'block'; // Show container
            }, 2000); // Adjust duration as needed
        }
    </script>
</head>
<body>
    <div class="preloader">
        <h1>Thanks for registering on our site!</h1>
    </div>

    <div class="container">
        <h2>Create an Account</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Choose a username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            
            <input type="submit" value="Register">
        </form>
        <a href="profile.php">Already have an account? Login here</a>
    </div>
</body>
</html>
