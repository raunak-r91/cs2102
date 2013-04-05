<?php include'db.php';
    //echo '<option> test </option>';
    $bookingID = $_GET['id'];
    $choice = $_GET['choice'];
    
    //echo '<option>'.$bookingID .'</option>';
    $hotel_query = $db->query("SELECT * FROM `Booking` where booking_id = '$bookingID'");
    
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
    }

?>