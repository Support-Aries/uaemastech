<?php
include('../dbcon.php');
ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

$id = $_POST['id'];
$table = $_POST['table'];
$addeddate = date('Y-m-d');
$sql_checkin = "UPDATE `$table` SET `qr_status` = '2', `checkin_date`='$addeddate'  where `id` ='$id' ";
$query = mysqli_query($con, $sql_checkin);

echo "1";
?>