<?php include'db.php';
    
    $choice = mysql_real_escape_string($_GET['choice']);
    //$citychoice = mysql_real_escape_string($_GET['citychoice']);
    echo '$choice';
    //echo '$citychoice';
    $hotel_query = $db->query("SELECT type FROM `Room` where hotel_city = '$choice'");
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['type']).
     '</option>';
    }    
?>