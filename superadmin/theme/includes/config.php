<?php
$servername = "ashtavinayak.db.11153069.583.hostedresource.net";
$username = "ashtavinayak";
$password = "xJjzafh5in@314";
$dbname = "ashtavinayak";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>