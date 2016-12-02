<?php
if(!isset($_SESSION['reserv']))
{
  $_SESSION['reserv'] = $reserv;
}
else
{
  $reserv = unserialize($_SESSION['reserv']);
}
if(!isset($_POST['dest']))
{
  include("views/view1.php");
  echo '<button type="submit" name="Modify" form="myform" formaction="index.php?page=manager#modify'.$reserv->GetID().'">Next</button>';
}
else
{
  $reserv->AddDestination($_POST['dest']);
  $reserv->AddNplace($_POST['nplace']);
  $reserv->AddAssurance($_POST['assurance']);
  include("views/view2.php");
  unset($_POST['dest']);
  echo '<button type="submit" name="Modify" form="myform" formaction="index.php?page=manager#modify'.$reserv->GetID().'">Previous</button>';
}
$_SESSION['reserv'] = serialize($reserv);
?>
