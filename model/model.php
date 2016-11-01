<?php
  include('class_navigation.php');
  include('class_reservation.php');
  $nav = new Navigation($_SESSION['whereami']);
  $nav->AddView("views/view1.php");
  $nav->AddView("views/view2.php");
  $nav->AddView("views/end.php");
  $reserv = new Reservation("","");
 ?>
