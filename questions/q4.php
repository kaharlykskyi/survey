<?php 
	include_once("../layouts/header.php");
	session_start();
	if (isset($_POST['submit'])) {
		$_SESSION['answers']['3'] = $_POST['answer3'];
	}
?>
<div class="col-md-8 col-md-offset-2 welcome">
	<h3><strong>#4</strong> What are the 7 continents?</h3>
	<hr>
	<form class="form-horizontal" action="q5.php" method="POST">
		<fieldset>
				<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="textinput1" type="text" placeholder="enter the answer" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group"> 
					  <div class="col-md-8">
					  <input id="textinput" name="textinput2" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="textinput3" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="textinput4" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="textinput5" type="text" placeholder="enter the answer" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group"> 
					  <div class="col-md-8">
					  <input id="textinput" name="textinput6" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="textinput7" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
				</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" class="btn btn-success" name="submit" value="Next">
				</div>
			</div>		
		</fieldset>
	</form>
</div>

<?php include_once("layouts/footer.php") ?>
