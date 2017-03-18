<?php 
include_once("../layouts/header.php");
session_start();
if (isset($_POST['submit'])) {
	$answer4 = array();
	$answer4[] = [$_POST['textinput1'],
	$_POST['textinput2'],
	$_POST['textinput3'],
	$_POST['textinput4'],
	$_POST['textinput5'],
	$_POST['textinput6'],
	$_POST['textinput7']
	];
	$_SESSION['answers']['4'] = $answer4;
	//echo "<pre>"; print_r($_SESSION['answers']['4']); echo "</pre>";
}

?>

<div class="col-md-8 col-md-offset-2 welcome">
	<h3><strong>#5</strong> Solve the following equation for x: <span class="label label-info">x+4 = 2x+2</span></h3>
	<hr>
	<form class="form-horizontal" action="q6.php" method="POST">
		<fieldset>
			<div class="form-group">
			  <div class="col-md-4 col-md-offset-4">
			    <div class="input-group">
			      <span class="input-group-addon">X = </span>
			      <input name="answer5" class="form-control" type="number" min="1" step="0.25" required>
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
