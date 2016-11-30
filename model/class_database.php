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
      destination TEXT NOT NULL,
      nplace TINYINT NOT NULL,
      assurance TEXT NOT NULL,
      person TEXT NOT NULL,
      age TEXT NOT NULL)");
    }

  public static function SendData($mysql,$table, $dest,$nplace,$ass,$person,$age)
  {
    $mysql->exec("INSERT INTO $table(destination, nplace, assurance, person, age)
    VALUES ('".$dest."','".$nplace."','".$ass."','".$person."','".$age."')");
  }
}
?>
