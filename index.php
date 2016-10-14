<!Doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
</head>
<body>
  <?php
  session_start();
  if (isset($_POST['goto2']))
  {
      $_SESSION['dest'] = $_POST['dest'];
      $_SESSION['nplace'] = $_POST['nplace'];
      if (isset($_POST['assurance']))
      {
        $_SESSION['assurance'] = "Oui";
      }
      include('reservp2.php');
  }
  elseif (isset($_POST['gotoend']))
  {
      $_SESSION['name'] =  $_POST['name'];
      $_SESSION['age'] =  $_POST['age'];
      include('confirmation.php');
  }
  elseif (isset($_POST['cancel']))
  {
      include('annulation.php');
  }
  elseif (isset($_POST['goto1']))
  {
      include('reservp1.php');
  }
  else
  {
    $_SESSION['dest'] = "";
    $_SESSION['nplace'] = 0;
    include('reservp1.php');
  }
  ?>
</body>
</html>
