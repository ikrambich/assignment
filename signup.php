<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO userlogin (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}
?>
