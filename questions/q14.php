<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][14])) {
	$_SESSION['time_answer'][14]['time_end'] = time() + 60;
	$_SESSION['time_answer'][14]['time_start'] = time();
	$_SESSION['time_answer'][13]['time_answer'] = time() - $_SESSION['time_answer'][13]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][14]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][14]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit13'])) {
		$_SESSION['answers']['13'] = $_POST['answer13'];
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
	<h3><strong>#14</strong> What does terminate not mean?</h3>
	<hr>
	<form id="target" class="form-horizontal" action="q15.php" method="POST"">
		<fieldset>
			<div class="form-group">
				<div class="radio-wrapper">
					<div class="radio">
				    <label for="radios-0">
				      <input type="radio" name="answer14" id="radios-0" value="Destroy">
				      Destroy
				    </label>
				</div>
				<div class="radio">
				    <label for="radios-1">
				      <input type="radio" name="answer14" id="radios-1" value="Break">
				      Break
				    </label>
				</div>
				<div class="radio">
				    <label for="radios-2">
				      <input type="radio" name="answer14" id="radios-2" value="End">
				      End
				    </label>
				</div>
				 <div class="radio">
				    <label for="radios-3">
				      <input type="radio" name="answer14" id="radios-3" value="Make">
				      Make
				    </label>
				</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit14" class="btn btn-success" value="Next">
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