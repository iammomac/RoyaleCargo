<?php
$conn = mysqli_connect("localhost", "root", "", "royalcargo");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>