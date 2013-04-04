<?php

session_start();
/*if(sset($_COOKIE['cookname'])){
   $_SESSION['user'] = $_COOKIE['cookname'];
   exit(1);
}*/
  
// username and password sent from form 
$myusername=$_POST["myusername"]; 
$name = 'fred';
$mypassword=$_POST["mypassword"]; 

$host="localhost"; // Host name
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="CS2102"; // Database name 
$tbl_name="Guest"; // Table name 

// Connect to server and select database.
$connect = mysql_connect($host, $username, $password);
if (!$connect) 
{
     //echo 'error!';
     die(mysql_error());
}
else
{
   // echo 'Successful Connection!';
}
$db_connect = mysql_select_db($db_name, $connect);
if (!$db_connect)
{
    //echo 'Error';
    die(mysql_error());
}


// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql=sprintf("SELECT name FROM $tbl_name WHERE email='$myusername' and password='$mypassword'", mysql_real_escape_string($name));
$result=mysql_query($sql);

//Check that user has entered values for all fields
if($myusername=="" || $mypassword=="")
{
	header("Location: Login.php?errormsg=Inavalid! Please try again.");
	exit();	
}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	// Register $myusername, $mypassword and redirect to file "login_success.php"
// 	mysql_query("UPDATE profile SET loginstatus=0 WHERE email<>'$myusername'");
// 	mysql_query("UPDATE profile SET loginstatus=1 WHERE email='$myusername'");
// 	session_register("myusername");
// 	session_register("mypassword"); 
	//$_SESSION['username'] = $myusername;
	$row = mysql_fetch_assoc($result);
	$_SESSION['username'] = $row['name'];
	header("Location: index.php");
	//exit(1);
// 	setcookie("user", $_SESSION['user'], time()+36000, "/"); //Expire in 10 hours
	//header("Location:");
	//echo "Success!";
	//echo "Login successful!";
	//echo $result;
}
else
{
	//echo "Wrong Username or Password";
	header("Location: Login.php?errormsg=Invalid username or password! Please login again");
	exit();
}

?>
