<tr>
<td><?php echo $dbreserv->GetDestination()?></td>
<td><?php echo $dbreserv->GetNplace()?></td>
<td><?php echo $dbreserv->GetAssurance() ?></td>
<td class='travellers'>
<?php
for ($i = 0;$i < $dbreserv->GetNplace();$i++)
{
  echo '<div>';
  echo '<div class="col-md-6">'.$dbreserv->GetName()[$i].'</div>';
  echo '<div class="col-md-6">'.$dbreserv->GetAge()[$i].' ans</div>';
  echo '</div>';
}
?>
<td><?php echo $dbreserv->GetPrice() ?>€</td>
</td>
<td><a href=<?php echo "#Delete".$dbreserv->GetID()?>><span class="glyphicon glyphicon-trash"></span></a>
<a href=<?php echo "#modify".$dbreserv->GetID()?>><span class="glyphicon glyphicon-file"></a></td>
</tr>
