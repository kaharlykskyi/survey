<?php
	session_start();
	$_SESSION['time_start'] = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 welcome">
				<h1>Welcome</h1>
				<hr>
				<form action="questions/q1.php" method="post" class="form-horizontal">
					<fieldset>
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Your name:</label>  
						  <div class="col-md-4">
						  	<input id="textinput" name="name" type="text" class="form-control input-md" required>
						  </div>
						</div>
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit" class="btn btn-success" value="Start survey">
				</div>
					</fieldset>
				</form>
				
				<div class="clearfix"></div>
				<div class="alert alert-info alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong>Information!</strong>
						<div class="information">
							<p>- <b>Unlimited time questions: </b>1-5</p>	
							<p>- <b>2 min time questions:</b> 6-10</p>
							<p>- <b>1 min time questions:</b> 11-15</p>
							<p>- <b>30 seconds time questions:</b> 16-20</p>
						</div>
				</div>
			</div>

<?php include_once("layouts/footer.php") ?>