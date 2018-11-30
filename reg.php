<?php

include "../conn.php";

$username = $_GET['login'];
$password = $_GET['password'];
$number = $_GET['number'];

$sql = "INSERT INTO Users (login, password, mobnum)
VALUES ('$username', '$password', '$number')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>