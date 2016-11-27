<nav>
    <?php
      if (($_SESSION['page'] > 0) && ($_SESSION['page'] < sizeof($views)-2))
        {
          echo '<button type="submit" name="button" value="Previous" form="myform" > Previous </button>';
        }
      if ($_SESSION['page'] < sizeof($views)-2)
        {
          echo '<button type="submit" name="button" value="Next" form="myform" > Next  </button>';
        }
      if ($_SESSION['page'] == sizeof($views)-2)
        {
          echo '<button type="submit" name="button" value="Send" form="myform" > Send  </button>';
        }
    ?>
    <button type="submit" name="button" value="Cancel" form="myform" >
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
