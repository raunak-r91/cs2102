<?php include'db.php';

    $choice = mysql_real_escape_string($_GET['choice']);
    $citychoice = mysql_real_escape_string($_GET['citychoice']);
    
    if ($choice == '') {
       $hotel_query = $db->query("SELECT name FROM `Hotel` where city = '$citychoice'");
       $hotel = $db->fetch_assoc($hotel_query);
        $choice = $hotel['name'];
    }
    
         echo '<option>'
     .$choice.
     '</option>';


    $hotel_query = $db->query("SELECT distinct type FROM `Room` where hotel_name = '$choice' and hotel_city = '$citychoice'");
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['type']).
     '</option>';
    }    
?>