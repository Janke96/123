<?php 
  include_once('includes/header.php');
?>
 
 <form action="dodavanje-db.php" method="post">
  Datum: <input type="date" name="Datum">
  Vrijeme: <input type="time" name="Vrijeme">
  Vrsta servisa: <select name="VrstaServisa">
    <option value="redovni">redovni</option>
    <option value="ugradnja">ugradnja</option>
    <option value="popravka">popravka</option>
  </select><br>
  Ime: <input type="text" name="Ime"><br>
  Prezime: <input type="text" name="Prezime"><br><br>
  <button type="submit">Dodavanje</button>
 </form>
   
<?php 
  include_once('includes/footer.php');
?>