<?php 
	include_once("../layouts/header.php");
	include_once("../components/db.php");
	session_start();
	$_SESSION['time_answer'][20]['time_answer'] = time() - $_SESSION['time_answer'][20]['time_start'];
	if (isset($_POST['submit20'])) {
		$db = Db::getConnection();

		if ($db == false) {
			echo "Thanks! Can not connect to databases!"; die();
		} else {
			$_SESSION['answers']['20'] = $_POST['answer20'];
			$sql = "INSERT INTO user (username, time_start) VALUES (:username, :time_start);";
			$result = $db->prepare($sql);
			$result->bindParam(':username', $_SESSION['name'], PDO::PARAM_STR);
			$result->bindParam(':time_start', $_SESSION['time_start'], PDO::PARAM_STR);
			$result->execute();

			$res = $db->query("SELECT max(id) as id FROM user");
			$_SESSION['user_id'] = $res->fetch(PDO::FETCH_ASSOC)['id'];

			foreach($_SESSION['answers'] as $key => $val) {
				if (is_array($val)) {
					$answer = implode(';', $val[0]);

				} else {
					$answer = $val;
				}

				if ($key <= 5) {
					$_SESSION['time_answer'][$key]['time_answer'] = 0;
				}

				$sql = "INSERT INTO answers (user_id, question_id, user_answer, answer_time) VALUES (:user_id, :question_id, :user_answer, :answer_time)";
				$res = $db->prepare($sql);
				$res->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
				$res->bindParam(':question_id', $key, PDO::PARAM_INT);
				$res->bindParam(':user_answer', $answer, PDO::PARAM_STR);
				$res->bindParam(':answer_time', $_SESSION['time_answer'][$key]['time_answer'], PDO::PARAM_STR);
				$res->execute();
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 welcome thanks">
				<h1>Thanks!</h1>
			</div>
		</div>
	</div>
</body>
</html>