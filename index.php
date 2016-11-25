<?php
 session_start();
 ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="views/static/style.css">
  <meta charset="utf-8">
</head>
<body>
  <?php
  if(!empty($_GET['page']) && (is_file("model/model_".$_GET['page'].".php")))
  {
    include('model/model_manager.php');
  }
  else {
    include('model/model_reservation.php');
    include('controllers/controller.php');
    $nav->GetView($nav->ImHere());
  }
  ?>
</body>
</html>
