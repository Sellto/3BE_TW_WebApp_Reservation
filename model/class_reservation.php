<?php
class Reservation
{
  private $destination = "";
  private $nplaces = "";
  private $assurance="";
  private $name=array();
  private $age=array();
  private $id;


//Set Data
public function AddDestination($input){$this->destination = $input;}
public function AddNplace($input){$this->nplaces = $input;}
public function AddName($input){$this->name = $input;}
public function AddAge($input){$this->age = $input;}
public function AddAssurance($input){$this->assurance = $input;}
public function AddID($input){$this->id = $input;}



//Get Data
public function GetDestination(){return $this->destination;}
public function GetNplace(){return $this->nplaces;}
public function GetAssurance(){return $this->assurance;}
public function GetName(){return $this->name;}
public function GetAge(){return $this->age;}
public function GetID(){return $this->id;}
public function GetPrice()
{
  $price = 0;
  for ($i = 0; $i < $this->nplaces; $i++)
  {
      if (intval($this->age[$i]) > 12)
      {
        $price = $price + 15;
      }
      else
      {
        $price = $price + 10;
      }
  }
  if ($this->assurance == "Oui")
  {
    $price = $price + 20;
  }
  return $price;
}
}
?>
