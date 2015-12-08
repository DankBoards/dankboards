<?php
	
	require "dbconfig.php";
	
	session_start();
	
	?>	
	<div id="posts">
	<?php
	
	$sql = "SELECT * FROM inlagg";
	
	//Här körs en query med hjälp av $sql samt $conn som ska har sparat mysql kontot samt hosten.
	if(mysqli_query($conn, $sql)){
	
		//Här sparas resultatet av queryn så vi kan använda det senare.
		$sqlresult = mysqli_query($conn,$sql);
		
		//Här kollas det om det finns fler än 0 rader i $sqlresult.
		if(mysqli_num_rows($sqlresult)>0) {
			$sql = "SELECT * FROM inlagg ORDER BY id DESC LIMIT 3";
			$sqlresult = mysqli_query($conn,$sql);
			
			while($rad = mysqli_fetch_assoc($sqlresult)){
				
				$rubrik = $rad["rubrik"];
				if(strlen($rubrik) >= 30){
					$rubrik = substr($rubrik, 0, 30) . "...";
				}
				
				$userid = $rad["userid"];
				$content = $rad["content"];
				$date = $rad["date"];
				$id = $rad["id"];
				$rad2 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id='" . $userid . "'"));
				$user = $rad2['username'];
				$avatar = $rad2['avatar'];

				echo '<div class="post"><a href="?post=' . $id . '"><h2>'. $rubrik .'</h2></a><div class="content"><div class="clearfix"><span class="användare">Av användare: '. $user .'</span></div><p class="contentPost">'. $content .'</p><span class="datum">Skapades: '. $date .'</span></div></div><br>';
			
			}
			
		} else {
		
			//Detta syns ifall det inte finns någon rad i $sqlresult.
			echo 'Det gick inte';
			
		}
		
	} else {
		
		//Detta syns ifall queryn inte gick.
		echo 'Det gick inte';
		
	}
	
	echo '</div>';
	
	//Stäng anslutningen.
	mysqli_close($conn);
	
	if (isset($_SESSION["username"])){
	echo '<br><br><a href="index.php?action=create">Skapa nytt inlägg!</a>';
	} else {
	}
?>