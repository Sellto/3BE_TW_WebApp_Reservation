<form method="POST" action="index.php">
<nav>
    <?php
      if ($_SESSION['whereami'] > 0 )
        {
          echo '<input type="submit" name="button" value="Previous">';
        }
      if ($_SESSION['whereami'] < $_SESSION['nbre_page'])
        {
          echo '<input type="submit" name="button" value="Next">';
        }
    ?>
    <input type="submit" name="button" value="Cancel">
</nav>
</form>
