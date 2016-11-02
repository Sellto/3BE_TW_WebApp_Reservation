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
  include('model/model.php');
  include('controllers/controller.php');
  $nav->GetView($nav->ImHere());
  ?>
</body>
</html>
