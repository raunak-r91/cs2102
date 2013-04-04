<?php include'db.php';
    
    $choice = mysql_real_escape_string($_GET['choice']);
    $facility = mysql_real_escape_string($_GET['facility']);
    
    if ($facility == 0) {
        $hotel_query = $db->query("SELECT name FROM `Hotel` where city = '$choice' and swimming_pool = 1");
    }
    else {
        $hotel_query = $db->query("SELECT name FROM `Hotel` where city = '$choice'");
        
    }
    
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['name']).
     '</option>';
    }    
?>