<?php include'db.php';
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['roomNum'];
$arriveDate = DateTime::createFromFormat('j/m/Y', $_GET['arriveDate']);
echo $hotelname;
$arriveDate = $arriveDate->format('Y-m-d');

$departDate = DateTime::createFromFormat('j/m/Y', $_GET['departDate']);
$departDate = $departDate->format('Y-m-d');

	$db->query("INSERT into `Booking` (`guest_id`, `booking_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`)
                   values ('ishaans', '10100', '$hotelname', 'India', '$city', 101, '$arriveDate', '$departDate'");  

?>