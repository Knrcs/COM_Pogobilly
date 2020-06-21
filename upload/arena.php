<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<?php 
include ("../inc/analytics.php");
?>

  <!-- Grund Header -->
<?php
$ID = "Upload - Arena";
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
<a href="../"><img class="menu1" src="../pic/misc/fav.png" height="50" width="50"></a>
<h1 class="menu2">Pogobilly - Upload - Arena</h1>
<hr>

<?php
    if (isset($_FILES['file'])){
        //pre_r($_FILES);

        $phpUploadErrors = array(
            0 => 'Die Datei wurde Erfolgreich Hochgeladen',
            1 => 'Die Datei ist zu groß. Bitte versuchen sie eine andere Datei hochzuladen.',
            2 => 'Die Datei ist zu groß. Bitte versuchen sie eine andere Datei hochzuladen.',
            3 => '',
            4 => 'Es wurde keine Datei ausgewählt.',
            6 => '',
            7 => '',
            8 => '',
        );

        $ext_error = false;
        //Dateien, die nur hochgeladen werden dürfen.
        $extensions = array('jpg','jpeg','gif','png');
        $file_ext = explode('.',$_FILES['file']['name']);
        $file_ext = end($file_ext);
        
        if(!in_array($file_ext, $extensions)){
            $ext_error = true;
        }

        if ($_FILES['file']['error']){
           ?> <div class="warnung"> <?php echo "<p>" .$phpUploadErrors[$_FILES['file']['error']]."</p>";
           ?> </div> <?php
        }
        elseif ($ext_error){
            ?> <div class="warnung"> <?php echo "<p>Diese Datei ist kein Bild. Bitte wählen sie die richtige Datei aus. " 
            . "Bild Datein sind nur Datein mit der Endung: (";
            foreach ($extensions as $key => $extensions){
                echo ".".$extensions." ";
            }
            echo ")</p>";
            ?> </div> <?php
        }
        else {
            ?>
            <div class="richtig"> <?php
             move_uploaded_file($_FILES['file']['tmp_name'], 
             'arena/'.$_FILES['file']['name']);


             $oldname = "arena/" .$_FILES['file']['name'];
             $newname = "arena/" .$_POST["tname"] . " - " . $_POST["aname"] . "." .$file_ext;
             rename($oldname, $newname);


            echo '<p>Die Datei wurde erfolgreich Hochgeladen!</p>';
            ?>
            </div>
            <?php
        }
    }


    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }


?>

<form class="create" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <h2>Arenanamen</h2><input type="text" name="aname" required>
    <h2>Spielernamen</h2><input type="text" name="tname" required>
    <input type="submit" value="Hochladen">
</form>