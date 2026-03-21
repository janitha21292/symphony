<?php
session_start();

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Display error message function
function display_error($message) {
    return "<div class='error-msg' style='color: red; margin-bottom: 1rem;'>$message</div>";
}

// Display success message function
function display_success($message) {
    return "<div class='success-msg' style='color: green; margin-bottom: 1rem;'>$message</div>";
}
?>
