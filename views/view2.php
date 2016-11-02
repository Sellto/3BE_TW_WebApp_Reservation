<div class="main">
      <div class="title">
        Detail de Réservations
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
            <?php include('controllers/navbar.php'); ?>
        </div>
    </form>
<div>
