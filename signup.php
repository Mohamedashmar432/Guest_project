<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'src/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $policy = $_POST["policy"];

    if (!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($dob) && !empty($policy)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $policy = 1;

        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, dob, policy) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $hashed_password, $phone, $dob, $policy);

        if ($stmt->execute()) {
            $_SESSION['user'] = $name;
            header("Location: login.php");
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
            <form method="POST" action="signup.php">
            
            <div class="input-group">
                <input type="text" placeholder="Full Name" name="name">
            </div>
            
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
            </div>
            
            <div class="input-group password-field">
                <input type="password" placeholder="Password" name="password">
                <button class="password-toggle" id="passwordToggle">&#128065;</button>
            </div>
            
            <div class="input-group password-field">
                <input type="password" placeholder="Confirm Password">
                <button class="password-toggle" id="confirmToggle">&#128065;</button>
            </div>
            
            <div class="input-group">
                <input type="tel" placeholder="Phone Number (Optional)" name="phone">
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
                <input type="checkbox" id="privacyCheck" name="policy">
                <label for="privacyCheck">I understand the Privacy Statement</label>
            </div>
            <button class="register-button" type="submit">Register</button>

        </div>
        </form>

        
        <div class="bottom-links">
            <a href="login.php">Already have an account? Sign in</a>
        </div>

        <div class="pagination">
            <div class="page-indicator active"></div>
            <div class="page-indicator"></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>