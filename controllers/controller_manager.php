<?php
include_once("model/class_database.php");
   $mysql = Database::ConnectToDatabase("localhost","root","root");
   Database::SelectDatabase($mysql,"Reservation_app");
   if((isset($_POST['Delete']))&& ($_POST['Delete'] != "no"))
   {
     Database::DelLine($mysql,"Listing_Reservation",(int)$_POST['Delete']);
   }
   if((isset($_POST['Modify']))&& ($_POST['Delete'] != "Abort"))
   {
     Database::ReplaceData($mysql,"Listing_Reservation",(int)$_POST['Delete']);
   }
   $table = Database::GetAllData($mysql,"Listing_Reservation");
   foreach ($table as $line)
   {
     $line['person'] = explode(',',$line['person']);
     $line['age'] = explode(',',$line['age']);
     include("views/manager.php");
     include("views/modify_windows.php");
     include("views/delete_windows.php");
   }

?>
