<form method="POST" id=<?php echo $formid ?>>
            <div class="form-group col-md-5">
              <label for="destination">Destination</label>
              <input class="form-control" required="true" id="destination" type="text" name="dest" value=<?php echo $reserv->GetDestination() ?>>
            </div>
            <div class="form-group  col-md-5">
              <Label for="nplace">Nombres de places</Label>
              <input class="form-control" required="true" id="nplace" type="number" min="1" max="6" step="1" name="nplace" value=<?php echo $reserv->GetNplace() ?>>
            </div>
            <div class="form-group  col-md-2">
              <Label for="assurance">Assurance annulation</Label>
              <div class="form-inline" id="assurance">
                  <Label class="radio-inline" ><input type="radio" name="assurance" value="Oui" required>Oui</Label>
                  <Label class="radio-inline" ><input type="radio" name="assurance" value="Non">Non</Label>
              </div>
            </div>
</form>
