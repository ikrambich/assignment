<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM userlogin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
} else {
    echo "invalid";
}
?>
