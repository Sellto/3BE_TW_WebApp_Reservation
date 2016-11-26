<nav>
    <?php
      if (($_SESSION['page'] > 0) && ($_SESSION['page'] < sizeof($views)-1))
        {
          echo '<button type="submit" name="button" value="Previous" form="myform" > Previous </button>';
        }
      if ($_SESSION['page'] < sizeof($views)-1)
        {
          echo '<button type="submit" name="button" value="Next" form="myform" > Next  </button>';
        }
      if ($_SESSION['page'] == sizeof($views)-1)
        {
          echo '<button type="submit" name="button" value="Sent" form="myform" > Send  </button>';
        }
    ?>
    <button type="submit" name="button" value="Cancel" form="myform" >Cancel</button>
</nav>
