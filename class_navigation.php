<?php
class Navigation
{
private $allofview = [];
private $whereimi;

public function __construct($position)
{
    $this->whereimi=$position;
}

public function AddView($name,$include)
{
  $this->allofview[$name] = $include;
}

public function GetView($name)
{
  include($this->allofview[$name]);
}

public function Next()
{
  $this->whereimi++;
}

public function Previous()
{
  $this->whereimi--;
}

Public function GetPostition()
{
return $this->whereimi;
}

Public function LoadPostition($load)
{
  $this->whereimi = $load;
}
}
?>
