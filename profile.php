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
			$usergroup = $rad['usergroup'];
			$regdate = $rad['regdate'];
			if ($rad['email']!=""){
				$email = $rad['email'];
			} else {
				$email = "No set email.";
			}
			$born = $rad['born'];
			$gender = $rad['gender'];
			$steamid = $rad['steamid'];
			$bio = $rad['bio'];
			$likes = $rad['likes'];
			$signatur = $rad['signatur'];
			
			echo '<img src="'.$avatar.'" /><br>';
			echo '<p>Användarnamn: '.$username.'</p>';
			echo '<p>Profilid: '.$profileid.'</p>';
			echo '<p>Användargrupp: '.$usergroup.'</p>';
			echo '<p>Registreringsdatum: '.$regdate.'</p>';
			echo '<p>Email: '.$email.'</p>';
			echo '<p>Född: '.$born.'</p>';
			echo '<p>Kön: '.$gender.'</p>';
			echo '<p>SteamID: '.$steamid.'</p>';
			echo '<p>Bio: '.$bio.'</p>';
			echo '<p>Likes: '.$likes.'</p>';
			echo '<p>Signatur: '.$signatur.'</p>';
			
		}
	}
?>