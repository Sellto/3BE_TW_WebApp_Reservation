<div id=<?php echo "modify".$dbreserv->GetID()?> class=windows>
  <div>

        <?php include("controllers/controller_modify.php");?>
        <button type="submit" name="Modify" form=<?php echo "myform".$dbreserv->GetID(); ?> formaction="index.php?page=manager" value=<?php echo $reserv->GetID()?>>Save</button>
        <button type="submit" name="Modify" form=<?php echo "myform".$dbreserv->GetID(); ?> formaction="index.php?page=manager" value="Abort" >Abort</button>
	</div>
</div>
