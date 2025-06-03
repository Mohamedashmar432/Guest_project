<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (!empty($username) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['user'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Signup failed: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TrackVest</title>
</head>
<body> 
    <div class="container">
        <div class="header">
            <button class="theme-toggle" id="themeToggle">&#9788;</button>
        </div>

        <div class="logo-container">
            <div class="logo">
                <img id="tv" src="Assets/Images/WhatsApp Image 2025-05-16 at 19.07.48_c81669d4.jpg" alt="TrackVest Logo">
            </div>
        </div>

        <h1>Create your account</h1>

        <div class="form-container">
            <div class="form-title">Personal Information</div>
            
            <div class="input-group">
                <input type="text" placeholder="Full Name">
            </div>
            
            <div class="input-group">
                <input type="email" placeholder="Email">
            </div>
            
            <div class="input-group password-field">
                <input type="password" placeholder="Password">
                <button class="password-toggle" id="passwordToggle">&#128065;</button>
            </div>
            
            <div class="input-group password-field">
                <input type="password" placeholder="Confirm Password">
                <button class="password-toggle" id="confirmToggle">&#128065;</button>
            </div>
            
            <div class="input-group">
                <input type="tel" placeholder="Phone Number (Optional)">
            </div>

            <div class="input-group">
                <input type="date" id="dob" name="dob" required>
            </div>
            
            <div class="input-group">
                <textarea placeholder="Message (Optional)"></textarea>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="termsCheck">
                <label for="termsCheck">I agree to Terms and Conditions</label>
            </div>
            
            <div class="checkbox-group">
                <input type="checkbox" id="privacyCheck">
                <label for="privacyCheck">I understand the Privacy Statement</label>
            </div>
        </div>

        <a href="login.html" style="text-decoration: none;"><button class="register-button">Register</button></a>

        <div class="bottom-links">
            <a href="login.html">Already have an account? Sign in</a>
        </div>

        <div class="pagination">
            <div class="page-indicator active"></div>
            <div class="page-indicator"></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>