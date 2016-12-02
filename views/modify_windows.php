<div id=<?php echo "modify".$reserv->GetID()?> class="windows">
  <div>

        <?php include("controllers/controller_modify.php"); ?>
        <button type="submit" name="Modify" form="myform" formaction="index.php?page=manager" value=<?php echo $reserv->GetID()?>>Save</button>
        <button type="submit" name="Modify" form="myform" formaction="index.php?page=manager" value="Abort" >Abort</button>
	</div>
</div>
