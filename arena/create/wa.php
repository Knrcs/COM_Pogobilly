<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <?php 
include ("../../inc/analytics.php");
?>

  <!-- Grund Header -->
<?php
$ID = "Whatsapp - Weiterleitung";
include ("../../inc/head.php");
?>

  <!-- Style -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">

<meta http-equiv="refresh" content="1; URL=<?php 

//Variabeln von create.php
$arena = $_POST["arena"];
$stufe = $_POST["stufe"];
$pokemon = $_POST["pokemon"];
$hatch = $_POST["hatch"];
$start = $_POST["start"];
$link = $_POST["link"];

echo "whatsapp://send?text=Stufe:" . " *$stufe* " . "
%0APokemon:" . " _" . "$pokemon" . "_ " . "
%0AArena: *$arena*
%0A
%0ASchlüpft:" . " *$hatch* " . "
%0AStart:" . " *$start* " . "
%0A
%0A_Spieler:_
%0A1.
%0A2.
%0A3.
%0A4.
%0A5.
%0A6.
%0A
%0A_Standort:_%0A$link";


?>">