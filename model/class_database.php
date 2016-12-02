<?php
class Database
{
  public static function ConnectToDatabase($host,$username,$password)
  {
    return new PDO("mysql:host=$host", $username,$password);
  }

  public static function SelectDatabase($mysql,$DBName)
  {
    $mysql->exec("CREATE DATABASE IF NOT EXISTS $DBName");
    $mysql->exec("use $DBName");
  }

  public static function SelectTable($mysql,$table)
  {
    $mysql->exec("CREATE TABLE IF NOT EXISTS $table(
      ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
      destination TEXT NOT NULL,
      nplace TINYINT NOT NULL,
      assurance TEXT NOT NULL,
      person TEXT NOT NULL,
      age TEXT NOT NULL)");
    }

  public static function SendData($mysql,$table,$dest,$nplace,$ass,$person,$age)
  {
    $mysql->exec("INSERT INTO $table(destination, nplace, assurance, person, age)
    VALUES ('".$dest."','".$nplace."','".$ass."','".$person."','".$age."')");
  }

  public static function ReplaceData($ID,$mysql,$table,$dest,$nplace,$ass,$person,$age)
  {
    $update = $mysql->prepare("UPDATE $table SET destination='".$dest."',nplace='".$nplace."',assurance='".$ass."',person='".$person."',age='".$age."' WHERE ID='".$ID."'");
    $update->execute();
  }

  public static function GetAllReservation($mysql,$table)
  {
    $alldata = $mysql->query("SELECT * FROM $table");
    $reservation = array();
    foreach ($alldata->fetchAll() as $line)
    {
      $reservation[$line['ID']] = new Reservation();
      $reservation[$line['ID']]->AddDestination($line['destination']);
      $reservation[$line['ID']]->AddNplace($line['nplace']);
      $reservation[$line['ID']]->AddAssurance($line['assurance']);
      $reservation[$line['ID']]->AddName(explode(',',$line['person']));
      $reservation[$line['ID']]->AddAge(explode(',',$line['age']));
      $reservation[$line['ID']]->AddID($line['ID']);
    }
    return $reservation;
  }

  public static function DelLine($mysql,$table,$line)
  {
    $mysql->exec("DELETE FROM $table WHERE ID = $line");
  }
}
?>
