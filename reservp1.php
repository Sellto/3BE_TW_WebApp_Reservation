<!Doctype html>
<html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <meta charset="utf-8"/>
  </head>
  <body>
    <div class="main">
      <div class="title">
        Reservation
      </div>
      <div class="details">
        <p>Le prix de la place est de 10euris jusqu'à 12 ans et ensuite de 15 euros</p>
        <p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs</p>
      </div>
      <form method="POST" action="reservation.php">
        <div class="Form">
            <div class="lineform"><div class="nameform">Destination</div><input type="text" name="dest"></div>
            <div class="lineform"><div class="nameform">Nombres de places</div><input type="text" name="nplace"></div>
            <div class="lineform"><div class="nameform">Assurance annulation</div><input type="checkbox" name="assurance"></div>
        </div>
        <nav>
            <input type="submit" name="next" value="Etape suivante">
            <input type="submit" name="cancel" value="Annuler la réservation">
        </nav>
    </form>
    <div>
  </body>
</html>
