<div id=<?php echo "modify".$dbreserv->GetID()?> class="windows container">
  <div>

        <?php include("controllers/controller_modify.php");?>
        <div class="btn-group">
          <button type="submit" name="Modify" class="btn btn-default" form=<?php echo "myform".$dbreserv->GetID(); ?> formaction="index.php?page=manager" value=<?php echo $reserv->GetID()?>><span class="glyphicon glyphicon-floppy-disk"></span></button>
          <button type="submit" name="Modify" class="btn btn-default" form=<?php echo "myform".$dbreserv->GetID(); ?> formaction="index.php?page=manager" value="Abort" ><span class="glyphicon glyphicon-remove-circle"></span></button>
        </div>
	</div>
</div>
