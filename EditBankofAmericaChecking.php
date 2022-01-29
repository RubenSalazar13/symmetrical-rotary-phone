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

$sql = "SELECT * FROM bankofamericachecking WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die("Bad Query: $sql");
$row = mysqli_fetch_array($result);

$sql = "SELECT * FROM bankofamericachecking WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die("Bad Query: $sql");
$row = mysqli_fetch_array($result);
}
$ID = "";
$Checking ="";


function getPosts()
{
	$posts[0] = $_POST['ID'];
	$posts[1] = $_POST['Checking'];

	return $posts;
}

//search
if(isset($_POST['search']))
{
	$data = getPosts();

$searchQuery = "SELECT * FROM bankofamericachecking WHERE ID = $data[0]";
$search_Result = mysqli_query($con, $searchQuery);

if($search_Result)
{
	if(mysqli_num_rows($search_Result))
	{
		while($row = mysqli_fetch_array($search_Result))
		{
			$ID = $row['ID'];
			$Checking = $row['Checking'];
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
	$update_Query = "UPDATE `bankofamericachecking` SET `Checking`='$data[1]' WHERE `ID` = $data[0]";
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
	$delete_Query = "DELETE FROM `bankofamericachecking` WHERE `ID` = $data[0]";
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
  <title>New Recipes</title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
      <?php
  echo "<h1>Edit Wells Fargo Checking</h1>";?>
    <h1><?php echo $ID ?></h1>
  
  <form action="EditBankofAmericaChecking.php?ID={$row['ID']}" method="post" enctype="multipart/form-data">
  	<label>ID Number</label>
  	<input type="text" name="ID" placeholder="<?php echo $ID;?>" value="<?php echo $ID;?>"><br><br>
  	<label>Checking Name</label>
  	<input type="text" name="Checking" placeholder="Checking Name" size="50" value="<?php echo $Checking;?>"><br><br>
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