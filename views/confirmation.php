<div class="container">
  <div><h4>Recapitulatif de votre réservation : </h4></div>
</div>

<div class="Container">
<div class="col-md-6">
<h5><div class="col-md-6">Destination </div><div>: <?php echo $reserv->GetDestination();?></div>
<div class="col-md-6">Nombre de voyageurs </div><div>: <?php echo $reserv->GetNplace();?></div>
<div class="col-md-6">Assurance </div><div>: <?php echo $reserv->GetAssurance();?></div></h5>
<h4><div class="col-md-6">Prix </div><div>: <?php echo $reserv->GetPrice();?>€</div></h4>
</div>
<div class="col-md-6">
<div class="col-md-12"><u>Liste des voyageurs</u></div>
<?php $name = $reserv->GetName();
$age = $reserv->GetAge();
for ($i = 0; $i < $reserv->GetNplace(); $i++)
{
    echo '<div class="col-md-6">'.$name[$i].'</div>';
    echo '<div class="col-md-6">'.$age[$i].' ans</div>';
}
?>
</div>
</div>
<form method="POST" action="index.php" id="myform"></form>
