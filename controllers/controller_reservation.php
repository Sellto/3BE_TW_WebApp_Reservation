<?php
  //include
  include('model/class_reservation.php');
  include("model/class_database.php");
  include("controllers/controller_lib.php");
  $formid = "myform";

  //Reservation
  if (!isset($_SESSION['reserv']))
  {
    $reserv = new Reservation();
  }
  else
  {
    $reserv = unserialize($_SESSION['reserv']);
  }
  if (isset($_POST['dest'])){$reserv->AddDestination(checkcarac($_POST['dest']));}
  if (isset($_POST['assurance'])){$reserv->AddAssurance($_POST['assurance']);}
  if (isset($_POST['nplace'])){$reserv->AddNplace(checknum($_POST['nplace']));}
  if (isset($_POST['name']))
  {
    checkcarac(implode( "",$_POST['name']));
    $reserv->AddName($_POST['name']);
  }
  if (isset($_POST['age']))
  {
    checknum(implode( "",$_POST['age']));
    $reserv->AddAge($_POST['age']);
  }

  //Navigation

  //Avoid a Mistake when field Name and Age is empty
  if(null != $reserv->GetName()){$name = $reserv->GetName();}
  else{$name = array("","","","","","","");}

  if(null != $reserv->GetAge()){$age = $reserv->GetAge();}
  else{$age= array("","","","","","","");}

  //Create the Dynamic navigation.
  if (!isset($views))
  {
    $views[0] = "views/view1.php";
    $views[1] = "views/view2.php";
    $views[2] = "views/confirmation.php";
    $views[3] = "views/end.php";
  }
  if (!isset($_SESSION['page'])){$_SESSION['page'] = 0;}


  if(isset($_POST['button']))
  {
  switch ($_POST['button'])
  {
    case "Next" :
      if ($_SESSION['page'] < sizeof($views)-1)
      {
      $_SESSION['page'] =  $_SESSION['page']+1;
      }
      break;
    case "Previous":
      if ($_SESSION['page'] > 0)
      {
      $_SESSION['page'] = $_SESSION['page']-1;
      }
      break;
    case "Cancel":
      $_SESSION['page'] = 0;
      $reserv = new Reservation();
      session_destroy();
      break;
    case "Send":
        $mysql = Database::ConnectToDatabase("localhost","root","");
        Database::SelectDatabase($mysql,"Reservation_app");
        Database::SelectTable($mysql,"Listing_Reservation");
        Database::SendData($mysql,"Listing_Reservation",
        $reserv->GetDestination(),$reserv->GetNplace(),$reserv->GetAssurance(),
        implode( ",", $reserv->GetName()),implode( ",", $reserv->GetAge()));
        $_SESSION['page'] = sizeof($views)-1;
        break;
  }
}

  $_SESSION['reserv'] = serialize($reserv);

//Display active views.
include($views[$_SESSION['page']]);
include('views/navbar.php');
 ?>
