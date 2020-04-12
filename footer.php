	<div style="clear: both;"></div>
	<div class="footer">
		<div class="f1">
			<p>
				&copy copyright 2015<?php echo " - ". date('Y'); ?>  SAHS.
			</p>
		</div>
		<div class="f2">
			<p>Designed & Developed by: <a href="https://www.facebook.com/biplob.511285" target="_blank">Biplob Kumar</a></p>
		</div>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    	document.getElementById("myBtn").style.display = "block";
		  } else {
		    	document.getElementById("myBtn").style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  	document.body.scrollTop = 0;
		  	document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>