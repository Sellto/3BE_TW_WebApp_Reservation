<form method="POST" id=<?php echo $formid ?>>
        <div class="Form">
            <div class="lineform"><div class="nameform">Destination</div><input type="text" name="dest" value=<?php echo $reserv->GetDestination() ?>> </div>
            <div class="lineform"><div class="nameform">Nombres de places</div><input type="text" name="nplace" value=<?php echo $reserv->GetNplace() ?>></div>
            <div class="lineform"><div class="nameform">Assurance annulation</div>
            <div>Oui</div><input type="radio" name="assurance" value="Oui">
            <div>Non</div><input type="radio" name="assurance" value="Non">
        </div>
        </div>
</form>
