<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][16])) {
	$_SESSION['time_answer'][16]['time_end'] = time() + 30;
	$_SESSION['time_answer'][16]['time_start'] = time();
	$_SESSION['time_answer'][15]['time_answer'] = time() - $_SESSION['time_answer'][15]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][16]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][16]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit15'])) {
		$_SESSION['answers']['15'] = $_POST['answer15'];
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
	<h3><strong>#16</strong> What is the name of the 3 north American countries?</h3>
	<hr>
	<form id="target" class="form-horizontal" action="q17.php" method="POST">
		<fieldset>
				<div class="col-md-6">
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q16_1" type="text" placeholder="enter the answer" class="form-control input-md"> 
					  </div>
					</div>

				<!-- Text input-->
					<div class="form-group"> 
					  <div class="col-md-8">
					  <input id="textinput" name="q16_2" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

				<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q16_3" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
				</div>			
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" class="btn btn-success" name="submit16" value="Next">
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