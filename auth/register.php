<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

// If user is already logged in, redirect to dashboard
if (is_logged_in()) {
    redirect('../dashboard.php');
}

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize_input($_POST['username']);
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } else {
        // Check if username or email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            $error = "Username or Email already exists.";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            if ($stmt->execute([$username, $email, $hashed_password])) {
                $success = "Registration successful. You can now <a href='login.php' style='color: var(--text-gold);'>Login</a>.";
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Symphony</title>
    <link rel="stylesheet" href="../css/music_instruments.css">
    <style>
        .auth-container { max-width: 400px; margin: 100px auto; padding: 2rem; background: var(--bg-deep); border-radius: 8px; border: 1px solid var(--border-color); text-align: center; }
        .auth-container h2 { color: var(--text-gold); margin-bottom: 1.5rem; }
    </style>
</head>
<body>
    <nav>
        <div class="logo">SYMPHONY</div>
        <div class="nav-links">
            <a href="../index.php">Home</a>
            <a href="login.php">Login</a>
        </div>
    </nav>
    
    <div class="auth-container">
        <h2>Create an Account</h2>
        <?php 
            if ($error) echo display_error($error); 
            if ($success) echo display_success($success);
        ?>
        <form method="POST" action="register.php">
            <div class="form-group" style="text-align: left;">
                <label>Username</label>
                <input type="text" name="username" class="form-input" required>
            </div>
            <div class="form-group" style="text-align: left;">
                <label>Email Address</label>
                <input type="email" name="email" class="form-input" required>
            </div>
            <div class="form-group" style="text-align: left;">
                <label>Password</label>
                <input type="password" name="password" class="form-input" required>
            </div>
            <button type="submit" class="submit-btn" style="width: 100%;">Register</button>
        </form>
        <p style="margin-top: 1rem; color: var(--text-muted);">Already have an account? <a href="login.php" style="color: var(--text-gold);">Login here</a></p>
    </div>
</body>
</html>
