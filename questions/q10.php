<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][10])) {
	$_SESSION['time_answer'][10]['time_end'] = time() + 120;
	$_SESSION['time_answer'][10]['time_start'] = time();
	$_SESSION['time_answer'][9]['time_answer'] = time() - $_SESSION['time_answer'][9]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][10]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][10]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit'])) {
		$_SESSION['answers']['10'] = $_POST['answer10'];
	}
?>
<div class="col-md-4 col-md-offset-5">
			<div class="time">
				<div class="alert alert-success">
					<b>Time: </b><span><i id="timer_inp"><?= $time ?></i><i id='secs'>&nbsp;sec</i></span>
				</div>
			</div>
</div>
<div class="col-md-8 col-md-offset-2 welcome">
	<h3><strong>#10</strong> What is the Area of the following shape? </h3>
	<hr>
	<form id="target" class="form-horizontal" action="q11.php" method="POST">
		<fieldset>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-3">
					<div class="area-img">
					<img src="../assets/img/10.png" alt="area" class="img-thumbnail img-responsive">
				</div>
				<div class="answer-input">
					<label class="control-label pull-left answer" for="textinput">Answer:</label>  
					<div class="col-md-6">
				  		<input id="textinput" name="answer10" type="number" max="99999" min="1" class="form-control input-md" required>
					</div>
				</div>
				</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit10" class="btn btn-success" value="Next">
				</div>
			</div>		
		</fieldset>
	</form>
</div>

</div>
</div>
<script src="/assets/js/bootstrap.min.js"></script>
<script>
	jQuery(function($) {
		function timer(){
			var obj=document.getElementById('timer_inp');
			var secs = document.getElementById('secs');
			obj.innerHTML--;

			if(obj.innerHTML <= 25) {				
				$('.alert-success').removeClass('alert-success');
				$('.alert').addClass('alert-warning');
			}

			if(obj.innerHTML <= 10) {				
				$('.alert-warning').removeClass('alert-warning');
				$('.alert').addClass('alert-danger');
			}

			if(obj.innerHTML <= 0){
				obj.innerHTML = "is out!";
				secs.innerHTML = "";
				$('#target').submit();
				setTimeout(function(){},1000);
			}
			else{setTimeout(timer,1000);}
		}
		setTimeout(timer,1000);
	});
</script>
</body>
</html>