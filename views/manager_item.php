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
</td>
<td><a href=<?php echo "#Delete".$dbreserv->GetID()?>>Delete</a>
<a href=<?php echo "#modify".$dbreserv->GetID()?>>Modify</a></td>
</tr>