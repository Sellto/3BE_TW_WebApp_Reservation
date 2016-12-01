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
<form method="POST" action="index.php?page=manager">
  <button type="submit" name="Delete" value=<?php echo $line['ID']?>>Delete</button>
</form>
</div>
</div>
