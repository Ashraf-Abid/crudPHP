<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<?php require_once 'process.php';?>
	<div class="container">
	<?php 
		$mysqli=new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
		$result=$mysqli->query("select * from data") or die($mysqli->error);
		?>
		<div class="row justify-content-center">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Locaiton</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<?php
				while($row=$result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['location'];?></td>
					<td></td>
				</tr>
			<?php endwhile;?>



			</table>

		</div>
		<?php
		#pre_r($result);
		pre_r($result->fetch_assoc());
		function pre_r( $array ){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	 ?>
	<div class="row justify-content-center">
		<form action="process.php" method="POST">
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="Enter Your name">	
	</div>
	<div class="form-group">
		<label>Location</label>
		<input type="text" name="location" class="form-control" value="Enter Your location">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"  name="save">Save</button>
	</div>
	 	</form>
	</div>
	</div>

</body>
</html>