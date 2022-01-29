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
    <h1>Insert New Information</h1>
    </center>
<br>
<form method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="Name" placeholder="Name"><br><br>
    <label>Type</label>
      <select id="type" name="Type">
    <option value="Checking">Checking</option>
    <option value="CreditCard">Credit Card</option>
    <option value="Auto">Auto</option>
  </select><br><br>
    <label>Rate</label>
    <input type="text" name="Rate" placeholder="Rate"><br><br>
        <label>APR</label>
    <input type="text" name="APR" placeholder="ARP"><br><br>
    <label>Bank</label>
      <select id="bank" name="Bank">
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
        $Name = $_POST["Name"];
        #retrieve file title
        $Type = $_POST["Type"];
        #retrieve file title
        $Rate = $_POST["Rate"];
        #retrieve file title
        $APR = $_POST["APR"];
        #retrieve file title
        $Bank = $_POST["Bank"];
    #sql query to insert into database
    $sql = "INSERT into banks (Name,Type,Rate,APR,Bank) VALUES('$Name','$Type','$Rate','$APR','$Bank')";
 
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
