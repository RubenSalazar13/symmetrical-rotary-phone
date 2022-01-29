<!DOCTYPE html>
<html>
	<head>
    <title>Upload Wells Fargo Auto Loan Daily Rates</title>
    <link href="css/style.css" rel="stylesheet">
<script scr="js/jquery-3.5.1.min"></script>
</head>
<?php 
if(isset($_GET['ID'])) {
include('sqlconnect.php');
include('nav.php');
$ID = mysqli_real_escape_string($con, $_GET['ID']);

$sql = "SELECT * FROM data WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die("Bad Query: $sql");
$row = mysqli_fetch_array($result);

$sql = "SELECT * FROM data WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die("Bad Query: $sql");
$row = mysqli_fetch_array($result);
}
$ID = "";
$name ="";
$rate ="";
$apr = "";





function getPosts()
{
	$posts[0] = $_POST['ID'];
	$posts[1] = $_POST['name'];
	$posts[2] = $_POST['rate'];
	$posts[3] = $_POST['apr'];

	return $posts;
}

//search
if(isset($_POST['search']))
{
	$data = getPosts();

$searchQuery = "SELECT * FROM data WHERE ID = $data[0]";
$search_Result = mysqli_query($con, $searchQuery);

if($search_Result)
{
	if(mysqli_num_rows($search_Result))
	{
		while($row = mysqli_fetch_array($search_Result))
		{
			$ID = $row['ID'];
			$name = $row['name'];
			$rate = $row['rate'];
			$apr = $row['apr'];
		}
	}else{
		echo 'No Data For This id';
	   }
	}else{
		echo 'Result Error';

	}
}
if(isset($_POST['update']))
{
	$data = getPosts();
	$update_Query = "UPDATE `data` SET `name`='$data[1]', `rate`='$data[2]', `apr`='$data[3]' WHERE `ID` = $data[0]";
	try{
		$update_Result = mysqli_query($con, $update_Query);

		if($update_Result)
		{
			if(mysqli_affected_rows($con) > 0)
			{
				echo 'Data Updated';
			}else{
				echo 'Data Not Updated';
			}
		}
	}catch (Exception $ex) {
		echo 'Errror Update '.$ex->getMessage();
	  }
	}
if(isset($_POST['delete']))
{
	$data = getPosts();
	$delete_Query = "DELETE FROM `data` WHERE `ID` = $data[0]";
	try{
		$delete_Result = mysqli_query($con, $delete_Query);

		if($delete_Result)
		{
			if(mysqli_affected_rows($con) > 0)
			{
				echo 'Data Deleted';
			}else{
				echo 'Data Not Deleted';
			}
		}
	}catch (Exception $ex) {
		echo 'Errror Delete '.$ex->getMessage();
	}
	
}
?>
</!doctype html>
<html>
<head>
  <title>Edit Credit Cards Rates</title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
      <?php
  echo "<h1>Edit Bank of America CreditCards</h1>";?>
    <h1><?php echo $ID ?></h1>
  
  <form action="EditBankofAmericaCredit.php?ID={$row['ID']}" method="post" enctype="multipart/form-data">
  	<label>ID Number</label>
  	<input type="text" name="ID" placeholder="<?php echo $ID;?>" value="<?php echo $ID;?>"><br><br>
  	<label>Auto Loan Name</label>
  	<input type="text" name="name" placeholder="CreditCard Name" size="50" value="<?php echo $name;?>"><br><br>
  	<label>Rate</label>
  	<input type="text" name="rate" placeholder="Rate" value="<?php echo $rate;?>"><br><br>
  	<label>APR</label>
  	<input type="text" name="apr" placeholder="APR" value="<?php echo $apr;?>"><br><br>

<br><br>
  	<div>
  		<input type="submit" name="update" value="Update">
  		<input type="submit" name="delete" value="Delete">
  		<input type="submit" name="search" value="Find">
  	</div>
  </form>
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