<?php include'db.php';

session_start();
$userid = $_SESSION['username'];
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['roomNum'];
$arriveDate = DateTime::createFromFormat('m/j/Y', $_GET['arriveDate']);
echo $hotelname;
$arriveDate = $arriveDate->format('Y-m-d');

$departDate = DateTime::createFromFormat('m/j/Y', $_GET['departDate']);
$departDate = $departDate->format('Y-m-d');

	$db->query("INSERT into `Booking` (`guest_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`)
                   values ('userid', '$hotelname', 'India', '$city', 105, '$arriveDate', '$departDate')");  

?>