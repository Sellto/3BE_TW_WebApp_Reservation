<form method="post" id=<?php echo $formid ?>>
<div class="form-group">
            <?php
            for ($i = 0;$i < $reserv->GetNplace();$i++)
            {

              echo '<div class="form-group col-md-6">
              <div class="col-md-2">
              <Label class="control-label"  for="Name" >Nom </Label>
              </div>
              <div class="col-md-8">
              <input class="form-control" pattern="[A-Za-z]*" id="Name" type="text" name="name[]" value='.$name[$i].'>
              </div>
              </div>';
              echo '<div class=" form-group col-md-6">
              <div class="col-md-2">
              <Label class="col-md-1 control-label " for="Age">Age </Label>
              </div>
              <div class="col-md-3">
              <input class="form-control "  type="number" min="1" max="99" step="1" id="Age" type="text" name="age[]" value='.$age[$i].'>
              </div>
              </div>';
              }

            ?>
</div>
</form>
