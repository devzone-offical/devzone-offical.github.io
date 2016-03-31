<?php

function NewUser() {
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$stream = $_POST['stream'];
	$query = "INSERT INTO users (fullname,email,gender,contact,stream) VALUES ('$fullname','$email','$gender','$contact','$stream')";
	$con = mysqli_connect("localhost","u281253775_user","muneer@123.","u281253775_reg") or die("Failed to connect to MySQL: " . mysqli_connect_errno());
	$data = mysqli_query ($con,$query) or die(mysqli_connect_errno());
	mysqli_close($con);
	if($data) {
		echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp() {
	if(!empty($_POST['email'])) //checking
	{
		$con = mysqli_connect("localhost","u281253775_user","muneer@123.","u281253775_reg") or die("Failed to connect to MySQL: " . mysqli_connect_errno())
		$query = mysqli_query($con,"SELECT * FROM users WHERE email = '$_POST[email]'") or die(mysqli_connect_errno());
		if(!$row = mysqli_fetch_array($query) or die(mysqli_connect_errno())){
			NewUser();
		}
		else {
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
		mysqli_close($con);
	}
	else{
		echo "Please enter the Details";
	}
}

if(isset($_POST['submit'])) {
	SignUp();
	echo "Submit Recived";
}
?>
