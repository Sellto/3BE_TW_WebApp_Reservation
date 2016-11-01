<?php
  include('class_navigation.php');
  include('class_reservation.php');
  $nav = new Navigation($_SESSION['whereami']);
  $nav->AddView("tpl.php");
  $nav->AddView("tpl.php");
  $nav->AddView("tpl.php");
  $nav->AddView("tpl.php");
  $nav->AddView("tpl.php");
  $nav->AddView("tpl.php");
  $reserv = new Reservation("","");
 ?>
