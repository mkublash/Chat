<?php
session_start();
include "../conn.php";

$login = $_GET['login'];
$pass = $_GET['password'];

$sql = "SELECT login, password FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['login'] == $login && $row['password'] == $pass)
        {
        	$_SESSION["name"] = $login;
        	header('Location: home.php');
        }
        else
        {
        	echo "Bad username or password!";
        	header( "refresh:2;url=index.html" );
        }
    }
} 

?>