<html>
     <head>
     </head>
     <body>
          <div id="content">
	
<?php include'db.php';
    
	 echo '<ul id="user_list">';
	 $user_query = $db->query("SELECT name FROM Guest");
	 while($user = $db->fetch_assoc($user_query))
	 {
	      echo '<li>
      		    <h3>'.stripslashes($user['name']).'</h3>
	           </li>';
	 }    
?>
	    
	  </div>
     </body>
</html>