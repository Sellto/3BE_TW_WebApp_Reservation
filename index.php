<?php
 session_start();
 ?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="views/static/style.css">
  <meta charset="utf-8">
</head>
<body>
  <header class="container"><H1>Around The World Inc.</h1>
  </header>
  <?php
  if(!empty($_GET['page']) && (is_file("controllers/controller_".$_GET['page'].".php")))
  {
    include("controllers/controller_".$_GET['page'].".php");
  }
  else {
    include('controllers/controller_reservation.php');
  }
  ?>
</body>
</html>
