<?php 
	include_once("../layouts/header.php");
	session_start();
	if (isset($_POST['submit'])) {
		$_SESSION['answers']['1'] = $_POST['answer1'];
	}
?>

<div class="col-md-8 col-md-offset-2 welcome">
	<h3><strong>#2</strong> What is the volume of the following cube, if AB = 15</h3>
	<hr>
	<form class="form-horizontal" action="q3.php" method="POST">
		<fieldset>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-3">
					<div class="cube-img">
					<img src="../assets/img/cube.png" alt="cube" class="img-thumbnail img-responsive">
				</div>
				<div class="answer-input">
					<label class="control-label pull-left answer" for="textinput">Answer:</label>  
					<div class="col-md-5">
				  		<input id="textinput" name="answer2" type="number" max="99999" min="1" class="form-control input-md" required>
					</div>
				</div>
				</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit" class="btn btn-success" value="Next">
				</div>
			</div>		
		</fieldset>
	</form>
</div>

<?php include_once("layouts/footer.php") ?>