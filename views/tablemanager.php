<div class="container tablemanager">
<table class="table">
<thead>
      <tr>
        <th>Destination</th>
        <th>Number of Persons</th>
        <th>Assurance</th>
        <th>Traveller(s)</th>
        <th></th>
      </tr>
</thead>
<tbody>
<?php
foreach ($datas as $dbreserv)
   {
     include("views/manager_item.php");
     include("views/modify_windows.php");
     include("views/delete_windows.php");
   }
?>
</tbody>
</table>
</div>
