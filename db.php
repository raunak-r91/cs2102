<?php ob_start();
	session_start();

	include $_SERVER['DOCUMENT_ROOT'].'/db.class.php';
	$db = new database('CS2102', '54.251.249.158', 'root', 'root'); // new instance of database class
?>