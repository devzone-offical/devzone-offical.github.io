<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u281253775_reg');
define('DB_USER','u281253775_user');
define('DB_PASSWORD','muneer@123.');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_errno());

function NewUser() {
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$stream = $_POST['stream'];
	$query = "INSERT INTO users (fullname,email,gender,contact,stream) VALUES ('$fullname','$email','$gender','$contact','$stream')";
	$data = mysqli_query ($con,$query) or die(mysqli_connect_errno());
	if($data) {
		echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp() {
	if(!empty($_POST['email'])) //checking
	{
		$query = mysqli_query($con,"SELECT * FROM users WHERE email = '$_POST[email]'") or die(mysqli_connect_errno());
		if(!$row = mysqli_fetch_array($query) or die(mysqli_connect_errno())){
			NewUser();
		}
		else {
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
	}
}

if(isset($_POST['submit'])) {
	SignUp();
	echo "Submit Recived";
}
?>
