<?php
//Get Data
if(!isset($_SESSION["reserv".$dbreserv->GetID()]))
{
  $reserv = $dbreserv;
}
else
{
  $reserv = unserialize($_SESSION["reserv".$dbreserv->GetID()]);
}

//Navigation
if(!isset($_POST["modifystep".$dbreserv->GetID()])){$_POST["modifystep".$dbreserv->GetID()] = "GotoStep1";}

//Unique ID for the form
$formid = "myform".$dbreserv->GetID();

//Avoid a Mistake when field Name and Age is empty
if(null != $reserv->GetName()){$name = $reserv->GetName();}

if(null != $reserv->GetAge()){$age = $reserv->GetAge();}

switch ($_POST["modifystep".$dbreserv->GetID()])
  {
    case "GotoStep1":
      //keep data when push on Previous button
      if(isset($_POST['name'])){$reserv->AddName($_POST['name']);}
      if(isset($_POST['age'])){$reserv->AddAge($_POST['age']);}
      //View Step1
      include("views/view1.php");
      echo '<button type="submit" name="modifystep'.$dbreserv->GetID().'" form="myform'.$dbreserv->GetID().'" formaction="index.php?page=manager#modify'.$reserv->GetID().'" value="GotoStep2">Next</button>';
      break;
    case "GotoStep2":
      //keep data when push on Next button
      if(isset($_POST['dest'])){$reserv->AddDestination($_POST['dest']);}
      if(isset($_POST['nplace'])){$reserv->AddNplace($_POST['nplace']);}
      if(isset($_POST['assurance'])){$reserv->AddAssurance($_POST['assurance']);}
      //View Step2
      include("views/view2.php");
      echo '<button type="submit" name="modifystep'.$dbreserv->GetID().'" form="myform'.$dbreserv->GetID().'" formaction="index.php?page=manager#modify'.$reserv->GetID().'" value="GotoStep1">Previous</button>';
      break;
  }

//Save Modification Throught the Navigation.
$_SESSION["reserv".$reserv->GetID()] = serialize($reserv);
?>
