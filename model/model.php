<?php
  session_start();
  include('class_navigation.php');

  if (!isset($_SESSION['whereami']))
  {
    $_SESSION['whereami'] = 0;

  }
  $nav = new Navigation($_SESSION['whereami']);
  $nav->AddView("views/view1.php");
  $nav->AddView("views/view2.php");
  $nav->AddView("views/end.php");
  if (isset($_POST['dest']))
  {
    $_SESSION['Destination'] = $_POST['dest'];
  }
  if (isset($_POST['assurance']))
  {
    $_SESSION['assurance'] = $_POST['assurance'];
  }
  if (isset($_POST['nplace']))
  {
    $_SESSION['nplace'] = $_POST['nplace'];
  }
  if (isset($_POST['name']))
  {
    $_SESSION['name']= $_POST['name'];
  }
  if (isset($_POST['age']))
  {
    $_SESSION['age']= $_POST['age'];
  }
 ?>
