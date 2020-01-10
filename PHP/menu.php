<?php 
	include_once 'db_connection.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
	Name: Tarik Muharem
	Course: Web Application Development
	Assignment: Project1
	Due date: 24.11.2019
	Purpose: First update  -->
	<meta charset="utf-8">
	<meta name="author" content="Tarik Muharem">
	<meta name="description" content="Project1">
	<title>Mačak</title>
	<link href="../CSS/index.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../JS/index.js"></script>
</head>
<body>
	<div class="headder">
		<div class="eyes">
			<div class="eye">
				<div class="ball"></div>
			</div>
			<div class="eye">
				<div class="ball"></div>
			</div>
		</div>
		<h3>MAČAK</h3>
	</div>
	<div class="navigation" id="topnavigation">
		<a href="../#about-us"><i class="fa fa-fw fa-home"></i> O nama</a>
		<a href="../#slideshow"><i class="fa fa-fw fa-photo"></i> Galerija</a>
		<a href="menu.php"><i class="fa fa-fw fa-list"></i>  Cjenovnik</a>
		<a href="../#location"><i class="fa fa-fw fa-map"></i>  Naša lokacija</a>
	</div>
	<div class="menu">
		<table id="cjenovnik" style="margin-left: 43%; margin-bottom: 10%; color: white; background-color: #333; text-align: center;">
			<thead>
				<tr>
					<th>Drinks</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<tr style=""> 
					<td> 
					<?php 
						$sql = "SELECT name, quantity, price FROM drinks;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result)) {
								echo "<tr><td>".$row['name']."</td><td>".$row['quantity']."</td><td>".$row['price']."</td></tr><br>";
							}
						}
						?>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script src="JS/index.js"></script>
</body>
</html>