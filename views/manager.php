<div>
<div><?php echo $dbreserv->GetDestination()?></div>
<div><?php echo $dbreserv->GetNplace()?></div>
<div><?php echo $dbreserv->GetAssurance() ?></div>
<div>
<?php
for ($i = 0;$i < $dbreserv->GetNplace();$i++)
{
  echo "<div>".$dbreserv->GetName()[$i]."</div>";
  echo "<div>".$dbreserv->GetAge()[$i]."</div>";
}
?>
<a href=<?php echo "#Delete".$dbreserv->GetID()?>>Delete</a>
<a href=<?php echo "#modify".$dbreserv->GetID()?>>Modify</a>
</div>
</div>
