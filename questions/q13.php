<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][13])) {
	$_SESSION['time_answer'][13]['time_end'] = time() + 60;
	$_SESSION['time_answer'][13]['time_start'] = time();
	$_SESSION['time_answer'][12]['time_answer'] = time() - $_SESSION['time_answer'][12]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][13]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][13]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit12'])) {
		$answer12[] = [$_POST['q12_1'],
		$_POST['q12_2'],
		$_POST['q12_3'],
		$_POST['q12_4'],
		$_POST['q12_5'],
		$_POST['q12_6'],
		$_POST['q12_7'],
		$_POST['q12_8'],
		$_POST['q12_9']
		];
		$_SESSION['answers']['12'] = $answer12;
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
	<h4><strong>#13</strong> If John is 5 years older than Sally, Sally is half the age of Bob, and Bob is 10, then how old is John?</h4>
	<hr>
	<form id="target" class="form-horizontal" action="q14.php" method="POST">
		<fieldset>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="control-label pull-left answer" for="textinput">Answer:</label>  
					<div class="col-md-6">
				  		<input id="textinput" name="answer13" type="number" min="1" step="0.25" class="form-control input-md" required>
					</div>
				</div>
			</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit13" class="btn btn-success" value="Next">
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