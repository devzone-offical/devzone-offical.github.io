<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u281253775_reg');
define('DB_USER','u281253775_user');
define('DB_PASSWORD','muneer@123.');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function NewUser() {
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$stream = $_POST['stream'];
	$query = "INSERT INTO users (fullname,email,gender,contact,stream) VALUES ('$fullname','$email','$gender','$contact','$stream')";
	$data = mysql_query ($query) or die(mysql_error());
	if($data) {
		echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp() {
	if(!empty($_POST['email'])) //checking
	{
		$query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email]'") or die(mysql_error());
		if(!$row = mysql_fetch_array($query) or die(mysql_error())){
			NewUser();
		}
		else {
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
	}
}

if(isset($_POST['submit'])) {
	SignUp();
}
?>
