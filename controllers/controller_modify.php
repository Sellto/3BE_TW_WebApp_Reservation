<?php
//Navigation
$formid = "myform".$dbreserv->GetID();
var_dump($formid);
if(!isset($_POST["modifystep".$dbreserv->GetID()]))
{
  $_POST["modifystep".$dbreserv->GetID()] = "GotoStep1";
}
if(!isset($_SESSION["reserv".$dbreserv->GetID()]))
{
  $reserv = $dbreserv;
}
else
{
  $reserv = unserialize($_SESSION["reserv".$dbreserv->GetID()]);
}
switch ($_POST["modifystep".$dbreserv->GetID()])
  {
    case "GotoStep0":
      echo '<form method="POST" action="index.php" id="myform'.$dbreserv->GetID().'"></form>';
      echo '<button type="submit" name="modifystep'.$dbreserv->GetID().'" form="myform'.$dbreserv->GetID().'" formaction="index.php?page=manager#modify'.$reserv->GetID().'" value="GotoStep1">Next</button>';
      break;
    case "GotoStep1":
    if(isset($_POST['name'])){$reserv->AddName($_POST['name']);}
    if(isset($_POST['age'])){$reserv->AddAge($_POST['age']);}
      include("views/view1.php");
      echo '<button type="submit" name="modifystep'.$dbreserv->GetID().'" form="myform'.$dbreserv->GetID().'" formaction="index.php?page=manager#modify'.$reserv->GetID().'" value="GotoStep2">Next</button>';
      break;
    case "GotoStep2":
    if(isset($_POST['dest'])){$reserv->AddDestination($_POST['dest']);}
    if(isset($_POST['nplace'])){$reserv->AddNplace($_POST['nplace']);}
    if(isset($_POST['assurance'])){$reserv->AddAssurance($_POST['assurance']);}
      include("views/view2.php");
      echo '<button type="submit" name="modifystep'.$dbreserv->GetID().'" form="myform'.$dbreserv->GetID().'" formaction="index.php?page=manager#modify'.$reserv->GetID().'" value="GotoStep1">Previous</button>';
      break;
  }

//Save Modification Throught the Navigation.
$_SESSION["reserv".$reserv->GetID()] = serialize($reserv);
?>
