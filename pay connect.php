<?php
  
  $cardnumber = $_POST['cardnumber'];
  $cardholder= $_POST['cardholder'];
  $expirydate = $_POST['expirydate'];
  $cvvcode = $_POST['cvvcode'];
  

  //Database connection
  $conn =new mysqli('localhost','root','','payment');
  if ($conn->connect_error){
  	    die('Connection Failed   : '.$conn->connect_error);
  }else{
  	$stmt = $conn->prepare("insert into payment(cardnumber, cardholder, expirydate, cvvcode)
  		values(?, ?, ?, ?)");
  	$stmt->bind_param('isii',$cardnumber, $cardholder, $expirydate, $cvvcode );
  	$stmt->execute();
  	echo "Payment Succesful....";
  	$stmt->close();
  	$conn->close();
  }
?>