<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body>
  <center>
<h1>Credit Card Rates</h1>
 <table style="width:100%">
<table class="content-table">
    <thead>
    <tr>
    <th>Credit Card</th>
    <th>Rate</th>
    <th>APR</th>
  </tr>
</thead>
<tbody>
<?php
//2 make a connection
  $con = mysqli_connect(HOST, USER, PASS, BASE);

  $sql = "SELECT * FROM wellscreditcard";
  $result = $con -> query($sql);

   if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["CreditCard"] ."</td><td>".
            $row["Rate"] .'%'."</td><td>".
            $row["APR"].'%'."</a><br>"."</td><tr>";
    }
    echo "</table>";
  }
  else {
    echo "0 result";
  }
  $con-> close();
  ?>
 </tbody>
</thead>
</center>
</body>
</html>