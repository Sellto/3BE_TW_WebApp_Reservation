<form method="post" id=<?php echo $formid ?>>

            <?php
            for ($i = 0;$i < $reserv->GetNplace();$i++)
            {
              echo '<div class="form-horizontal">';
              echo '<div class="form-group">
              <Label class="col-sm-1 control-label  for="Name" >Nom </Label>
              <div class="col-sm-6">
              <input class="form-control " id="Name" type="text" name="name[]" value='.$name[$i].'>
              </div>
              </div>';
              echo '<div class=" form-group">

              <Label class="col-sm-1 control-label " for="Age">Age </Label><div class="col-sm-6"><input class="form-control" id="Age" type="text" name="age[]" value='.$age[$i].'></div></div>';
              echo '</div>';
            }
            ?>

</form>
