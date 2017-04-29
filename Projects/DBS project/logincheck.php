<?php 
$dbc=mysqli_connect("localhost","root","Dattu@3121","RevelsTest") or die('cant connect');


	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
	$err = "";
	$c = mysqli_num_rows($result);
	if ($c>=1) {
		header('Location:index.php');		
	}	
	else{
		$err = "Invalid username and password";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<style>
	body{
		background-color: black;
	}
	.pos{
		margin-top: 200px;
		margin-left: 570px;
	}
	.pos1{
		margin-top: 10px;
		margin-left: 570px;
	}
	.pos2{
		margin-top: 10px;
		margin-left: 600px;
	}
	.pos3{
		margin-top: 10px;
		margin-left: 10px;
	}
	h2{
		font-family: monospace;
		color:brown;
	}
	#btn1{
		margin-left: 10px;
	}
	</style>
</head>
<body>
<h1 class="text-primary text-center"><b>SPORTS PORTAL</b></h1>
<h2 class="text-center">Login</h2>
<br>
<div class="container"> 
<form action="logincheck.php" class="form-horizontal" method="POST">
	<div class="form-group">
		<div class="col-sm-4 col-sm-offset-4 col-xs-12">
			<input class="form-control" type="text" name="username" placeholder="USER-ID" id="name" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-4 col-sm-offset-4 col-xs-12">
			<input class="form-control" type="password" name="password" placeholder="PASSWORD" id="name" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-4 col-sm-offset-4 col-xs-12">
			<?php 
				if(!empty($err)){
					echo '<label style="color:red"><b>'.$err.'</b></label>';
				}
			?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-4 col-sm-offset-5 col-xs-12">
			<button type="submit" id="btn1" class="btn btn-primary "><i class="fa fa-paper-plane"></i>Login</button>
			<button type="reset"  class="btn btn-primary "><i class="fa"></i>Reset</button>
		</div>
	</div>
</form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 

</body>
</html>