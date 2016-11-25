<?php
$_SESSION['nbre_page'] = $nav->Max();
switch ($_POST['button'])
{
  case "Next" :
    $_SESSION['whereami'] =  $nav->Next();
    break;
  case "Previous":
    $_SESSION['whereami'] =  $nav->Previous();
    break;
  case "Cancel":
    $nav->Reset();
    break;
}
?>
