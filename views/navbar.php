<div class="container">
<nav class="btn-group">
    <?php
      if (($_SESSION['page'] > 0) && ($_SESSION['page'] < sizeof($views)-2))
        {
          echo '<button class="btn btn-primary" type="submit" name="button" value="Previous" form="myform" formaction="index.php" > Previous </button>';
        }
      if ($_SESSION['page'] < sizeof($views)-2)
        {
          echo '<button class="btn btn-primary" type="submit" name="button" value="Next" form="myform" formaction="index.php" > Next  </button>';
        }
      if ($_SESSION['page'] == sizeof($views)-2)
        {
          echo '<button class="btn btn-primary" type="submit" name="button" value="Send" form="myform" formaction="index.php" > Send  </button>';
        }
    ?>
    <button type="submit" name="button" value="Cancel" class="btn btn-danger" form="myform" formaction="index.php" >
      <?php
      if ($_SESSION['page'] == sizeof($views)-1)
      {
        echo "New";
      }
      else {
        echo "Cancel";
      }
      ?>
    </button>
</nav>
</div>
