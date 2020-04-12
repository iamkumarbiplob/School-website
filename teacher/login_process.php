<style>
	body{
		background-color: yellow;
	}
	.tbl {
		/* margin-top: -450px; */
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
		font-size: 20px;
	}
	.image{
		width: 100px;
		height: 100px;
		left: 45%;
		top: 5%;
		position: absolute;
	}
	.tbl tr td input{
		border: 0px;
		font-size: 18px;
		background: transparent;
	}
	.log{
		float: right;
		font-weight: bold;
	}
</style>	

<?php 
	require_once "../db_connection.php";
	session_start();
	$t_id =$_SESSION['t_id'];
	$_SESSION['t_id']=$t_id;


	$sql="SELECT * FROM teacher WHERE t_id='$t_id'";

 	$result = mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		$id=$row['t_id'];
	 	$name=$row['name'];
	 	$designation=$row['designation'];
	 	$mobile_no=$row["mobile_no"];
	 	$present_address=$row["present_address"];
	 	$parmanent_address=$row["parmanent_address"];
	 	$image_url=$row["image_url"];
	 	echo "<!DOCTYPE html><html><head><title>".$name." profile || SAHS</title></head><body><link rel=\"icon\" type=\"image/ico\" href=\"img/logo.png\">";

		 	echo "<form action=\"\" method=\"POST\">";
		 	echo "<input type=\"submit\" name=\"logout\" value=\"Logout\"class=\"log\"></form>";

			echo "<form action=\"\" method=\"\"enctype=\"multipart/form-data\">";
				echo "<img src=\"../".$image_url."\"class=\"image\">";
				echo "<table class=\"tbl\" style=\"border: 1px solid yellow\">";
					
					echo "<tr><td style=\"float: right;\">ID: </td><td>"."<input type=\"\" name=\"s_id\" value=\"".$id."\"readonly></td></tr><br><br>";

					echo "<tr><td style=\"float: right;\">Name: </td><td>"."<input type=\"text\" name=\"name\" value=\"".$name."\" readonly></td><tr><br><br>";

					echo "<tr><td style=\"float: right;\">Designation: </td><td>"."<input type=\"text\" name=\"designation\" value=\"".$designation."\" readonly></td></tr><br><br>";

					echo "<tr><td style=\"float: right;\">Mobile No: </td><td>"."<input type=\"text\" name=\"mobile_no\" value=\"".$mobile_no."\" readonly></td></tr><br><br>";

					echo "<tr><td style=\"float: right;\">Present Address: </td><td>"."<input type=\"text\" name=\"present_address\" value=\"".$present_address."\" readonly></td></tr><br><br>";

					echo "<tr><td style=\"float: right;\">Parmanent Address: </td><td>"."<input type=\"text\" name=\"parmanent_address\" value=\"".$parmanent_address."\" readonly></td></tr><br><br>";

				echo "</table>";
			echo "</form>";

		echo "</body></html>";
	}

	if (isset($_POST["logout"])) {
		session_destroy();
		echo '<script type="text/javascript">alert("Succesfully Logout.");window.location =  "login.php";</script>';
	}

 ?>