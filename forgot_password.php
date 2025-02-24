<?php
// Include Composer's autoloader
include 'host.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection


// Function to send email
function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);
    try {
        // Email server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your email provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Replace with your email
        $mail->Password = 'your_email_password'; // Replace with your email password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'Your Name'); // Replace with your email
        $mail->addAddress($to);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_code'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM zaki WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate and save the verification code
        $verification_code = rand(100000, 999999);
        $stmt = $conn->prepare("UPDATE zaki SET verification_code = ? WHERE email = ?");
        $stmt->bind_param("is", $verification_code, $email);
        $stmt->execute();

        // Send verification code to the user's email
        $subject = "Password Reset Verification Code";
        $message = "Your password reset verification code is: <strong>$verification_code</strong>";

        if (sendEmail($email, $subject, $message)) {
            echo "<script>alert('A verification code has been sent to your email.');</script>";
        } else {
            echo "<script>alert('Failed to send the email. Check your email server settings.');</script>";
        }
    } else {
        echo "<script>alert('This email is not registered.');</script>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $verification_code = $_POST['verification_code'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    // Validate the verification code
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND verification_code = ?");
    $stmt->bind_param("si", $email, $verification_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the password and clear the verification code
        $stmt = $conn->prepare("UPDATE users SET password = ?, verification_code = NULL WHERE email = ?");
        $stmt->bind_param("ss", $new_password, $email);

        if ($stmt->execute()) {
            echo "<script>alert('Password has been successfully reset.');</script>";
        } else {
            echo "<script>alert('Failed to reset password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid verification code.');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="email"], input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>

        <!-- Form to send verification code -->
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" name="send_code" value="Send Verification Code">
        </form>

        <hr>

        <!-- Form to reset password -->
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="verification_code">Verification Code:</label>
            <input type="text" id="verification_code" name="verification_code" required>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <input type="submit" name="reset_password" value="Reset Password">
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="email"], input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .verification-form {
            display: none;
        }

        .verification-form.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>

        <!-- Form to send verification code -->
        <form action="" method="post" id="emailForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" name="send_code" value="Send Verification Code">
        </form>

        <!-- Form to reset password after receiving verification code -->
        <form action="" method="post" class="verification-form" id="resetForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required readonly>
            <label for="verification_code">Verification Code:</label>
            <input type="text" id="verification_code" name="verification_code" required>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <input type="submit" name="reset_password" value="Reset Password">
        </form>
    </div>

    <script>
        // Show the verification form after sending the verification code
        <?php if (isset($_POST['send_code']) && isset($_POST['email'])): ?>
            document.getElementById('emailForm').style.display = 'none';
            document.getElementById('resetForm').style.display = 'block';
        <?php endif; ?>
    </script>
</body>
</html>
