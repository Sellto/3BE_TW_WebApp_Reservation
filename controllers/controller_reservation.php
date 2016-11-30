<?php
  //Reservation
  include('model/class_reservation.php');
  include_once("model/class_database.php");
  if (!isset($_SESSION['reserv']))
  {
    $reserv = new Reservation();
  }
  else
  {
    $reserv = unserialize($_SESSION['reserv']);
  }
  if (isset($_POST['dest'])){$reserv->AddDestination($_POST['dest']);}
  if (isset($_POST['assurance'])){$reserv->AddAssurance($_POST['assurance']);}
  if (isset($_POST['nplace'])){$reserv->AddNplace($_POST['nplace']);}
  if (isset($_POST['name'])){$reserv->AddName($_POST['name']);}
  if (isset($_POST['age'])){$reserv->AddAge($_POST['age']);}


  //Navigation
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
      break;
    case "Send":
        $mysql = Database::ConnectToDatabase("localhost","root","root");
        Database::SelectDatabase($mysql,"Reservation_app");
        Database::SelectTable($mysql,"Listing_Reservervation");
        Database::SendData($mysql,"Listing_Reservervation",
        $reserv->GetDestination(),$reserv->GetNplace(),$reserv->GetAssurance(),
        implode( ",", $reserv->GetName()),implode( ",", $reserv->GetAge()));
        $_SESSION['page'] = sizeof($views)-1;
        break;
  }
}

  $_SESSION['reserv'] = serialize($reserv);
 ?>
