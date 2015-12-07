<meta charset="utf-8">
<?php
	

session_start();
	
require "dbconfig.php";

$rubrik = $_POST['rubrik'];
$user = $_SESSION["username"];
$content = $_POST['content'];
$now = date("Y-m-d H:i:s");

echo $now . "<br>" . $rubrik . "<br>" . $user . "<br>" . $content;

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_POST['rubrik']!="" && $_POST['content']!=""){
	mysqli_query($conn,"SELECT * FROM inlagg");
	mysqli_query($conn,"INSERT INTO inlagg (rubrik,user,content,date) 
	VALUES ('" . $rubrik . "','" . $user . "','" . $content . "','" . $now . "')");
	header ('Location: index.php');
} else {
	echo 'Please enter content and rubrik.';
}



mysqli_close($conn);
?>