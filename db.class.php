<?php

class database {

	var $SQL;
	var $lastquery;
	var $count=0;

	function database($database, $server='localhost', $username='root', $password=''){
		$this->SQL = mysql_connect($server, $username, $password) or die('Error: '.mysql_error());
		mysql_select_db($database, $this->SQL);
	}

	function query($query, $return='true'){
		$this->lastquery = $query;
		$this->count++;
		$result = mysql_query($query, $this->SQL) or die('Error with Query('.$query.'): '.mysql_error());
		if ($return)
			return $result;
	}

	function num_rows(&$result){
		return @mysql_num_rows($result);
	}

	function fetch_array(&$result){
		return @mysql_fetch_array($result);
	}

	function fetch_assoc(&$result){
		return @mysql_fetch_assoc($result);
	}

	function insert_id(){
		return @mysql_insert_id();
	}

	function disconnect(){
		mysql_close($this->SQL);
	}

	function escape(&$string){
		return mysql_real_escape_string($string);
	}

	function result($query, $column, $id=0){
		return mysql_result($query, $id, $column);
	}
}
?>