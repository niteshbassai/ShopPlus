<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPlus - Create Account</title>
    <link rel="stylesheet" href="style.css"> <!-- Direct link to the CSS file -->
</head>
<body>

<!-- Include Header for Navigation -->
<?php include '../include/header.php'; ?>

<main>
    <section class="register-section">
        <h1>Create Account</h1>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" name="confirm-password" id="confirm-password" required>

            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </section>
</main>

<!-- Footer Section -->
<?php include '../include/footer.php'; ?>

</body>
</html>
