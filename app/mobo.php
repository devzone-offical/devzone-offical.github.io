<?php
$number = $_GET['number'];
$link = mysqli_connect('localhost', 'u281253775_app', 'mobo_pass', 'u281253775_mobo');
if($link){
  $stmt = "SELECT * FROM info WHERE number='$number'";
  $query = mysqli_query($link,$stmt);
  if($query){
    $result = mysqli_fetch_array($query);
    if($result == null){
      echo json_encode(["message"=>"Number Unavailable","status"=>"2"]);
    }
    else {
      echo json_encode($result);
    }
  }
  else{
    echo json_encode(["message"=>"Data Unavailable","status"=>"3"]);
  }
}
else {
  echo json_encode(["message"=>"Server not Responding","status"=>"4"]);
}
mysqli_close($link);
?>
