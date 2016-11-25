confirmation
<?php
echo $reserv->GetDestination();
//echo $_SESSION['assurance'];
echo $reserv->GetNplace();
for ($i = 0;$i < $reserv->GetNplace();$i++)
{
  //echo $_SESSION['name'][$i];
  //echo $_SESSION['age'][$i];
}
?>
