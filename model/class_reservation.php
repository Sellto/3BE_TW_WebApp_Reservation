<?php
class Reservation
{
  private $destination = "";
  private $nplaces = "";
  //private $assurance;
  //private $name[];
  //private $age[];
public function __construct()
{
}

public function AddDestination($input)
{
    $this->destination = $input;
}

public function GetDestination()
{
    return $this->destination;
}

public function AddNplace($input)
{
    $this->nplaces = $input;
}

public function GetNplace()
{
    return $this->nplaces;
}
}
?>
