<?php
// create_account.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Here, you would typically handle the account creation logic
    // For this example, we will just show a success message
    $success = "Account created successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to common CSS -->
    <link rel="stylesheet" href="create_account.css"> <!-- Link to the create account specific CSS -->
</head>
<body>
    <div class="form-container">
        <h1>Create Account</h1>
        <?php if (isset($success)): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="form-button">Create Account</button>
            <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
