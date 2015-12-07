<meta charset="utf-8">
<?php
	
require "dbconfig.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$now = date("Y-m-d H:i:s");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM users";

mysqli_query($conn,$sql);

if(mysqli_query($conn, $sql)){
	
	//Här sparas resultatet av queryn så vi kan använda det senare.
	$sqlresult = mysqli_query($conn,$sql);
	
	//Här kollas det om det finns fler än 0 rader i $sqlresult.
	if(mysqli_num_rows($sqlresult)>0) {
		
		$sql = "SELECT * FROM users WHERE username='". $username ."'";
		$sqlresult = mysqli_query($conn,$sql);
		$rad = mysqli_fetch_assoc($sqlresult);
		$usernamedb = $rad["username"];
		
		if ($username == $usernamedb){
			echo 'Username taken.';
		} else {
			$sql="SELECT * FROM users";
			$sqlresult = mysqli_query($conn,$sql);
			$rad = mysqli_fetch_assoc($sqlresult);
			mysqli_query($conn,"INSERT INTO users (username,password,regdate) 
			VALUES ('" . $username . "','" . $password . "','" . $now . "')");
			echo 'skapat!';		
			header('Location: index.php?action=home');
			mysqli_close($conn);
		}
	}
}
		


?>