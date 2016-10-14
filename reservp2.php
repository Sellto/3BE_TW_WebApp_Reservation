<!Doctype html>
<html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <meta charset="utf-8"/>
  </head>
  <body>
    <div class="main">
      <div class="title">
        Detail de Réservations
      </div>
      <div class="details">
      </div>
      <form method="post" action="reservation.php">
        <div class="Form">
            <div class="lineform"><div class="nameform">Nom</div><input type="text" name="namefirstperson"></div>
            <div class="lineform"><div class="nameform">Age</div><input type="text" name="agefirstperson"></div>
            <div class="lineform"><div class="nameform">Nom</div><input type="text" name="namesecondperson"></div>
            <div class="lineform"><div class="nameform">Age</div><input type="text" name="agesecondperson"></div>
        </div>
        <nav>
            <input type="submit" name ="next" value="Etape suivante">
            <input type="submit" name ="previous" value="Retour à la precédente">
            <input type="submit" name ="cancel" value="Annuler la réservation">
        </nav>
    </form>
    <div>
  </body>
</html>
