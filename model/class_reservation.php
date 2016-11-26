<?php
class Reservation
{
  private $destination = "";
  private $nplaces = "";
  private $assurance;
  private $name;
  private $age;


//Set Data
public function AddDestination($input){$this->destination = $input;}
public function AddNplace($input){$this->nplaces = $input;}
public function AddName($input){$this->name = $input;}
public function AddAge($input){$this->age = $input;}
public function AddAssurance($input)
{
  if ($input == null)
  {
    $this->assurance = "";
  }
  else
  {
    $this->assurance = "Checked";
  }
}


//Get Data
public function GetDestination(){return $this->destination;}
public function GetNplace(){return $this->nplaces;}
public function GetAssurance(){return $this->assurance;}
public function GetName(){return $this->name;}
public function GetAge(){return $this->age;}
}
?>