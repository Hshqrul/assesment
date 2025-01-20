<?php
$clientId = getenv('CLIENT_ID');
$clientSecret = getenv('CLIENT_SECRET');

if ($clientId && $clientSecret) {
    echo "Client ID: " . $clientId . "<br>";
    echo "Client Secret: " . $clientSecret . "<br>";
} else {
    echo "Client ID or Client Secret not found.";
}
?>
