<?php include'db.php';

    $choice = $_GET['choice'];
     echo '<option>'
     .$choice.
     '</option>';
    $citychoice = mysql_real_escape_string($_GET['citychoice']);
    $hotel_query = $db->query("SELECT type FROM `Room` where hotel_name = '$choice' and hotel_city = '$citychoice'");
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['type']).
     '</option>';
    }    
?>