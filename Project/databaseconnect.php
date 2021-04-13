<?php
$servername = "localhost";
$database = "u459804317_EncryptionDB";
$username = "u459804317_Rachel";
$password = "Password1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>