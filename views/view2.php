<div class="main">
      <div class="title">
        Detail de Réservations
      </div>
      <div class="details">
      </div>
      <form method="post" id=<?php echo $formid ?>>
        <div class="Form">
            <?php
            for ($i = 0;$i < $reserv->GetNplace();$i++)
            {
              echo '<div class="lineform"><div class="nameform">Nom</div><input type="text" name="name[]" value='.$name[$i].'></div>';
              echo '<div class="lineform"><div class="nameform">Age</div><input type="text" name="age[]" value='.$age[$i].'></div>';
            }
            ?>
        </div>
    </form>
</div>
