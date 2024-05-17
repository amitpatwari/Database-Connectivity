<?php
$firstname = $_POST['firstname']
$email = $_POST['email']
$address = $_POST['address']
$city = $_POST['city']
$cardname = $_POST['cardname']
$cardnumber = $_POST['cardnumber']
$expmonth = $_POST['expmonth']
$expyear = $_POST['expyear']




 // Create connection
$conn = new mysqli ('localhost','root','','billing');
if ($conn->connect_error){
 die('Connection Failed : ' .$conn->connect_error);
  }
else{
	$stmt  = $conn->prepare("insert into registration($firstname,email,address,city,destination,cardname,cardnumber,expmonth,expyear)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssss",$firstname,$email,$address,$city,$destination,$cardname,$cardnumber,$expmonth,$expmonth);
    $stmt->execute();
   echo "New record is inserted sucessfully";
    $stmt->close();
    $conn->close();
   }

?>