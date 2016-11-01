<?php
 session_start();
 ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
</head>
<body>
  <?php
  include('model/model.php');
  $_SESSION['nbre_page'] = $nav->Max();
  if (!isset($_SESSION['whereami']))
  {
    $_SESSION['whereami'] = 0;
  }
  switch ($_POST['button'])
  {
    case "Next" :
      $_SESSION['whereami'] =  $nav->Next();
      break;
    case "Previous":
      $_SESSION['whereami'] =  $nav->Previous();
      break;
    case "Cancel":
      $_SESSION['whereami'] = $nav->Reset();
      break;
  }
  $nav->GetView($nav->ImHere());
  ?>
</body>
</html>
