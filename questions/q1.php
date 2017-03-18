<?php 
	include_once("../layouts/header.php");
	session_start();
	if (isset($_POST['submit'])) {
		$_SESSION['name'] = $_POST['name'];
	}
?>

<div class="col-md-8 col-md-offset-2 welcome">
	<h3><strong>#1</strong> Which of the following defines Abandon?</h3>
	<hr>
	<form class="form-horizontal" action="q2.php" method="POST"">
		<fieldset>
			<div class="form-group">
				<div class="radio-wrapper">
					<div class="radio">
				    <label for="radios-0">
				      <input type="radio" name="answer1" id="radios-0" value="To see" checked="checked" required>
				      To see
				    </label>
				</div>
				<div class="radio">
				    <label for="radios-1">
				      <input type="radio" name="answer1" id="radios-1" value="To take away">
				      To take away
				    </label>
				</div>
				<div class="radio">
				    <label for="radios-2">
				      <input type="radio" name="answer1" id="radios-2" value="To leave behind">
				      To leave behind
				    </label>
				</div>
				 <div class="radio">
				    <label for="radios-3">
				      <input type="radio" name="answer1" id="radios-3" value="To bring closer">
				      To bring closer
				    </label>
				</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit" class="btn btn-success" value="Next">
			</div>
		</fieldset>
	</form>
</div>

<?php include_once("layouts/footer.php") ?>