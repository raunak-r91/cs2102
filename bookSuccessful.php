<?php include'db.php';
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['roomNum'];
$arriveDate = date_create_from_format('j/m/Y', $_GET['arriveDate']);
echo date_format($arriveDate, 'Y-m-d');

$departDate = date_create_from_format('j/m/Y', $_GET['departDate']);
echo date_format($departDate, 'Y-m-d');

	$db->query("INSERT into `Booking` values ('ishaans', '10101', 'Fortuna Gate', 'India', 'Mumbai', 101, '2013-04-3', '2013-04-6' )");  

?>