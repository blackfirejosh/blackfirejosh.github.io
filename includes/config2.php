<?php
   ob_start(); //Turns on output buffering

  $timezone = date_default_timezone_set("America/Toronto");

   try {
   $con = new PDO("mysql:dbname=ezyro_24857530_social;host=sql103.ezyro.com", "ezyro_24857530", "TammyRose23$");
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
 catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
?>