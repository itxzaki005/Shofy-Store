<?php
ob_start(); // Start output buffering
session_start(); // Start the session

include 'connection.php';
include 'header.php'; // Ensure no output is in header.php
include 'links.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if email exists
    $stmt = $conn->prepare("SELECT * FROM sh_user WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];

            // Redirect to dashboard
            header('Location: /shofy/dashboard.php');
            exit;
        } else {
            $_SESSION['error'] = "Invalid password.";
            header('Location: /shofy/login.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "No account found with this email.";
        header('Location: /shofy/login.php');
        exit;
    }
}

$conn = null; // Close the connection
ob_end_flush(); // Send output at the end
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
<style>
    
   /* General Styles */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 26px;
    font-weight: bold;
}

label {
    font-size: 15px;
    color: #666;
    margin-bottom: 8px;
    display: block;
    font-weight: 500;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    background-color: #f9f9f9;
    color: #333;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="email"]:focus, input[type="password"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background: linear-gradient(145deg, #007bff, #0056b3);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

input[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.4);
}

.links {
    text-align: center;
    margin-top: 20px;
}

.links a {
    text-decoration: none;
    font-size: 14px;
    color: #007bff;
    transition: color 0.3s ease;
}

.links a:hover {
    color: #0056b3;
    text-decoration: underline;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


</style>
    
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <input type="submit" value="Login">
        </form>
        <div class="links">
        <a href="index.php">Back to home</a><br>
            <a href="forgot_password.php">Forgot Password?</a><br>
            <a href="registration.php">Don't have an account? Register here</a>
            
        </div>
    </div>
    <?php include 'footer.php';
     include 'java.php';?>

</body>
</html>