<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") 
		{
			$flag = true;
			$username = sanitize($_POST['username']);
			$password = sanitize($_POST['password']);

			if (empty($username)) {
				echo "<P align='center'>Please write a username</p>";
				$flag = false;
			}
			if (empty($password)) {
				echo "<p align='center'>Please write valid password</p>";
				$flag = false;
			}
			if ($flag===true){
				echo "<p align ='center'>Logged into the account successfully</p>";
				echo '<p align = "center">Do not have an account ? Registration 
				<a href="Registration.html">here</a>
				</p>';
			}
		}
		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</body>
</html>