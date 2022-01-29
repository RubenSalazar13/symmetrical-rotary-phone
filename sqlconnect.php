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
  ?>