<form method="POST" id=<?php echo $formid ?>>
            <div class="form-group">
              <label for="destination">Destination</label>
              <input class="form-control" id="destination" type="text" name="dest" value=<?php echo $reserv->GetDestination() ?>>
            </div>
            <div class="form-group">
              <Label for="nplace">Nombres de places</Label>
              <input class="form-control" id="nplace" type="text" name="nplace" value=<?php echo $reserv->GetNplace() ?>>
            </div>
            <div class="form-group">
              <Label for="assurance">Assurance annulation</Label>
              <div class="form-inline" id="assurance">
                  <Label class="radio-inline" ><input type="radio" name="assurance" value="Oui">Oui</Label>
                  <Label class="radio-inline" ><input type="radio" name="assurance" value="Non">Non</Label>
              </div>
            </div>
</form>
