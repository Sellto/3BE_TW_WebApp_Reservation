<?php
class Navigation
{
private $allofview = [];
private $whereami = 0;

public function __construct()
{
}

public function AddPosition($position)
{
  $this->whereami=$position;
}

public function AddView($include)
{
  array_push($this->allofview,$include);
}

public function GetView($name)
{
  $reserv = unserialize($_SESSION['reserv']);
  include($this->allofview[$name]);
}

public function Next()
{
  if ($this->whereami < (sizeof($this->allofview)-1))
  {
  $this->whereami++;
  }
  return $this->whereami;
}


public function Previous()
{
  if ($this->whereami > 0)
  {
    $this->whereami--;
  }
  return $this->whereami;
}

public function ImHere()
{
  return $this->whereami;
}
public function Reset()
{
  var_dump($_SESSION['reserv']);
  $this->whereami = 0;
  var_dump($_SESSION['reserv']);
}

public function Max()
{
  return sizeof($this->allofview)-1;
}

}
?>
