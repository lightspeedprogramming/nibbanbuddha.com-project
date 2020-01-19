<?php extract($_REQUEST);?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width , initial-scale= 1">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>display</title>
</head>
<body>
	<div class="container">
		<div class="form-group">
			<div class="row">
				<div col-md-6><label for="name">Name</label></div>
				<div col-md-6><?php echo $salutaion ?></div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div col-md-6><label for="name">Name</label></div>
				<div col-md-6><?php echo $salutaion ?></div>
			</div>
		</div>

	</div>	
</body>
</html>

<?php
	
	if(isset($submit)){

	echo $salutation;
	echo "<br>". $fn. "<br>";
	echo "<br>". $countrycode. "<br>";
	echo "<br>". $address. "<br>";
	echo "<br>". $city. "<br>";
	echo "<br>". $state. "<br>";
	echo "<br>". $country. "<br>";
	echo "<br>". $pin. "<br>";
	echo "<br>". $gender. "<br>";
	echo "<br>". $dob. "<br>";
	echo "<br>". $countrycodelandline. "<br>";
	echo "<br>". $dobs. "<br>";
	echo "<br>". $stdcode. "<br>";
	echo "<br>". $lno. "<br>";
	echo "<br>". $occupation. "<br>";
	echo "<br>". $designation. "<br>";
	echo "<br>". $organization. "<br>";
	echo "<br>". $lang. "<br>";
	echo "<br>". $contribution. "<br>";
	echo "<br>". $designation. "<br>";
	echo "<br>". $email. "<br>";
	echo "<br>". $lang. "<br>";





}
	

?>