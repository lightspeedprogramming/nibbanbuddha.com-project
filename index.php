<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
	<select name="country">
		<option value="india">India</option>
		<option value="china">China</option>
	</select>
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php
	if($_GET['submit']){
		$country = $_GET['country'];
		echo $country;
	}
	
?>