<?php
$conn = mysqli_connect("mysql-server", "root", "root");
if ($conn) {
    echo "✅ Connected to MySQL successfully!";
} else {
    echo "❌ Connection failed: " . mysqli_connect_error();
}
?>

