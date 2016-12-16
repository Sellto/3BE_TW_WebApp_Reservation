<div id=<?php echo "Delete".$dbreserv->GetID()?> class="windows container">
  <div>
		<h4>Êtes-vous sûre de vouloir supprimer cette reservation?</h4>
      <form method="POST" action="index.php?page=manager">
          <button type="submit" class="btn btn-default" name="Delete" value=<?php echo $dbreserv->GetID()?>><span class="glyphicon glyphicon-ok-circle"></button>
          <button type="submit" class="btn btn-default" value="No "><span class="glyphicon glyphicon-remove-circle"></span></button>
      </form>
	</div>
</div>
