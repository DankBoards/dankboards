<?php
	include('dbconfig.php');
	
	$profileid = $_GET["profile"];
		
	$sql = "SELECT * FROM users WHERE id='". $profileid ."'";
	if(mysqli_query($conn, $sql)){
		$sqlresult = mysqli_query($conn,$sql);
		if(mysqli_num_rows($sqlresult)>0) {
			$rad = mysqli_fetch_assoc($sqlresult);
			$avatar = $rad["avatar"];
			$username = $rad['username'];
			$profileid = $rad['id'];
			
			echo '<img src="'.$avatar.'" /><br>';
			echo '<p>'.$username.'</p>';
			echo '<p>'.$profileid.'</p>';
		}
	}
	
?>