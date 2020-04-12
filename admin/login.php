<?php
	require_once"../db_connection.php";

	if(isset($_POST["submit"])){
		$a_id=$_POST["a_id"];
		$password=$_POST["password"];

		// echo $s_id."<br>";
		// echo $password;

		if ($a_id==null || $password==null) {
		
			echo "Invalid ID or Password";
			header("Location: login.php");
		}
		else {
			$sql="SELECT `id`, `a_id`, `password`, `name`, `designation`, `mobile_no`, `image_url`, `present_address`, `parmanent_address` FROM `admin` WHERE a_id='$a_id' AND password='$password'";

			$result = mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($result)){
				if ($row['a_id']==$a_id && $row['password']==$password){
					$name=$row['name'];
					session_start();
					$_SESSION['a_id']=$a_id;
					echo '<script type="text/javascript">alert("Hello, '.$name.' \n Wellcome to Admin Panel");window.location =  "login_process.php";</script>';
				}
				else{
					echo '<script type="text/javascript">alert("Invalid ID or Password");window.location =  "login.php";</script>';
				}

			}
		}
	}
?>

<?php
	require_once"../db_connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login || SAHS</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="icon" type="image/ico" href="../img/logo.png">
		<style type="text/css">
			.welcome {
				margin-top: 20px;
				background-color: white;
				padding: 20px;
			}
			.text-center {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center welcome" id="bs-name">
			Sadipur Adarsha High School 
		</h1>
		<div class="main-login text-center">
			<div class="login-box">
				<h1>Admin Login</h1>
					<form action="" method="POST">
						<div class="textbox">
							<!-- <i class="material-icons">person</i> -->
							<input type="text" name="a_id" placeholder="Enter ID">
						</div>
						<div class="textbox">
							<!-- <i class="material-icons">vpn_key</i> -->
							<input type="password" name="password" placeholder="Password" >
						</div>
						<input type="submit" name="submit" class="btn" value="Submit" >
				</form>
			</div>
		</div>
		<div style="clear: both;"></div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
			var sec=20;
			var waitClock = setInterval(onGenerateColor,1000);
			function onGenerateColor() {
				if(sec == 1) {
					sec=20;
				}
				sec--;
				var r = Math.floor((Math.random() * 254) + 1); 
				var g = Math.floor((Math.random() * 254) + 1); 
				var b = Math.floor((Math.random() * 254) + 1);
				var rgb = r+','+g+','+b;
				$('#bs-name').css('color','rgb('+rgb+')');
			}
		</script>