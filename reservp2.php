<?php $_SESSION['Firstview'] = False;?>
    <div class="main">
      <div class="title">
        Detail de Réservations
        <?php echo $_SESSION['nplace']; ?>
      </div>
      <div class="details">
      </div>
      <form method="post" action="index.php">
        <div class="Form">

            <?php
            for ($i = 1;$i <= $_SESSION['nplace'];$i++)
            {
              echo '<div class="lineform"><div class="nameform">Nom</div><input type="text" name="name[]"></div>';
              echo '<div class="lineform"><div class="nameform">Age</div><input type="text" name="age[]"></div>';
            }
            ?>

        </div>
        <nav>
            <input type="submit" name ="gotoend" value="Etape suivante">
            <input type="submit" name ="goto1" value="Retour à la precédente">
            <input type="submit" name ="cancel" value="Annuler la réservation">
        </nav>
    </form>
    <div>
