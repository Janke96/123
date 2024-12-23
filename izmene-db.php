<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>
 
<?php

 // Normalizacija unesenih podataka
 $ID = @$_REQUEST['ID'];
 $Datum  = mysqli_real_escape_string($bp, @$_POST['Datum']);
 $Vrijeme     = mysqli_real_escape_string($bp, @$_POST['Vrijeme']);
 $VrstaServisa = mysqli_real_escape_string($bp, @$_POST['VrstaServisa']);
 $ImeKlijenta  = mysqli_real_escape_string($bp, @$_POST['ImeKlijenta']);
 $PrezimeKlijenta = mysqli_real_escape_string($bp, @$_POST['PrezimeKlijenta']);
 $ImeServisera  = mysqli_real_escape_string($bp, @$_POST['ImeServisera']);
 $PrezimeServisera = mysqli_real_escape_string($bp, @$_POST['PrezimeServisera']);
 
 // Izmene podataka u bazi
 $upit = "update Termini set Datum='$Datum', Vrijeme='$Vrijeme', VrstaServisa='$VrstaServisa', ImeKlijenta='$ImeKlijenta', PrezimeKlijenta='$PrezimeKlijenta', ImeServisera='$ImeServisera', PrezimeServisera='$PrezimeServisera'";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));
 
  // Preusmeravanje na stranicu za prikaz
 die(header("Location: prikaz.php"));
?>

<?php 
  include_once('includes/footer.php');
?>
