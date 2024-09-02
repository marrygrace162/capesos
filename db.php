<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_registration";
$conn = mysqli_connect ( $hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die ("buang d na mao");
}
echo "kasud nag buang";
?>