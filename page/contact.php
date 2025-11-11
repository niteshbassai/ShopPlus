<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPlus - Contact Us</title>
    <link rel="stylesheet" href="style.css"> <!-- Direct link to the CSS file -->
</head>
<body>

<!-- Include Header for Navigation -->
<?php include '../include/header.php'; ?>

<main>
    <h2>Contact Us</h2>
    <p>If you have any questions, concerns, or feedback, feel free to reach out to us using the form below:</p>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Submit</button>
    </form>
</main>

<!-- Footer Section -->
<?php include '../include/footer.php'; ?>

</body>
</html>
