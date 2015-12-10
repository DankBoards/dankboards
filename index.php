<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css">
	</head>
	<body>
		<main>
			<?php
				
				include('header.php');
				
				error_reporting(0);
				if(isset($_GET['action']) && $_GET['action']==home){
					include('home.php');
				} else if ($_GET['action']==login){
					include('login.php');
				} else if ($_GET['action']==register){
					include('register.php');
				} else if ($_GET['action']==create){
					include('create.php');
				} else if ($_GET['post']!=""){
					include('post.php');
				} else if ($_GET['profile']!=""){
					include('profile.php');
				} else {
					include('home.php');
				}
				
			?>
		</main>
	</body>
</html>