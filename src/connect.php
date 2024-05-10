<?php
// Read the contents of the secrets file
$db_secrets_path = '/run/secrets/db_secrets';
$db_secrets = file_get_contents($db_secrets_path);

// Parse the contents into an array of key-value pairs
$lines = explode("\n", $db_secrets);
$secrets = [];
foreach ($lines as $line) {
    $parts = explode('=', $line, 2);
    if (count($parts) === 2) {
        $key = trim($parts[0]);
        $value = trim($parts[1]);
        $secrets[$key] = $value;
    }
}

// Access the secrets as needed
$db_host = $secrets['DB_HOST'];
$db_username = $secrets['DB_USERNAME'];
$db_password = $secrets['DB_PASSWORD'];
$db_name = $secrets['DB_NAME'];
$db_port = $secrets['DB_PORT'];

// Check if all secrets are present
if (empty($db_host) || empty($db_username) || empty($db_password) || empty($db_name)) {
    die("Error: One or more secrets are missing.");
}

// Use the secrets to establish a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
