<html>
<head>
<?php 
include('sqlconnect.php');
include('nav.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Daily Rates</title>
    <link href="css/style.css" rel="stylesheet">
<script scr="js/jquery-3.5.1.min"></script>
</head>
<body>
    <center>
    <h1>Bank of America Checking Rates Input</h1>
    </center>
<br>
<form method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="name" placeholder="Name"><br><br>
    <label>Rate</label>
    <input type="text" name="rate" placeholder="Rate"><br><br>
        <label>APR</label>
    <input type="text" name="apr" placeholder="ARP"><br><br>
        <label>Type</label>
      <select id="type" name="type">
    <option value="Checking">Checking</option>
    <option value="CreditCard">Credit Card</option>
    <option value="Auto">Auto</option>
  </select><br><br>
    <label>Bank</label>
      <select id="bank" name="bank">
    <option value="WellsFargo">Wells Fargo</option>
    <option value="BankofAmerica">Bank of America</option>
    <option value="Zion">Zions Bank Corp</option>
  </select><br><br>
    <input class='enter' type="submit" name="submit">
 
 
</form>
 
</body>
</html>
<?php
if (isset($_POST["submit"]))
 {
    #retrieve file title
        $name = $_POST["name"];

        #retrieve file title
        $rate = $_POST["rate"];
    #sql query to insert into database
    $sql = "INSERT into data (name,rate) VALUES('$name','$rate')";
 
    if(mysqli_query($con,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
 $("#menu-toggle").click(function() {
    $("#side-nav").toggle(1000);
 });
});
</script>
</body>
</html>
