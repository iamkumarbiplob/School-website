<style>
	.tbl {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
	}
	body{
		background-color: yellow;
	}
	.log{
		float: right;
		font-weight: bold;
		width: 100px;
		margin-right: 130px;
	}
</style>

<?php
	require_once "db_connection.php";

	session_start();
	$a_id =$_SESSION['a_id'];
	$_SESSION['a_id']=$a_id;

	if (isset($_POST["back"])) {
		header("Location: admin/login_process.php");
	}
	echo "<form action=\"\" method=\"POST\"><input type=\"submit\" name=\"back\" value=\"Back\"class=\"log\"><br></form>";


	$sql="SELECT MAX(Cast(right(t_id,2) as int)) FROM teacher";

	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    $highest_id = $row[0];


    if($highest_id==null){
		$highest_id=date('y')."00";
	}
	if($highest_id>0 && $highest_id<10){
		$highest_id=date('y')."0".$highest_id;
	}
	if($highest_id>9 && $highest_id<100){
		$highest_id=date('y').$highest_id;
	}
	
	$id=($highest_id+1);

	// 								////	Password

	$keylength=6;
	$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$password=substr(str_shuffle($str),0,$keylength);

//	echo "id: ". $id. "<br>Password: ".$password;

	// $sqlins="INSERT INTO `s_login`(`s_id`, `password`) VALUES ('$id','$password')";
	// mysqli_query($conn,$sqlins);

	echo "<form action=\"\" method=\"POST\"enctype=\"multipart/form-data\">";
		echo "<table class=\"tbl\" style=\"border: 1px solid yellow\">";

			echo "<tr><td style=\"float: right;\">ID: </td><td>"."<input type=\"\" name=\"t_id\" value=\"".$id."\"readonly></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Password: </td><td>"."<input type=\"\" name=\"password\" value=\"".$password."\"readonly></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Name: </td><td>"."<input type=\"text\" name=\"name\" placeholder=\"Enter Full Name \" required></td><tr><br><br>";

			echo "<tr><td style=\"float: right;\">Designation: </td><td>"."<input type=\"text\" name=\"designation\" placeholder=\"Enter Designation\" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Mobile No: </td><td>"."<input type=\"text\" name=\"mobile_no\" placeholder=\"Enter Mobile No \" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Present Address: </td><td>"."<input type=\"text\" name=\"present_address\" placeholder=\"Enter Present Address\" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Parmanent Address: </td><td>"."<input type=\"text\" name=\"parmanent_address\" placeholder=\"Enter Parmanent Address\" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\"></td><td><input type=\"file\" name=\"dp\" required><br>[File Size must be below 200KB]</td></tr><br><br>";

			echo "<tr><td style=\"float: right;\"><input type=\"submit\" name=\"register\" value=\"Submit\"></td><td>";
			echo "<input type=\"reset\" name=\"reset\" value=\"Reset\"></td></tr>";
		echo "</table>";
	echo "</form>";

 if(isset($_POST["register"]))
 {
 	 
 	$id=$_POST['t_id'];
 	$password=$_POST['password'];
 	$name=$_POST['name'];
 	$designation=$_POST['designation'];
 	$mobile_no=$_POST['mobile_no'];
 	$present_address=$_POST['present_address'];
 	$parmanent_address=$_POST['parmanent_address'];

 	

///////////////////////////////Image URL//////////////////////////////////////
	 $target_dir = "uploads/";
	 $imageName = $id."." . pathinfo($_FILES['dp']['name'],PATHINFO_EXTENSION);
	 $dir=$target_dir. $imageName;
	 $up=move_uploaded_file($_FILES["dp"]["tmp_name"], $dir);

 	$sql = "INSERT INTO teacher(t_id, password, name, designation, mobile_no, image_url, present_address, parmanent_address) VALUES ('$id','$password','$name','$designation','$mobile_no','$dir','$present_address','$parmanent_address')";

 	mysqli_query($conn,$sql);
 	header("Location: admin/login_process.php");
 	// mysqli_query($conn,$sql2);

 }


?>
