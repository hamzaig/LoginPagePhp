<?php
    
$conn = new mysqli('localhost','root','','webengineering');

$name = $_REQUEST["name"];
$age = $_REQUEST["age"];
$gender = $_REQUEST["gender"];
$country = $_REQUEST["country"];


$insert_sql = "INSERT INTO assignment1 (name,lastname,password,email,date,gender)
VALUES ('$name', '$age',$gender,'$country','abc','def')";
//echo $insert_sql;exit;

if ($conn->query($insert_sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

 