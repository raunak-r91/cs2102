<?php include'db.php';

session_start();
$userid = $_SESSION['username'];
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['numRooms'];
$arriveDate = DateTime::createFromFormat('m/j/Y', $_GET['arriveDate']);
$arriveDate = $arriveDate->format('Y-m-d');

$departDate = DateTime::createFromFormat('m/j/Y', $_GET['departDate']);
$departDate = $departDate->format('Y-m-d');

echo $userid;
echo $hotelname;
echo $city;
echo $arriveDate;
echo $departDate;

$result =	$db->query("INSERT into `Booking` (`guest_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`)
                   values ('$userid', '$hotelname', 'India', '$city', 105, '$arriveDate', '$departDate')");  
echo $result;
?>