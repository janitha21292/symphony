<?php
require_once '../includes/db.php';
require_once '../includes/functions.php';

// If user is already logged in, redirect to dashboard
if (is_logged_in()) {
    redirect('../dashboard.php');
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            redirect('../dashboard.php');
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Symphony</title>
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
            <a href="register.php">Register</a>
        </div>
    </nav>
    
    <div class="auth-container">
        <h2>Welcome Back</h2>
        <?php if ($error) echo display_error($error); ?>
        <form method="POST" action="login.php">
            <div class="form-group" style="text-align: left;">
                <label>Email Address</label>
                <input type="email" name="email" class="form-input" required>
            </div>
            <div class="form-group" style="text-align: left;">
                <label>Password</label>
                <input type="password" name="password" class="form-input" required>
            </div>
            <button type="submit" class="submit-btn" style="width: 100%;">Login</button>
        </form>
        <p style="margin-top: 1rem; color: var(--text-muted);">Don't have an account? <a href="register.php" style="color: var(--text-gold);">Register here</a></p>
    </div>
</body>
</html>
