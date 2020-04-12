<?php
	require_once"db_connection.php";

	$sql="";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home || SAHS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="icon" type="image/ico" href="img/logo.png">
		<style>
			.notice-inn{
				margin: 10px;
				margin-left: 30px;
			}
			.notice-inn a{
				text-decoration: none;
				font-size: 18px;
				color: #000;
			}
			.marq { 
		        padding-top:30px; 
		        padding-bottom:30px; 
		    } 
			
		</style>
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
					<li id="active-button">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Administration</a>
						<ul>
							<li>
								<a href="chairman.php">
									Chairman
								</a>
							</li>
							<li>
								<a href="headmaster.php">
									HeadMaster 
								</a>
							</li>
							<li>
								<a href="asshead.php">
									Asst. Headmaster
								</a>
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




		<div class="panel1">
			<div class="scroll_image">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
					  	<img src="img/img_1.jpg" style="height: 350px; width: 883px;">
					  	<div class="text">First Image</div>
					</div>

					<div class="mySlides fade">
					  	<div class="numbertext">2 / 3</div>
					  	<img src="img/img_2.jpg" style="height: 350px; width: 883px;">
					  	<div class="text">Secound Image</div>
					</div>

					<div class="mySlides fade">
					  	<div class="numbertext">3 / 3</div>
					  	<img src="img/img_3.jpg" style="height: 350px; width: 883px;">
					  	<div class="text">Third Image</div>
					</div>
				</div>
				<br>
				<div style="text-align:center">
				  	<span class="dot"></span> 
				  	<span class="dot"></span> 
				  	<span class="dot"></span> 
				</div>

				<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  for (i = 0; i < slides.length; i++) {
					    slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
					    dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 3000); // Change image every 3 seconds
					}
				</script>
			</div>
			<div class="latest_notice">
				<p>
					Latest Notice
				</p>

				<div class="notice-inn">
					<?php 
						$sql="SELECT * FROM `notice` ORDER BY id DESC";
						$serial=0;
						$result=mysqli_query($conn,$sql);
						echo "<marquee class=\"marq\" direction = \"up\" loop=\"\"onmouseover=\"this.stop();\" onmouseout=\"this.start();\">";
						
						while($row=mysqli_fetch_assoc($result)){
								$serial++;
								$url="notice/".$row['notice_url'];
								echo "<a href=\"$url\">".$serial.". ".$row['name']."</a><br><br>";
							
						}
						echo "</marquee>";
					 ?>

				</div>

			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="panel2">
			<div class="head_message">
				<img src="">
				<p>
					Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.Head message is show here.
				</p>
			</div>
			<div class="import_link">
				<p>
					Important Links
				</p>
				<ul>
					<li><img src="img/web.png"><a href="https://moedu.gov.bd" target="_blank">Ministry of Education</a></li>
					<li><img src="img/web.png"><a href="http://www.xiclassadmission.gov.bd" target="_blank">xi Class Admission</a></li>
					<li><img src="img/web.png"><a href="http://www.rajshahieducationboard.gov.bd" target="_blank">Rajshahi Education Board</a></li>
					<li><img src="img/web.png"><a href="https://dhakaeducationboard.gov.bd" target="_blank">Dhaka Education Board</a></li>
					<li><img src="img/web.png"><a href="http://www.educationboardresults.gov.bd" target="_blank">Education Board Result</a></li>
				</ul>
				<div class="media_hub">
					<p>
						Media
					</p>
					<address>National Antheme</address>
				 	<audio controls style="margin-left: 25px; width: 360px;">
					 	<source src="audio/national_anthem.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio> 	
				</div>

			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="panel3">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.964619078721!2d89.0327094143569!3d24.17297357842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc1e69a8c158d7%3A0xc6c0322056480c31!2sSadipur+Adarsha+High+School!5e0!3m2!1sen!2sbd!4v1562508146115!5m2!1sen!2sbd" allowfullscreen></iframe>
			</div>
			<div class="addresses">
				<p>
					Address & Contacts
				</p>
				<address>
					Sadipur Adarsha High School,Sadipur, Gouripur, Lalpur, Natore, Bangladesh-6420.
				</address>
			</div>
		</div>

<?php
include_once 'footer.php';
?>
