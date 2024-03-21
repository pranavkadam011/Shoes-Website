<?php
  
  $email = $_POST['email'];

  //Database connection
  $conn =new mysqli('localhost','root','','email');
  if ($conn->connect_error){
  	    die('Connection Failed   : '.$conn->connect_error);
  }else{
  	$stmt = $conn->prepare("insert into email(email)
  		values(?)");
  	$stmt->bind_param("s",$email);
  	$stmt->execute();
  	echo "Send Succesfully....";
  	$stmt->close();
  	$conn->close();
  }
?>