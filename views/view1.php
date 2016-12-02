<div class="main">
      <div class="title">
        Reservation
      </div>
      <!-- <div class="details">
        <p>Le prix de la place est de 10euros jusqu'à 12 ans et ensuite de 15 euros</p>
        <p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs</p>
      </div>-->
      <form method="POST" id="myform">
        <div class="Form">
            <div class="lineform"><div class="nameform">Destination</div><input type="text" name="dest" value=<?php echo $reserv->GetDestination() ?>> </div>
            <div class="lineform"><div class="nameform">Nombres de places</div><input type="text" name="nplace" value=<?php echo $reserv->GetNplace() ?>></div>
            <div class="lineform"><div class="nameform">Assurance annulation</div>
            <div>Oui</div><input type="radio" name="assurance" value="Oui">
            <div>Non</div><input type="radio" name="assurance" value="Non">
        </div>
        </div>
    </form>
</div>
