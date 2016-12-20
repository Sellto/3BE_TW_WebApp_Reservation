<?php
function checkcarac($word)
{
  if (preg_match('/[^A-Za-z]/',$word))
  {
    session_destroy();
    return header("Location: http://www.policelocale.be/5318/questions/criminalite-sur-internet/hacking");
  }
  else
  {
    return $word;
  }

}

function checknum($num)
{
  if (preg_match('/[^0-9]/',$num))
  {
    session_destroy();
    return header("Location: http://www.policelocale.be/5318/questions/criminalite-sur-internet/hacking");
  }
  else
  {
    return $num;
  }

}
 ?>
