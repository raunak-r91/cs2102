<?php include'db.php';

session_start();
$userid = $_SESSION['username'];
$city = $_GET['city'];
$hotelname = $_GET['hotel_name'];
$roomType = $_GET['room_type'];
$number = $_GET['numGuests'];
$arriveDate = DateTime::createFromFormat('m/j/Y', $_GET['arriveDate']);
$arriveDate = $arriveDate->format('Y-m-d');

$departDate = DateTime::createFromFormat('m/j/Y', $_GET['departDate']);
$departDate = $departDate->format('Y-m-d');

$check_query = $db->query("SELECT *
FROM `Room` r
WHERE r.`hotel_name` = '$hotelname' AND r.`hotel_country` = 'India' AND r.`hotel_city` = '$city' AND r.`type` = '$roomType' AND r.`capacity` >= '$number'
AND r.`number` NOT IN (
        SELECT b.`room_number`
        FROM `Booking` b
        WHERE '$arriveDate' BETWEEN b.`arrival` AND b.`departure`
    OR '$departDate' BETWEEN b.`arrival` AND b.`departure`
    or b.`arrival` BETWEEN '$arriveDate' AND '$departDate'
    or b.`departure` BETWEEN '$arriveDate' AND '$departDate'
)");


if($check = $db->fetch_assoc($check_query)) {
    $roomnumber = intval($check['number']);
    $result = $db->query("INSERT into `Booking` (`guest_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`)
                   values ('$userid', '$hotelname', 'India', '$city', $roomnumber, '$arriveDate', '$departDate')");      
}

?>