<!Doctype html>
<?php session_start() ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
</head>
<body>
  <?php
  if (!isset($_SESSION['whereimi']))
  {
    $_SESSION['whereimi'] = 0;
  }
  include('class_reservation.php');
  include('class_navigation.php');
  $nav = new Navigation($_SESSION['whereimi']);
  $nav->AddView("Main","reservp1.php");
  $reserv = new Reservation("","");
  if (isset($_POST['button']) == "Next")
  {
    $nav.Next();

  }
  echo $nav->GetPostition();
    ?>

</body>
</html>
