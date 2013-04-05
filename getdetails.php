<?php include'db.php';
    $bookingID = $_GET['id'];
    $choice = $_GET['choice'];
    echo '<option>'.$bookingID. '</option>';
    
    //if($bookingID == "BookingID") {
    //   if($choice == 'hotel_city') {
    //        echo '<option></option>';
    //    }
    //    
    //    else if($choice == 'hotel_name') {
    //        echo '<option></option>';
    //    }
    //    
    //    else if($choice == 'number') {
    //        echo '<option></option>';
    //    } 
    //}
    //
    //else {
    //    //echo '<option>'.$bookingID .'</option>';
    //    $hotel_query = $db->query("SELECT * FROM `Booking` where booking_id = '$bookingID'");
    //
    //    while($hotel = $db->fetch_assoc($hotel_query))
    //    {
    //        if($choice == 'hotel_city') {
    //            echo '<option>'
    //            .stripslashes($hotel[$choice]).
    //            '</option>';
    //        }
    //        
    //        else if($choice == 'hotel_name') {
    //            echo '<option>'
    //            .stripslashes($hotel[$choice]).
    //            '</option>';
    //        }
    //        else if ($choice == 'dates') {
    //            $arriveDate = DateTime::createFromFormat('Y-m-d', $hotel['arrival']);
    //            $arriveDate = $arriveDate->format('j/m/Y');
    //            $departDate = DateTime::createFromFormat('Y-m-d', $hotel['departure']);
    //            $departDate = $departDate->format('j/m/Y');
    //            echo '<strong style="margin-left:20px"> Current Booking Dates </strong><input type="text" disabled class="input-medium" style="margin-left:35px" value="'.$arriveDate.'"></input> to <input type="text" disabled class="input-medium" value="'.$departDate .'"></input>';
    //        }
    //        
    //        else if($choice == 'type') {
    //            $room_query = $db->query("SELECT r.type as roomtype FROM `Room` r, `Booking` b where booking_id = '$bookingID' and r.number = b.room_number and r.hotel_name = b.hotel_name and r.hotel_country = b.hotel_country and r.hotel_city = b.hotel_city");
    //            $room = $db->fetch_assoc($room_query);
    //            echo '<strong style="margin-left:20px"> Current Type Of Room </strong><input type="text" disabled class="input-medium" style="margin-left:40px" value="'.stripslashes($room['roomtype']).'"></input>';
    //           
    //        }
    //        
    //        else if($choice == 'guests') {
    //            echo '<option>'
    //            .stripslashes($hotel[$choice]).
    //            '</option>';
    //        }
    //    }
    //}

?>