<div class="container">
<nav class="btn-group pull-right">
    <?php
      if (($_SESSION['page'] > 0) && ($_SESSION['page'] < sizeof($views)-2))
        {
          echo '<button class="btn btn-default" type="submit" name="button" value="Previous" form="myform" formaction="index.php" ><span class="glyphicon glyphicon-chevron-left"></span></button>';
        }
      if ($_SESSION['page'] < sizeof($views)-2)
        {
          echo '<button class="btn btn-default" type="submit" name="button" value="Next" form="myform" formaction="index.php" ><span class="glyphicon glyphicon-chevron-right"></span></button>';
        }
      if ($_SESSION['page'] == sizeof($views)-2)
        {
          echo '<button class="btn btn-default" type="submit" name="button" value="Send" form="myform" formaction="index.php" ><span class="glyphicon glyphicon-floppy-disk"></span></button>';
        }
    ?>
    <button type="submit" name="button" value="Cancel" class="btn btn-default" form="myform" formaction="index.php" >
      <?php
      if ($_SESSION['page'] == sizeof($views)-1)
      {
        echo 'New';
      }
      else {
        echo '<span class="glyphicon glyphicon-remove-circle"></span>';
      }
      ?>
    </button>
</nav>
<div class="foot">
  Les caractères < > ; ? "/ _ - ! . , [ ] ( ) { } ne sont pas autorisés
</div>
</div>
