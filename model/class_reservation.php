<?php
class Reservation
{
  private $destination;
  private $nplace;
  private $person = [];

  public function __construct($destination,$nplace)
    {
      $this->destination=$destination;
      $this->nplace=$nplace;
    }

  public function AddPerson($input_name,$input_age)
    {
      $this->person[$input_name] = $input_age;
    }

  public function AddDestination($input_destination)
    {
      $this->destination = $input_destination;
    }

  public function AddNPlace($input_nplace)
    {
      $this->nplace = $input_nplace;
    }

  public function GetPerson()
    {
      return $this->person;
    }

  public function GetDestination()
    {
      return $this->destination;
    }

  public function GetNPlace()
    {
      return  $this->nplace;}
    }
?>
