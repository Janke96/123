 <?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
 ?>
 
<?php 

 // Normalizacija ulaznih podataka
 $ID = @$_REQUEST['ID'];
 
 // Učitavanje podataka iz baze
 $upit = "select * from Termini where ID='$ID'";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));

 // Provera da li postoji traženi red
 if (mysqli_num_rows($rezultat) != 1)
   die('Ne postoji termin '.ID);
 
 // Prenos rezultata u objekt 'Student'
 $Student = mysqli_fetch_object($rezultat);
?>
  
 <form action="izmene-db.php" method="post">
  Datum:<input type="date" name="Datum" value="<?php echo $Termini->Datum; ?>" /> <br>
  Vrijeme:<input type="time" name="Vrijeme" value="<?php echo $Termini->Vrijeme; ?>" /> <br>
  Vrsta Servisa:<input type="text" name="VrstaServisa" value="<?php echo $Termini->VrstaServisa; ?>" /><br>
  Ime Klijenta:<input type="text" name="Ime" value="<?php echo $Termini->ImeKlijenta; ?>" /><br>
  Prezime Klijenta:<input type="text" name="Prezime" value="<?php echo $Termini->PrezimeKlijenta; ?>" /> <hr>
  Ime Servisera:<input type="text" name="Ime" value="<?php echo $Termini->ImeKlijenta; ?>" /><br>
  Prezime Servisera:<input type="text" name="Prezime" value="<?php echo $Termini->PrezimeKlijenta; ?>" /> <hr>
  <button type="submit">Izmene</button>
 </form>
 
 <?php 
  include_once('includes/footer.php');
 ?>