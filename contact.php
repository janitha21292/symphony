<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $message = sanitize_input($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $email, $message])) {
            echo "<script>alert('Thank you for your message! We will get back to you soon.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Failed to send message. Please try again.'); window.location.href='index.php#contact';</script>";
        }
    } else {
        echo "<script>alert('All fields are required.'); window.location.href='index.php#contact';</script>";
    }
} else {
    redirect('index.php');
}
?>
