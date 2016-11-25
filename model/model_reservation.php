<?php
  include('class_navigation.php');
  include('class_reservation.php');
  if (!isset($_SESSION['reserv']))
  {
    $reserv = new Reservation();
  }
  else
  {
    $reserv = unserialize($_SESSION['reserv']);
  }
  if (!isset($_SESSION['whereami']))
  {
    $nav = new Navigation();
    $nav->AddView("views/view1.php");
    $nav->AddView("views/view2.php");
    $nav->AddView("views/end.php");
  }
  else {
      $nav = unserialize($_SESSION['nav']);
      $nav->AddPosition($_SESSION['whereami']);
  }
  if (isset($_POST['dest']))
  {
    $reserv->AddDestination($_POST['dest']);
  }
  if (isset($_POST['assurance']))
  {
    $_SESSION['assurance'] = $_POST['assurance'];
  }
  if (isset($_POST['nplace']))
  {
    $reserv->AddNplace($_POST['nplace']);
  }
  if (isset($_POST['name']))
  {
    $_SESSION['name']= $_POST['name'];
  }
  if (isset($_POST['age']))
  {
    $_SESSION['age']= $_POST['age'];
  }
  $_SESSION['reserv'] = serialize($reserv);
  $_SESSION['nav'] = serialize($nav);
 ?>
