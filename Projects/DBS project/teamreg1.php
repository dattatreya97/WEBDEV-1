<?php
	$sport = $_POST['sport'];
	$gender = $_POST['gender'];

	if ($sport == "Football" && $gender=="Male") {
		header('location:http://localhost/revels/footballmen.php');	
	}
	if ($sport == "Football" && $gender=="Female") {
		header('location:http://localhost/revels/footballwomen.php');
	}
	if ($sport == "Basketball" && $gender=="Male") {
		header('location:http://localhost/revels/basketballmen.php');
	}
	if ($sport == "Basketball" && $gender=="Female") {
		header('location:http://localhost/revels/basketballwomen.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap-social.css" rel="stylesheet">
	<title>Team Registration</title>
</head>
<body>
	<?php include_once("header.php") ?>
	<div class="container gap"> 
		<?php include_once("menu.php") //occupies 2 col ?>
			<div class="col-sm-10"> 
				<form action="teamreg1.php" method="post">
					<div class="col-sm-4">		                 
		                      <label class="label-name">Sport</label>		                 
		                  <br>		                  
		                      <select class="form-control" name="sport">
								<option  value="Football">Football</option>
								<option  value="Basketball">Basketball</option>
							   </select>		                  
	              	</div>  
					<div class="col-sm-4">		                  
		                      <label class="label-name">Gender</label>		                 	                 
		                      <select class="form-control" name="gender">
									<option  value="Male">Male</option>
									<option  value="Female">Female</option>
							  </select>		                 
	              	</div>  
					<div class="col-sm-5">
						<br>
						<button value="submit" class="col-sm-3 btn btn-primary">Next</button>
					</div>
				</form>
			</div>
	</div>
	<?php include_once("footer.php") ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>