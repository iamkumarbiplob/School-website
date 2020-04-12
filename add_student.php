<style>
	.tbl {
		/* margin-top: -450px; */
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


	$sql="SELECT MAX(Cast(right(s_id,3) as int)) FROM student";

	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    $highest_id = $row[0];


    if($highest_id==null){
		$highest_id=date('y')."000";
	}
	if($highest_id>0 && $highest_id<10){
		$highest_id=date('y')."00".$highest_id;
	}
	if($highest_id>9 && $highest_id<100){
		$highest_id=date('y')."0".$highest_id;
	}
	
	$id=($highest_id+1);
	// echo $id;
	// 19001
	// year 3char roll
	// $id = $highest_id+1;
	
	// 								////	Password

	$keylength=6;
	$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$password=substr(str_shuffle($str),0,$keylength);

//	echo "id: ". $id. "<br>Password: ".$password;

	// $sqlins="INSERT INTO `s_login`(`s_id`, `password`) VALUES ('$id','$password')";
	// mysqli_query($conn,$sqlins);

	echo "<form action=\"\" method=\"POST\"enctype=\"multipart/form-data\">";
		echo "<table class=\"tbl\" style=\"border: 1px solid yellow\">";
			echo "<tr><td style=\"float: right;\">Admission Year: </td><td>"."<input type=\"\" name=\"admission_year\" value=\"".date('Y')."\"readonly></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">ID: </td><td>"."<input type=\"\" name=\"s_id\" value=\"".$id."\"readonly></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Password: </td><td>"."<input type=\"\" name=\"password\" value=\"".$password."\"readonly></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Name: </td><td>"."<input type=\"text\" name=\"name\" placeholder=\"Enter Full Name \" required></td><tr><br><br>";

			echo "<tr><td style=\"float: right;\">Father Name: </td><td>"."<input type=\"text\" name=\"father_name\" placeholder=\"Enter Father Name \" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Mother Name: </td><td>"."<input type=\"text\" name=\"mother_name\" placeholder=\"Enter Mother Name \" required></td><tr><br><br>";

			echo "<tr><td style=\"float: right;\">Birth Date: </td><td>"."<input type=\"date\" name=\"dob\" placeholder=\"Enter Birth Date \" required></td></tr><br><br>";

			echo "<tr><td style=\"float: right;\">Gender: </td><td>"."<input list=\"gender_detail\" name=\"gender\" required></td></tr><br><br>";
			echo "<datalist id=\"gender_detail\"><option value=\"Male\"><option value=\"Female\"><option value=\"Other\"></datalist>";

			echo "<tr><td style=\"float: right;\">Religion: </td><td>"."<input list=\"religion_detail\" name=\"religion\" required></td></tr><br><br>";
			echo "<datalist id=\"religion_detail\"><option value=\"Hinduism\"><option value=\"Islam\"><option value=\"Christianity\"><option value=\"Buddhism\"></datalist>";

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
 	 
 	$id=$_POST['s_id'];
 	$password=$_POST['password'];
 	$name=$_POST['name'];
 	$father_name=$_POST['father_name'];
 	$mother_name=$_POST['mother_name'];
 	$dob=$_POST['dob'];
 	$gender=$_POST['gender'];
 	$religion=$_POST['religion'];
 	$mobile_no=$_POST['mobile_no'];
 	$present_address=$_POST['present_address'];
 	$parmanent_address=$_POST['parmanent_address'];
 	$admission_year=$_POST['admission_year'];

 	

///////////////////////////////Image URL//////////////////////////////////////
	 $target_dir = "uploads/";
	 //$file_type = $_FILES['dp']['type'];
	 //$file_size=$_FILES["dp"]["size"];
	 $imageName = $id."." . pathinfo($_FILES['dp']['name'],PATHINFO_EXTENSION);
	 $dir=$target_dir. $imageName;
	 $up=move_uploaded_file($_FILES["dp"]["tmp_name"], $dir); 

	// if ((($file_type== "image/gif")|| ($file_type== "image/jpeg")|| ($file_type== "image/jpg")|| ($file_type== "image/pjpeg"))&& ($file_size < 20000000)){
	//      $up= move_uploaded_file($_FILES["dp"]["tmp_name"], $target_dir. $imageName);
	// }

 	// echo "ID: ".$id."<br>";
 	// echo "Password: ".$password."<br>";
 	// echo "Name: ".$name."<br>";
 	// echo "Father Name: ".$father_name."<br>";
 	// echo "Mother Name: ".$mother_name."<br>";
 	// echo "Date of Birth: ".$dob."<br>";
 	// echo "Gender: ".$gender."<br>";
 	// echo "Religion: ".$religion."<br>";
 	// echo "Mobile No: ".$mobile_no."<br>";
 	// echo "Present Address: ".$present_address."<br>";
 	// echo "Parmanent Address: ".$parmanent_address."<br>";
 	// echo "Image URL: ".$dir."<br>";
 	// echo "Admission Year: ".$admission_year."<br>";

 	// $sql1="INSERT INTO s_login(s_id, password) VALUES ('$id','$password')";
 	// $sql2="INSERT INTO s_information(s_id, name, father_name, mother_name, dob, gender, religion, mobile_no, Present_address, parnanent_address, image_url, admission_year) VALUES ('$id','$name','$father_name','$mother_name','$dob','$gender','$religion','$mobile_no','$present_address','$parmanent_address','$dir','$admission_year')";

 	$sql = "INSERT INTO `student`(`s_id`, `password`, `name`, `father_name`, `mother_name`, `dob`, `gender`, `religion`, `mobile_no`, `Present_address`, `parmanent_address`, `image_url`, `admission_year`) VALUES ('$id','$password','$name','$father_name','$mother_name','$dob','$gender','$religion','$mobile_no','$present_address','$parmanent_address','$dir','$admission_year')";

 	echo '<script type="text/javascript">alert("Successfully Add Student.");window.location =  "admin/login_process.php";</script>';


 	mysqli_query($conn,$sql);
 	// mysqli_query($conn,$sql2);



 }


?>
