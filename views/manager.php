<div>
<div><?php echo $line['destination'] ?></div>
<div><?php echo $line['nplace']?></div>
<div><?php echo $line['assurance']?></div>
<div>
<?php
for ($i = 0;$i < $line['nplace'];$i++)
{
  echo "<div>".$line['person'][$i]."</div>";
  echo "<div>".$line['age'][$i]."</div>";
}
?>
<a href=<?php echo "#Delete".$line['ID']?>>Delete</a>
<a href=<?php echo "#Modify".$line['ID']?>>Modify</a>
</div>
</div>
