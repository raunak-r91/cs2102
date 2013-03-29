<?php include'db.php';
    
    $choice = mysql_real_escape_string($_GET['choice']);

    $hotel_query = $db->query("SELECT name FROM `Hotel` where city =" + $choice);
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['name']).
     '</option>';
    }    
?>