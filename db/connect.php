<?php

 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost","root","","baza");
 if (!$bp)
   die('Greška pri povezivanju s bazom podataka.');
?>