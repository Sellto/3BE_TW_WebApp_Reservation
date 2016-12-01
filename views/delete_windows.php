<div id=<?php echo "Delete".$line['ID']?> class="windows">
  <div>
		<h2>Are You Sure?</h2>
      <form method="POST" action="index.php?page=manager">
          <button type="submit" name="Delete" value=<?php echo $line['ID']?>>Yes</button>
          <button type="submit" name="Delete" value="No ">No</button>
      </form>
	</div>
</div>
