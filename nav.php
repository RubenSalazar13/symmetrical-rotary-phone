<head>
	<link href="font-awesome.css">
		<div id="menu-container"></div>
	<img id="menu-toggle" src="img/burger.webp" style="width:25px;height:30px;">
	<div>
		<div id=menu-toggle1></div>
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
			border-right: 5px solid #e74c3c;
		}
		.menu ul ul{
			transition: all 0.3s;
			opacity: 0;
			position: absolute;
			border-left: 5px solid #e74c3c;
			visibility: hidden;
			left: 100%;
			top:-2%;
		}
		.menu ul ul ul{
			transition: all 0.3s;
			opacity: 0;
			position: absolute;
			border-left: 5px solid #e74c3c;
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
</header>
<nav id="side-nav">
	<div class="menu">
	<ul>
		<li><a href="index.php"><span class="fa fa-home"></span>Home</a></li>
		<li><a href="form2.php"><span class="fa fa-plus"></span>Add</a></li>
		<li><a href="data.php"><span class="fa fa-wrench"></span>Update</a></li>
        </ul>
  </div>
</nav>