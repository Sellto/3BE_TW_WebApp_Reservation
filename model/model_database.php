<?php
//Connection
$password = "root";
$username = "root";
$host = "localhost";
$DBName = "Reservation_Project";
$TableReserv = "Listing_Reservervation";
$mysql = new PDO("mysql:host=$host", $username,$password);

//If First Use
$mysql->exec("CREATE DATABASE IF NOT EXISTS $DBName");
$mysql->exec("use $DBName");
$mysql->exec("CREATE TABLE IF NOT EXISTS $TableReserv(
    destination TEXT NOT NULL,
    nplace TINYINT NOT NULL,
    assurance TEXT NOT NULL,
    person TEXT NOT NULL,
    age TEXT NOT NULL)");
//Send Data 
$senddata = $mysql->prepare("INSERT INTO $TableReserv(destination, nplace, assurance, person, age) VALUES (:dest,:nplace,:ass,:person,:age)");
$dest = $reserv->GetDestination();
$nplace = (int)$reserv->GetNplace();
$ass = $reserv->GetAssurance();
$name = implode( ",", $reserv->GetName());
$age = implode( ",", $reserv->GetAge());
$senddata->bindParam(':dest', $dest);
$senddata -> bindParam(':nplace', $nplace);
$senddata -> bindParam(':ass', $ass);
$senddata -> bindParam(':person', $name);
$senddata -> bindParam(':age', $age);
?>
