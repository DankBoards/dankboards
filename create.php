
<?php
session_start();

if (isset($_SESSION["username"])){
	echo '<form action="sufcreate.php" method="post">
		<input name="rubrik" placeholder="Rubrik" type="text"><br>
		<textarea name="content" placeholder="Innehåll" type="text"></textarea><br>
		<input type="submit" placeholder="Skicka" value="Skicka!">
	</form>';
} else {
	echo '<h1>Please log in to create a new thread.</h1>';
}

?>