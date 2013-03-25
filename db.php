<?php ob_start();
	session_start();

	include $_SERVER['DOCUMENT_ROOT'].'/db.class.php';
	$db = new database('CS2102', 'localhost', 'root', 'root'); // new instance of database class
?>