<?php
$servername = $_ENV['DB_HOST'];
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$db = getenv('DB_NAME');

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . " with host " . $servername);
    }
    echo "Connected successfully";
} catch (\Throwable $th) {
    die($th);
}
