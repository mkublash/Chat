<?php
session_start();
include "../conn1.php";

$text = $_SESSION['name'] . ": " . $_POST['text'];

$sql = "SELECT text FROM chat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $full_text = $row['text'];

    }
} 

$chat = $full_text . '\n' . $text;



$sql2 = "DELETE FROM chat WHERE 1";

if($conn->query($sql2) === TRUE) {
	$sql = "INSERT INTO chat (text)
		VALUES ('$chat')";
	if($conn->query($sql) === TRUE){
    	header('Location: home.php');
	}
}
?>