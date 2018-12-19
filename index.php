<?php 
include"db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>RETRIEVING DATA FROM DATABASE</title>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<link href="bootstrap.css" rel="stylesheet">
	
</head>
<body>
	<h3>Database:</h3>
	<div class="container-fluid">
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Skills</th>
			<th>Country</th>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM Users_info";
			$run_sql = mysqli_query($conn, $sql);
			while ($rows = mysqli_fetch_array($run_sql)) {
				echo "<tr>
							<td>".$rows["id"]."</td>
							<td>".$rows["name"]."</td>
							<td>".$rows["email_adress"]."</td>
							<td>".$rows["gender"]."</td>
							<td>".$rows["skill1"].", ".$rows["skill2"].", ".$rows["skill3"].", ".$rows["skill4"]."</td>
							<td>".$rows["country"]."</td>
					</tr>";
			}
			 ?>
		</tbody>
	</table>
	</div>
</body>
</html>