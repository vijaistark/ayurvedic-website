<?php
// login.php
session_start(); // Start the session to manage login state

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dummy credentials for demonstration purposes
    $username = 'user';
    $password = 'password123';

    // Get the form data
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Check if the input matches the dummy credentials
    if ($inputUsername === $username && $inputPassword === $password) {
        $_SESSION['username'] = $username; // Set session variable
        header('Location: welcome.php'); // Redirect to a welcome page
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css"> <!-- Link to external CSS -->
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>
</body>
</html>
