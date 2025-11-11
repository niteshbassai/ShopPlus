<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPlus - Login</title>
    <link rel="stylesheet" href="../style.css"> <!-- Direct link to the CSS file -->
</head>
<body>

<!-- Include Header for Navigation -->
<?php include '../include/header.php'; ?>

<main>
    <section class="login-section">
        <h1>Login</h1>
        <form action="#" method="post">
            <label for="username">Username or Email:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </section>
</main>

<!-- Footer Section -->
<?php include '../include/footer.php'; ?>

</body>
</html>
