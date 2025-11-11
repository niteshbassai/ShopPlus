<?php
// Database configuration
$host = 'localhost';  // MySQL host
$dbname = 'shop_db';  // The name of your database
$username = 'root';   // MySQL username (default for XAMPP/WAMP)
$password = '';       // MySQL password (default is empty for XAMPP/WAMP)

// Create a PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
