<html>
<head>
  <title>Input Daily Rates</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
   <script scr="js/jquery-3.5.1.min"></script>
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body>
  <?php
include('nav.php');
  ?>
  <center>
<h1>Bank of America Auto Daily Rates</h1>
 <table style="width:100%">
<table class="content-table">
    <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Rate</th>
  </tr>
</thead>
<tbody>
<?php
//1 define constants
if ($_SERVER['HTTP_HOST'] == "localhost")
{
  define("HOST", "localhost");
  define("USER", "root");
  define("PASS", "");
  define("BASE", "comparison");
}
else
{
  define("HOST", "localhost:3306");
  define("USER", "rubensal_Ruben");
  define("PASS", "NEBURS13neburs88!");
  define("BASE", "rubensal_recipes");
}
//2 make a connection
  $con = mysqli_connect(HOST, USER, PASS, BASE);

  $sql = "SELECT * FROM bankofamericaauto";
  $result = $con -> query($sql);

   if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["ID"] ."</td><td>".
            $row["AutoLoan"] ."</td><td>".
            $row["Rate"] ."</td><td>".
            $row["APR"] .'%'."</a><br>"."</td><td>".
            "<a href='EditBankofAmericaAuto.php?id={$row["ID"]}'><button id='myBtn' type='button' onclick='myFunction' class='button2';\">Edit</button>". "</td><tr>";
    }
    echo "</table>";
  }
  else {
    echo "0 result";
  }
  $con-> close();
  ?>
 </tbody>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
$(document).ready(function() {
 $("#menu-toggle").click(function() {
  $("#side-nav").toggle(1000);
 });
});
</script>
</center>
</body>
</html>