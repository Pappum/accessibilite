<?php  
	$id = $_POST["id"];
	$champ = $_POST["champ"];
	$contenu = $_POST["contenu"];
	$BDD = "test";
	$table = "navigateur";
	
	$link = mysql_connect("localhost", "root", "root") or die(mysql_error()); 
	mysql_select_db($BDD); 
	mysql_query("SET NAMES 'utf8'");
	
	$sql = "
		UPDATE navigateur
		SET $champ = '$contenu'
		WHERE annee = $id
	"; 
	mysql_query($sql) or die(mysql_error());
	mysql_close($link);
?> 