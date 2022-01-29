<!DOCTYPE html>
<html>
<head> 
	<title>Vertical menu with CSS</title>
	<link rel="stylesheet" href="font-awesome.css">
	<style type="text/css">
		body{
			padding:0;
			margin:0; 
		}
		.menu ul{
			list-style: none;
			margin:0;
			padding: 0;
		}
		.menu ul li{
			padding: 15px;
			position: relative;
			width: 150px;
			vertical-align: middle;
			background-color: #34495E;
			cursor: pointer;
			border-top: 1px solid #BDC3C7;
		}
		.menu ul li:hover{
			background-color: #2ECC71;
		}
		.menu > ul > li{
			border-right: 5px solid #F1C40F;
		}
		.menu ul ul{
			transition: all 0.3s;
			opacity: 0;
			position: absolute;
			border-left: 5px solid #F1C40F;
			visibility: hidden;
			left: 100%;
			top:-2%;
		}
		.menu ul li:hover > ul {
			opacity: 1;
			visibility: visible;
		}
		.menu ul li a{
			color: #fff;
			text-decoration: none;
		}
		span{
			margin-right: 15px;
		}
		margin > ul > li:nth-of-type(2)::after{
			content: "+";
			position: absolute;
			margin-left: 30%;
			color: #fff;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href=""><span class="fa fa-users"></span>Homes</a></li>
			<li><a href=""><span class="fa fa-users"></span>Users</a>
              <ul>
              	<li><a href="">Add</a></li>
              	<li><a href="">Edit</a></li>
              	<li><a href="">Delete</a></li>
              </ul>
		    </li>
			<li><a href="">Web</a></li>
			<li><a href="">Database</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
	</div>
</body>
</html>