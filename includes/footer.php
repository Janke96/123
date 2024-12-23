<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Example</title>
  <script>
    function displayCurrentDate() {
      var currentDate = new Date();
      var dateString = currentDate.toDateString();
      document.getElementById('currentDate').textContent = dateString;
    }
  </script>
</head>
<body onload="displayCurrentDate()">

 <hr> 
  <footer>
   <p>&copy; Autor aplikacije: Milos Jankovic - <span id="currentDate"></span></p>
  </footer>
 </body>
</html>

