confirmation
<?php
echo $_SESSION['Destination'];
echo $_SESSION['assurance'];
echo $_SESSION['nplace'];
for ($i = 0;$i < $_SESSION['nplace'];$i++)
{
  echo $_SESSION['name'][$i];
  echo $_SESSION['age'][$i];
}
?>
