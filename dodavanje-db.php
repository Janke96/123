<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>

<?php

 // Normalizacija ulaznih podataka
 $Datum  = mysqli_real_escape_string($bp, @ $_POST['Datum']);
 $Vrijeme     = mysqli_real_escape_string($bp, @ $_POST['Vrijeme']);
 $VrstaServisa = mysqli_real_escape_string($bp, @ $_POST['VrstaServisa']);
 $Ime  = mysqli_real_escape_string($bp, @ $_POST['Ime']);
 $Prezime = mysqli_real_escape_string($bp, @ $_POST['Prezime']);
 
 // Unos novog reda u tabelu
 $upit = "insert into Termini (Datum, Vrijeme, VrstaServisa, ImeKlijenta, PrezimeKlijenta, ImeServisera, PrezimeServisera) 
 values ('$Datum','$Vrijeme', '$VrstaServisa', '$Ime', '$Prezime', 'Milos', 'Jankovic')";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));

 // Prekid veze sa serverom baze podataka
 mysqli_close($bp);
 
 // Preusmeravanje na stranicu za prikaz
 die(header("Location: prikaz.php"));
 
?>

<?php 
  include_once('includes/footer.php');
?>