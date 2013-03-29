<?php include'db.php';
    
    $choice = mysql_real_escape_string($_GET['choice']);
    $citychoice = mysql_real_escape_string($_GET['citychoice']);
    $hotel_query = $db->query("SELECT type FROM `Room` where hotel_name = '$choice' and hotel_city = '$citychoice'");
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>coool
     </option>';
    }    
?>