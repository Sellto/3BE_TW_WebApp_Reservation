<div id=<?php echo "Modify".$line['ID']?> class="windows">
  <div>
    <form method="POST" action="index.php?page=manager">
        <div class="lineform"><div class="nameform">Destination</div><input type="text" name="dest" value=<?php echo $line['destination'] ?>> </div>
        <div class="lineform"><div class="nameform">Nombres de places</div><input type="text" name="nplace" value=<?php echo $line['nplace'] ?>></div>
        <div class="lineform"><div class="nameform">Assurance annulation</div>
        <?php
        for ($i = 0;$i <= $line['nplace']-1;$i++)
        {
          echo '<div class="lineform"><div class="nameform">Nom</div><input type="text" name="name[]" value='.$line["person"][$i].'></div>';
          echo '<div class="lineform"><div class="nameform">Age</div><input type="text" name="age[]" value=' .$line["age"][$i].'></div>';
        }
        ?>
        <button type="submit" name="Delete" value=<?php echo $line['ID']?>>Yes</button>
        <button type="submit" name="Delete" value="No ">No</button>
    </form>
	</div>
</div>
</div>
