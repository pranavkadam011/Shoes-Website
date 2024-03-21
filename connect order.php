<?php
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $flatno = $_POST['flatno'];
  $area = $_POST['area'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  //Database connection
  $conn =new mysqli('localhost','root','','orders');
  if ($conn->connect_error){
  	    die('Connection Failed   : '.$conn->connect_error);
  }else{
  	$stmt = $conn->prepare("insert into orders(firstname,lastname,flatno,area,city,state,zip)
  		values(?, ?, ?, ?, ?, ?, ?)");
  	$stmt->bind_param('ssssssi',$firstname, $lastname, $flatno, $area, $city, $state, $zip );
    echo "Ordered Succesfully....";
  	$stmt->execute();
  	$stmt->close();
  	$conn->close();
  }
?>