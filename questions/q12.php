<?php 
include_once("../layouts/header.php");
if ( !session_id() ) session_start();

if (empty($_SESSION['time_answer'][12])) {
	$_SESSION['time_answer'][12]['time_end'] = time() + 60;
	$_SESSION['time_answer'][12]['time_start'] = time();
	$_SESSION['time_answer'][11]['time_answer'] = time() - $_SESSION['time_answer'][11]['time_start'];
}
//date('i:m', $_SESSION['time_answer'][6]['time_answer']);
// time left
	$time = $_SESSION['time_answer'][12]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][12]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit'])) {
		$_SESSION['answers']['12'] = $_POST['answer12'];
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
	<h3><strong>#12</strong> What are the 9 planets in our solar system?</h3>
	<hr>
	<form id="target" class="form-horizontal" action="q13.php" method="POST">
		<fieldset>
				<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_1" type="text" placeholder="enter the answer" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group"> 
					  <div class="col-md-8">
					  <input id="textinput" name="q12_2" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_3" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_4" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_5" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_6" type="text" placeholder="enter the answer" class="form-control input-md"> 
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group"> 
					  <div class="col-md-8">
					  <input id="textinput" name="q12_7" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_8" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
					<!-- Text input-->
					<div class="form-group">
					  <div class="col-md-8">
					  <input id="textinput" name="q12_9" type="text" placeholder="enter the answer" class="form-control input-md">
					  </div>
					</div>
				</div>				
				<div class="col-md-4 col-md-offset-5 start">
					<input type="submit" class="btn btn-success" name="submit12" value="Next">
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