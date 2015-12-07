<?php
	

	//Här är hosten, som är ip addressen till mysql servern. Detta kan också vara localhost som är den lokala datorn.
	$host = "localhost";
	//Här är användarnamnet för att connecta till localhosts mysql server.
	$dbuser = "root";
	//Här är lösenordet.
	$dbpass = "";
	//Här är vilken databas vi ska använda.
	$databas = "forum";

	//Här sparas anslutningen i en variable.
	$conn = mysqli_connect($host,$dbuser,$dbpass,$databas);
	
	//Detta syns om $conn inte kan connecta.
	if(! $conn){
		echo "Anslutningen misslyckades";
		exit;
	}

?>