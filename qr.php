<?php
session_start();
require __DIR__ . "/vendor/autoload.php";


if(isset($_SESSION['adhar'])){
QRcode::png("Adhaar No.: ".$_SESSION['adhar']." Vehicle No.: ".$_SESSION['vehicleno']." Vehicle Type: ".$_SESSION['vehciletype']." From City.: ".$_SESSION['fromcity']."To City. : ".$_SESSION['tocity'], false, QR_ECLEVEL_H, 5, 10);
}
else
echo 'no data to encode';
?>

