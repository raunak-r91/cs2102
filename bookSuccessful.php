<?php
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$number = $_GET['roomNum'];
$arriveDate = $_GET['arriveDate'];
$departDate = $_GET['departDate'];

$date = date_create_from_format('j/M/   Y', $arriveDate);
echo date_format($date, 'Y-m-d');
?>