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
			$profilecover = $rad['profilecover'];
			
			echo '
			<div class="profileWrapper">
				<div class="profileTop" style="background-image: url(\''.$profilecover.'\');" >
					<h1 class="profileName">'.$username.'</h1>
					<span class="profileImg"><img src="'.$avatar.'" /></span>
				</div>
				<div class="profile">
					<div class="profileLeft">
						<span class="profileBit"></span>
						<span class="profileBit"></span>
						<span class="profileBit"><p>Användargrupp: '.$usergroup.'</p></span>
						<span class="profileBit"><p>Reg: '.$regdate.'</p></span>
						<span class="profileBit"><p>Email: '.$email.'</p></span>
					</div>
					<div class="profileRight">
						<div class="profileBottom"></div>
					</div>
				</div>
			</div>';
			
			
			/*echo '<br>';
			echo '';
			echo '<p>Profilid: '.$profileid.'</p>';
			echo '';
			echo '';
			echo '';
			echo '<p>Född: '.$born.'</p>';
			echo '<p>Kön: '.$gender.'</p>';
			echo '<p>SteamID: '.$steamid.'</p>';
			echo '<p>Bio: '.$bio.'</p>';
			echo '<p>Likes: '.$likes.'</p>';
			echo '<p>Signatur: '.$signatur.'</p>';*/
			
		}
	}
?>