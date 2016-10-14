<?php
if (isset($_POST['next']))
{
  header( 'Location:reservp2.php' );
}
elseif (isset($_POST['previous']))
{
    header( 'Location:reservp1.php' );
}
else
{
    header( 'Location:annulation.php' );
}
 ?>
