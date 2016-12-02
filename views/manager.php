<div>
<div><?php echo $reserv->GetDestination()?></div>
<div><?php echo $reserv->GetNplace()?></div>
<div><?php echo $reserv->GetAssurance() ?></div>
<div>
<?php
for ($i = 0;$i < $reserv->GetNplace();$i++)
{
  echo "<div>".$reserv->GetName()[$i]."</div>";
  echo "<div>".$reserv->GetAge()[$i]."</div>";
}
?>
<a href=<?php echo "#Delete".$reserv->GetID()?>>Delete</a>
<a href=<?php echo "#modify".$reserv->GetID()?>>Modify</a>
</div>
</div>
