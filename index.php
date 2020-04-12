<?php
	require_once"db_connection.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome | SAHS</title>
		<!-- <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">  -->
		<style type="text/css">
			body {
				background: #07386D;
				color: #fff;
				font-family: 'Oswald', sans-serif;
			}
			.welcome {
				margin-top: 70px;
			}
			.text-center {
				text-align: center;
			}
			.scl-name {
				color: #E25738;
				font-size: 80px;
				text-align: center;
				margin-bottom: 0;
			}
			.web-link {
				text-decoration: none;
				color: #fff;
				padding: 0px 10px 5px;
				font-family: 'Play', sans-serif;
				font-size: 30px;
				border: solid 1px #E25738;
			}
			.developer {

				//background: #000;
				padding: 10px;
				font-weight: bold;
				background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));

			}
			.developer a {
				text-decoration: none;
			}
			hr {
				border: 0;
				height: 1px;
				background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 255, 255, 0.75), rgba(0, 0, 0, 0));
			}
		</style>
	</head>
	<body>
		<h1 class="text-center welcome" id="bs-name">
			Welcome to "Sadipur Adarsha High School" Web Site 
		</h1>
		
		<hr>
		
		
		<h1 class="scl-name">
			Sadipur Adarsha High School
		</h1>
		<h2 class="text-center">
			Sadipur, Gouripur, Lalpur, Natore, Bangladesh-6420.
		</h2>

		
		<hr>
		
		
		<p class="text-center">
			Please wait 
			<span id="wait-sec">
				5
			</span> 
			sec
		</p>
		<p class="text-center developer">
			Developed By: 
			<a href="https://www.facebook.com/biplob.511285" target="_blank" id="a">
				Biplob Kumar
			</a>
		</p>

		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			var sec;
			var waitClock = setInterval(onGenerateColor,1000);
			function onGenerateColor() {
				sec = $('#wait-sec').text();
				if(sec == 1) {
					clearInterval(waitClock);
					window.location.href = 'home.php';
				}
				sec--;
				$('#wait-sec').text(sec);
				var r = Math.floor((Math.random() * 254) + 1); 
				var g = Math.floor((Math.random() * 254) + 1); 
				var b = Math.floor((Math.random() * 254) + 1);
				var rgb = r+','+g+','+b;
				$('#bs-name').css('color','rgb('+rgb+')');
				$('#a').css('color','rgb('+rgb+')');
			}
		</script>
	</body>
</html>
