<div id=<?php echo "Delete".$dbreserv->GetID()?> class="windows">
  <div>
		<h2>Are You Sure?</h2>
      <form method="POST" action="index.php?page=manager">
          <button type="submit" class="btn btn-success" name="Delete" value=<?php echo $dbreserv->GetID()?>>Yes</button>
          <button type="submit" class="btn btn-danger" value="No ">No</button>
      </form>
	</div>
</div>
