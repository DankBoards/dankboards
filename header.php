	<header>
		<div id="logo">
			<a href="index.php?action=home"><h1>Hemsida.</h1></a>
		</div>
		<div id="userinfo">
		
			<?php
			session_start();
			
			if (isset($_SESSION["id"])){
				echo 'Du är inloggad som ' . $_SESSION["username"] . ' <a href="logout.php">Logga ut?</a><br>';
			} else {
				echo '<a href="index.php?action=login">Logga in</a>/<a href="index.php?action=register">Register</a><br/>';
			}
			?>
		
		</div>
		<span class="clearfix"/>
	</header>