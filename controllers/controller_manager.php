<?php
//Include
include("model/class_database.php");
include("model/class_reservation.php");

//Conection to DB
$mysql = Database::ConnectToDatabase("localhost","root","root");
Database::SelectDatabase($mysql,"Reservation_app");


//Delete Content
if((isset($_POST['Delete']))&& ($_POST['Delete'] != "no"))
   {
     Database::DelLine($mysql,"Listing_Reservation",(int)$_POST['Delete']);
   }

//Modify Content
if((isset($_POST['Modify']))&& ($_POST['Modify'] != "Abort"))
   {
     $reserv = unserialize($_SESSION['reserv']);

     if (isset($_POST['name'])){$reserv->AddName($_POST['name']);}
     if (isset($_POST['age'])){$reserv->AddAge($_POST['age']);}

     //Replace Line into Database
     Database::ReplaceData($_POST['Modify'],$mysql,"Listing_Reservation",
     $reserv->GetDestination(),$reserv->GetNplace(),$reserv->GetAssurance(),
     implode( ",", $reserv->GetName()),implode( ",", $reserv->GetAge()));

     $_SESSION['reserv']=serialize($reserv);
   }

//Display All Data
$datas = Database::GetAllReservation($mysql,"Listing_Reservation");
foreach ($datas as $reserv)
   {
     include("views/manager.php");
     include("views/modify_windows.php");
     include("views/delete_windows.php");
   }
?>
