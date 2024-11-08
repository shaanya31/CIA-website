<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    // Simple password confirmation check
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
    } else {
        // In a real application, you'd store the user in the database here.
        echo "Registration successful!<br>";
        echo "Username: " . $username;
    }
} else {
    echo "Invalid request method.";
}
?>
