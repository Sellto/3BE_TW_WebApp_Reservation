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
if (isset($_POST['Modify']))
{
switch ($_POST['Modify'])
   {
     case "Abort":
      break;
     default:
      //Get The reservation information
      $reservation = unserialize($_SESSION["reserv".$_POST['Modify']]);
      //Change Data into Reservation Object
      if (isset($_POST['dest'])){$reservation->AddDestination($_POST['dest']);}
      if (isset($_POST['nplace'])){$reservation->AddNplace($_POST['nplace']);}
      if (isset($_POST['assurance'])){$reservation->AddAssurance($_POST['assurance']);}
      if (isset($_POST['name'])){$reservation->AddName($_POST['name']);}
      if (isset($_POST['age'])){$reservation->AddAge($_POST['age']);}

      //Replace Line into Database
      Database::ReplaceData($_POST['Modify'],$mysql,"Listing_Reservation",
      $reservation->GetDestination(),$reservation->GetNplace(),$reservation->GetAssurance(),
      implode( ",", $reservation->GetName()),implode( ",", $reservation->GetAge()));

      //Keep Data To modify the same reservation Later.
      $_SESSION["reserv".$_POST['Modify']] = serialize($reservation);
      break;

   }
unset($_POST);
}

//Display All Data
$datas = Database::GetAllReservation($mysql,"Listing_Reservation");
include("views/tablemanager.php");
?>
