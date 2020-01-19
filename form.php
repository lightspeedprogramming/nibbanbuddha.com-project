<?php
	include_once 'con.php';
	extract($_REQUEST);

	$sql = "INSERT INTO registration_form (salutation,name,country_code,mob,address,city,state,country,pin,gender,dob,landline_country_code,std_code,landline_no,email,education,occupation,designation,preffered_language,organization,contribution) VALUES ('$salutation','$fn','$countrycode','$mob','$address','$city','$state','$country','$pin','$gender','$dob','$coutrycodelandline','$stdcode','$lno','$email','$education','$occupation','$designation','$preffered_language','$organization','$contribution')";
	
	if (mysqli_query($conn, $sql)) {
		echo "New Record Created Successfully";
	} else {
		echo "Error : " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<!--Custom CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand" href="#">WebSiteName</a>
				    </div>
				    <ul class="nav navbar-nav">
				      <li class="active"><a href="#">Home</a></li>
				      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Page 1-1</a></li>
				          <li><a href="#">Page 1-2</a></li>
				          <li><a href="#">Page 1-3</a></li>
				        </ul>
				      </li>
				      <li><a href="#">Page 2</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				    </ul>
				</div>
			</nav>
			<!--form starts-->
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
					<div class="container-fluid">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">
								<label>Salutation<span>*</span></label>
								<select name="salutation" class="form-control" >
									<option>Select an option</option>
									<option value="Mr">Mr.</option>
									<option value="Ms">Ms.</option>
									<option value="Prof">Prof.</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label>Full Name</label>
								<input type="text" name="fn" class="form-control"  placeholder="Full Name">
							</div>
							<div class="col-sm-3">
								<label>Mobile No.</label>
								<select name="countrycode" class="form-control" >
									<option>Select an option</option>
									<option value="India (+91)">India (+91)</option>
									<option value="Singapur (+65)">Singapur (+65)</option>
									<option value="Slovakia (+421)">Slovakia (+421)</option>
								</select>
							</div>
							<div class="col-sm-4">
								<div class="mt_25"></div>
								<input type="text" name="mob" class="form-control" >
							</div>
						</div>
					</div>

					<!---->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label>Address<span>*</span></label>
								<textarea name="address" class="form-control" placeholder="Address"></textarea>
							</div>
							<div class="col-sm-3">
								<label>City</label>
								<input type="text" name="city" class="form-control"  placeholder="City">
							</div>
							<div class="col-sm-3">
								<label>State</label>
								<input type="text" name="state" class="form-control"  placeholder="State">
							</div>
							
						</div>
					</div>

					<!---->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">
								<label>Country	<span>*</span></label>
								<select name="country" class="form-control" >
									<option value="select an option">Select an option</option>
									<option value="India">India</option>
									<option value="U.S.A">U.S.A</option>
									<option value="China">China</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label>Pincode / Zip</label>
								<input type="text" name="pin" class="form-control"  placeholder="Pincode / Zip">
							</div>
							<div class="col-sm-3">
								<label>Gender<span>*</span></label>
								<select class="form-control"  name="gender">
									<option value="Select an option">Select an option</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label>Date of Birth<span>*</span></label>
								<input type="date" name="dob" class="form-control"  name="dob">
							</div>
						</div>
					</div>

					<!---->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-2">
								<label>Landline<span>*</span></label>
								<select class="form-control"  name="coutrycodelandline">
									<option>Select an option</option>
									<option value="India (+91)">India (+91)</option>
									<option value="Singapur (+65)">Singapur (+65)</option>
									<option value="Slovakia (+421)">Slovakia (+421)</option>
								</select>
							</div>
							<div class="col-sm-2">
								<div class="mt_25"></div>
								<input type="text" name="stdcode" class="form-control"  placeholder="Std Code">
							</div>
							<div class="col-sm-2">
								<div class="mt_25"></div>
								<input type="text" name="lno" class="form-control"  placeholder="Landline No">
							</div>
							<div class="col-sm-6">
								<label>Email Address</label>
								<input type="text" name="email" class="form-control"  placeholder="Email Address">
							</div>
						</div>
					</div>

					<!---->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label>Educataion Level<span>*</span></label>
								<select class="form-control"  name="education">
									<option>Select an option</option>
									<option value="X">X</option>
									<option value="XI">XI</option>
									<option value="XII">XII</option>
								</select>
							</div>

							<div class="col-sm-6">
								<label>Occupation<span>*</span></label>
								<select class="form-control"  name="occupation">
									<option value="Select an option">Select an option</option>
									<option value="public sector">Public Sector</option>
									<option value="private sector">Private Sector</option>
									<option value="professional">Professional</option>
								</select>
							</div>
						</div>
					</div>

					<!---->
					<!---->
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Designation<span>*</span></label>
								<input type="text" name="designation" class="form-control"  placeholder="Designation">
							</div>
							<div class="col-sm-3">
								<label>Organization</label>
								<input type="text" name="organization" class="form-control"  placeholder="Organization">
							</div>
							<div class="col-sm-3">
								<label>Preferred Language</label>
								<select class="form-control" name="preffered_language">
									<option value="select an option">Select an option</option>
									<option value="english">English</option>
									<option value="hindi">Hindi</option>
									<option value="marathi">Marathi</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label>Contribution Amount (Optional)</label>
								<input type="text" name="contribution" class="form-control"  placeholder="Amount in Rupees">
							</div>
						</div>
					</div>

					<!--Submit Button-->
					<div class="form-group">
						<div class="row">
							<div class="col-lg-12">
								<input type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">
							</div>
						</div>
					</div>
				</div>
				</form>

	
	</body>
</html>