<?php include'db.php';
    //echo '<option> test </option>';
    $bookingID = $_GET['id'];
    $choice = $_GET['choice'];
    
    if($bookingID == "BookingID") {
       if($choice == 'hotel_city') {
            echo '<option></option>';
        }
        
        else if($choice == 'hotel_name') {
            echo '<option></option>';
        }
        
        else if($choice == 'number') {
            echo '<option></option>';
        } 
    }
    
    else {
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
            
            else if($choice == 'arrival') {
                $arriveDate = DateTime::createFromFormat('Y-m-d', $hotel[$choice]);
                $arriveDate = $arriveDate->format('m/j/Y');
                echo $arriveDate;
            }
            
            else if($choice == 'departure') {
                $departDate = DateTime::createFromFormat('Y-m-d', $hotel[$choice]);
                $departDate = $departDate->format('m/j/Y');
                echo $hotel[$departDate];
                echo $departDate;
            }
            
            else if($choice == 'type') {
                $room_query = $db->query("SELECT r.type as roomtype FROM `Room` r, `Booking` b where booking_id = '$bookingID' and r.number = b.room_number and r.hotel_name = b.hotel_name and r.hotel_country = b.hotel_country and r.hotel_city = b.hotel_city");
                echo '<option>'
                .stripslashes($room_query['roomtype']).
                '</option>';
            }
            
            else if($choice == 'guests') {
                echo '<option>'
                .stripslashes($hotel[$choice]).
                '</option>';
            }
        }
    }

?>