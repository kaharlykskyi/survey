<?php 
	include_once("../layouts/header.php");
	if ( !session_id() ) session_start();

	if (empty($_SESSION['time_answer'][6])) {
		$_SESSION['time_answer'][6]['time_end'] = time() + 120;
		$_SESSION['time_answer'][6]['time_start'] = time();
	}

	// time left
	$time = $_SESSION['time_answer'][6]['time_end'] - time();
	if (time() > $_SESSION['time_answer'][6]['time_end']) {
		$time = 0;
	}

	if (isset($_POST['submit'])) {
		$_SESSION['answers']['5'] = $_POST['answer5'];
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
	<h3><strong>#6</strong> What are the 5 seas?</h3>
	<hr>
	<form id="target" class="form-horizontal" action="q7.php" method="POST">
		<fieldset>
				<!-- Text input-->
				<div class="form-group">
				  <div class="col-md-5">
				  <input id="input6" name="q6_1" type="text" placeholder="enter the answer" class="form-control input-md"> 
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group"> 
				  <div class="col-md-5">
				  <input id="input6" name="q6_2" type="text" placeholder="enter the answer" class="form-control input-md">
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <div class="col-md-5">
				  <input id="input6" name="q6_3" type="text" placeholder="enter the answer" class="form-control input-md">
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <div class="col-md-5">
				  <input id="input6" name="q6_4" type="text" placeholder="enter the answer" class="form-control input-md">
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <div class="col-md-5">
				  <input id="input6" name="q6_5" type="text" placeholder="enter the answer" class="form-control input-md"> 
				  </div>
				</div>			
				<div class="col-md-4 col-md-offset-5 start">
						<input type="submit" class="btn btn-success" name="submit6" value="Next">
				</div>		
		</fieldset>
	</form>
	<div class="clearfix"></div>
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
				$('.alert-success').removeClass('alert-success');
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