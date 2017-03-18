<?php 
	include_once("../layouts/header.php");
	session_start();
	if (isset($_POST['submit'])) {
		$_SESSION['answers']['2'] = $_POST['answer2'];
	}
?>

<div class="col-md-8 col-md-offset-2 welcome">
	<h4><strong>#3</strong> If you have a job that pays $150.50 a week, and you work for 3 weeks and 2 days,<br> how much do you get payed?</h4>
	<hr>
	<form class="form-horizontal" action="q4.php" method="POST">
		<fieldset>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="control-label pull-left answer" for="textinput">Answer:</label>  
					<div class="col-md-6">
				  		<input id="textinput" name="answer3" type="number" min="1" step="0.25" class="form-control input-md" required>
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