<?php
class Navigation
{
private $allofview = [];
private $whereami;

public function __construct($position)
{
    $this->whereami=$position;
}

public function AddView($include)
{
  array_push($this->allofview,$include);
}

public function GetView($name)
{
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
  $this->whereami = 0;
  $_SESSION['Destination'] = "";
  $_SESSION['nplace'] = "";
  $_SESSION['assurance'] = off;
}

public function Max()
{
  return sizeof($this->allofview)-1;
}

}
?>
