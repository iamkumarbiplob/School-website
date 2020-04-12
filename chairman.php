<?php
	require_once"db_connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chairman || SAHS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="icon" type="image/ico" href="img/logo.png">
	</head>
	<body onload=display_ct();>
		<div class="top">
			<div class="date_time">
				<script type="text/javascript"> 
					function display_c(){
						var refresh=1000; // Refresh rate in milli seconds
						mytime=setTimeout('display_ct()',refresh)
					}

					function display_ct() {
						var x = new Date()
						document.getElementById('ct').innerHTML = x;
						display_c();
					 }
				</script>
				<p>
					<span id='ct' ></span>
				</p>
			</div>
			<div class="login_page">
				<a href="login.php" target="_blank">Login Here</a>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="scroll-text" >
			<marquee behavior="scroll" aria-busy="true" direction="left" scrollamount="3" id="mnews" onmousedown="this.stop();" onmouseup="this.start();">
				<span href="#">
					"শিক্ষা নিয়ে গড়ব দেশ, শেখ হাসিনার বাংলাদেশ।"
				</span> 
			</marquee>
		</div>
		<div style="clear: both;"></div>
		
		<div class="header">
			<div class="imgg">
				<img src="img/logo.png" alt="logo">
			</div>
			<div class="nevigation">
				<ul>
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="#">Administration</a>
						<ul>
							<li id="active-button">
								<a href="#">
									Chairman
								</a>
							</li>
							<li>
								<a href="headmaster.php">HeadMaster </a>
							</li>
							<li>
								<a href="asshead.php">Asst. Headmaster</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Result</a>
					</li>
					<li>
						<a href="#">Admission</a>
					</li>
				</ul>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="scroll-text" >
			<marquee behavior="alternate" aria-busy="true" direction="left" scrollamount="3" id="mnews" onmousedown="this.stop();" onmouseup="this.start();">
				<span href="#">
					“ওঠো,জাগো, যতদিন না  লক্ষ্যে পৌঁছাচ্ছ থেমো না”  – স্বামী বিবেকানন্দ
				</span> 
			</marquee>
		</div>
		<div style="clear: both;"></div>

		<h1 style="text-align:center;">Chairman</h1>

		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="img/biplob1.jpg" alt="chairman image" style="width:300px;height:300px;">
		    </div>
		    <div class="flip-card-back">
		      <h1>Biplob Kumar</h1> 
		      <p>Chairman</p> 
		      <p>Sadipur Adarsha High School</p>
		      <p>Mobile No: +8801787829450</p>
		    </div>
		  </div>
		</div>


<?php
	include_once 'footer.php';
?>
