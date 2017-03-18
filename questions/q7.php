<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][7])) {
	$_SESSION['time_answer'][7]['time_end'] = time() + 120;
	$_SESSION['time_answer'][7]['time_start'] = time();
	$_SESSION['time_answer'][6]['time_answer'] = time() - $_SESSION['time_answer'][6]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][7]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][7]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit6'])) {
		$answer6 = array();
		$answer6[] = [$_POST['q6_1'],
		$_POST['q6_2'],
		$_POST['q6_3'],
		$_POST['q6_4'],
		$_POST['q6_5']
		];
		$_SESSION['answers']['6'] = $answer6;
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
	<h3><strong>#7</strong> Solve for y in the equation below where x=2 and z=4: <span class="label label-info">Y = 3x+5-2z</span></h3>
	<hr>
	<form id="target" class="form-horizontal" action="q8.php" method="POST">
		<fieldset>
			<div class="form-group">
			  <div class="col-md-4 col-md-offset-4">
			    <div class="input-group">
			      <span class="input-group-addon">Y = </span>
			      <input name="answer7" class="form-control" type="number" min="1" step="0.25" required>
			    </div>
			  </div>
			</div>			
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" name="submit7" class="btn btn-success" value="Next">
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