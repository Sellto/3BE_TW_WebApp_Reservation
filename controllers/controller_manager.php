<?php
include_once("model/class_database.php");
$mysql = Database::ConnectToDatabase("localhost","root","root");
Database::SelectDatabase($mysql,"Reservation_app");
Database::GetAllData($mysql,"Listing_Reservervation");
?>
