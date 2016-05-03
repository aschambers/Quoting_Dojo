<?php
	session_start();
	include_once('connection.php');
	
	if($_POST['name'] == NULL || $_POST['quote'] == NULL)
	{
		$_SESSION['message'] = "Please fill out all information in fields";
		header("Location: quotingdojoindex.php");
		exit(); // exits the page if either field is left empty.
	}

	else //add to our database.
	{
		$query = "INSERT INTO quotes (name, text, created_at) VALUES('{$_POST['name']}', '{$_POST['quote']}', NOW())";
		run_mysql_query($query);
		header("Location: main.php");
		exit();
	}
?>
