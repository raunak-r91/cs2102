<?php include'db.php';
    
    $choice = mysql_real_escape_string($_GET['choice']);
         
    $facility = mysql_real_escape_string($_GET['facility']);
    echo '<option>'.$facility.'</option>';
    $arr1 = str_split($facility);

    $query = "SELECT name FROM `Hotel` where city = '$choice'";
    
    if (strpos($facility,'0') !== false) {
        $query = $query."and swimming_pool = 1";
    }
    if (strpos($facility,'1') !== false) {
        $query = $query."and gym = 1";
    }
    if (strpos($facility,'2') !== false) {
        $query = $query."and restaurant = 1";
    }
    if (strpos($facility,'3') !== false) {
        $query = $query."and wifi = 1";
    }
    
       $hotel_query = $db->query($query);
        
    
    while($hotel = $db->fetch_assoc($hotel_query))
    {
     echo '<option>'
     .stripslashes($hotel['name']).
     '</option>';
    }    
?>