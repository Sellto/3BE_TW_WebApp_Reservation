confirmation
<?php
echo $reserv->GetDestination();
echo $reserv->GetAssurance();
echo $reserv->GetNplace();
$name = $reserv->GetName();
$age = $reserv->GetAge();
for ($i = 0; $i < $reserv->GetNplace(); $i++)
{
    echo $name[$i];
    echo $age[$i];
}
?>
<form method="POST" action="index.php" id="myform"></form>
