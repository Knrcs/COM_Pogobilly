<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<?php 
include ("../inc/analytics.php");
?>

  <!-- Grund Header -->
<?php
$ID = "Raidliste Erstellen";
include ("../inc/head.php");
?>

  <!-- Favicon -->
<?php
include ("../inc/fav.php");
?>

  <!-- Style -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<form class="create" action="create/wa.php" target="_self" method="post">
  <h1> Arena: Keine Arena</h1>
  <img src=""> <!-- Bildersuche nach Namen der Arena -->


  <!-- Arena --><input type="hidden" name="arena" value="" />
  <!-- Gmaps Link--><input type="hidden" name="link" value="" />
  <!-- Stufe (Pflicht)--><select name="stufe" required>
                  <option value="1er" />Stufe 1</option>
                      <option value="2er" />Stufe 2</option>
                      <option value="3er" />Stufe 3</option>
                      <option value="4er" />Stufe 4</option>
                      <option value="5er" selected/>Stufe 5</option>
                    </select>
  <h2>Raid Boss</h2>
  <!-- Pokemon --><input type="text" name="pokemon" value="Pokemon"/>
  <h2>Schlüpft</h2>
  <!-- Schlüpft (Pflicht) --><input type="time" name="hatch" value="00:00" required/>
  <h2>Start</h2>
  <!-- Start --><input type="time" name="start" value="00:00"/>
  <!-- Raid Erstellen--><input type="submit" name="" value="Raidliste Erstellen">

</form>




</body>
<footer>
<p>© 2019 Mikey Pascal Broz </p>
</footer>
</html>
