<?php include'db.php';
    echo "test";
    $bookingID = mysql_real_escape_string($_GET['id']);
    $choice = mysql_real_escape_string($_GET['choice']);
    
    
    $facility = mysql_real_escape_string($_GET['facility']);

    $query = "SELECT name FROM `Hotel` where city = '$choice'";
    
    $hotel_query = $db->query("SELECT * FROM `Booking` where booking_id = '$bookingID');
        
    
    while($hotel = $db->fetch_assoc($hotel_query))
    {
        if($choice == 'hotel_city') {
            echo '<option>'
            .stripslashes($hotel[$choice]).
            '</option>';
        }
        
        else if($choice == 'hotel_name') {
            echo '<option>'
            .stripslashes($hotel[$choice]).
            '</option>';
        }
        
        if($choice == 'type') {
            echo '<option>'
            .stripslashes($hotel[$choice]).
            '</option>';
        }
        
     
    }    
?>