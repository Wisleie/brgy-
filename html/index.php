<?php
session_start();
require 'database.php'; // Separate file for database connection

$error_message = ""; // Variable to store the error message

// Get user inputs from POST request
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Query database to find the user
$query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$query->bindParam(':email', $email);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user && hash('sha256', $password) === $user['password']) {
    // Password is correct, start session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];

    // Redirect to the dashboard
    header("Location: dash.php");
    exit();
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set the error message if login fails
    $error_message = "Invalid email or password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Admin Login</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <main-one>
        <h1>WELCOME BARANGAY ADMIN!</h1>
        <p>We're excited to support you in serving our<br>
        community online. Let's make positive<br>
        impact together!</p>
        <br><br>
        
        <form action="index.php" method="POST">
    <div class="input">
    <p  class="mail">Email</p>  
        <input type="email" name="email" placeholder="Example@gmail.com" required>
        
    </div>
    <div style="padding-top: 3%;" class="input">
    <p class="pass">Password</p>
        <input style="margin-bottom: 3%;" type="password" name="password" placeholder="At least 8 characters" required>
                    
    </div>
    
    <a href="forgot_password.php" id="forgot">Forgot Password?</a>
    <br>
    <button type="submit" class="btn">Sign in</button>

    <!-- Error message below the button -->
    <?php if ($error_message): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
</form>

    </main-one>

    <div class="bg">
        <div class="circle">
            <img id="st" src="../img/logs.jpg" alt="Barangay Logo">  
        </div>
    </div>
</body>
</html>
