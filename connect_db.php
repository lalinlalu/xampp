<?php
$servername = "localhost";
$username = "yotsada";
$password = "Miki0938347455";
$db = "db";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed (โค้ดหลอนละไอ้น้อง): " . mysqli_connect_error());
}
echo "Connected successfully";
?>