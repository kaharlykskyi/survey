<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][17])) {
	$_SESSION['time_answer'][17]['time_end'] = time() + 30;
	$_SESSION['time_answer'][17]['time_start'] = time();
	$_SESSION['time_answer'][16]['time_answer'] = time() - $_SESSION['time_answer'][16]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][17]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][17]['time_end']) {
		$time = 0;
	}


if (isset($_POST['submit16'])) {
	$answer16 = array();
	$answer16[] = [$_POST['q16_1'],
	$_POST['q16_2'],
	$_POST['q16_3']
	];
	$_SESSION['answers']['16'] = $answer16;
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
	<h3><strong>#17</strong> What is the perimeter of the following shape? </h3>
	<hr>
	<form id="target" class="form-horizontal" action="q18.php" method="POST">
		<fieldset>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-3">
					<div class="area-img perimeter">
					<img src="../assets/img/17.png" alt="area" class="img-thumbnail img-responsive">
				</div>
				<div class="answer-input">
					<label class="control-label pull-left answer" for="textinput">Answer:</label>  
					<div class="col-md-7">
				  		<input id="textinput" name="answer17" type="number" max="99999" min="1" class="form-control input-md" required>
					</div>
				</div>
				</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit17" class="btn btn-success" value="Next">
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

			if(obj.innerHTML <= 20) {				
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