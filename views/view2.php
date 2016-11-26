<div class="main">
      <div class="title">
        Detail de Réservations
      </div>
      <div class="details">
      </div>
      <form method="post" action="index.php" id="myform">
        <div class="Form">

            <?php
            for ($i = 1;$i <= $reserv->GetNplace();$i++)
            {
              echo '<div class="lineform"><div class="nameform">Nom</div><input type="text" name="name[]"></div>';
              echo '<div class="lineform"><div class="nameform">Age</div><input type="text" name="age[]"></div>';
            }
            ?>
        </div>
    </form>
<div>
