<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>
 
 <table border="1">
  <thead>
   <tr>
    <th>Datum</th><th>Vrijeme</th><th>Vrsta Servisa</th><th>Ime Klijenta</th><th>Prezime Klijenta</th><th>Ime Servisera</th><th>Prezime Servisera</th>
   </tr>
  </thead>
 <?php
 
  // Učitavanje podataka iz baze
  $upit = "select * from Termini";
  $rezultat = mysqli_query($bp, $upit);
  if (!$rezultat)
    die(mysqli_error($bp));
 
  // Prikaz učitanih podataka
  while ($red = mysqli_fetch_object($rezultat)) {
    echo "<tr>\n";
    echo " <td>{$red->Datum}</td>\n";
    echo " <td>{$red->Vrijeme}</td>\n";
    echo " <td>{$red->VrstaServisa}</td>\n";
    echo " <td>{$red->ImeKlijenta}</td>\n";
    echo " <td>{$red->PrezimeKlijenta}</td>\n";
    echo " <td>{$red->ImeServisera}</td>\n";
    echo " <td>{$red->PrezimeServisera}</td>\n";
	echo " <td><a href='izmene.php?ID={$red->ID}'>Izmena</a></td>\n";
	echo " <td><a href='brisanje.php?ID={$red->ID}'>Brisanje</a></td>\n";
    echo "</tr>\n";
  }
?>
 </table>
 <a href="dodavanje.php">Dodavanje novog servisa</a>
 
<?php 
  include_once('includes/footer.php');
?>
