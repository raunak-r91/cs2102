<?php include'db.php';
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['roomNum'];
$arriveDate = date_create_from_format('j/m/Y', $_GET['arriveDate']);
echo $hotelname;
echo date_format($arriveDate, 'Y-m-d');

$departDate = date_create_from_format('j/m/Y', $_GET['departDate']);
echo date_format($departDate, 'Y-m-d');

	$db->query("INSERT into `Booking` (`guest_id`, `booking_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`)
                   values ('ishaans', '10105', '$hotelname', 'India', '$city', 101, date_format($arriveDate, 'Y-m-d'), date_format($departDate, 'Y-m-d'))");  

?>