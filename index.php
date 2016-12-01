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
    include("controllers/controller_".$_GET['page'].".php");
  }
  else {
    include('controllers/controller_reservation.php');
  }
  ?>
</body>
</html>
