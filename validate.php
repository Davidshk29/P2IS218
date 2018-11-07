<?php
//registration 
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$birthday=$_GET['birthday'];
$email=$_GET['email'];
$password=$_GET['pass'];
$validateS=true;

if(empty($fname)){
  echo "Please enter a first name.<br/>";
  $validateS=false;
}
if(empty($lname)){
  echo "Please enter a last name.<br/>";
  $validateS=false;  
}
if(empty($birthday)){
  echo "Please enter a birthday.<br/>";
  $validateS=false;
}
if(empty($email)){
  echo "Please enter a email.<br/>";
  $validLogin=false;
}
if(strpos($email,'@')== false){
  echo "ERROR: Invalid Email<br/>";
  $validLogin=false;
}

if(empty($password)){
  echo "Please enter an password.<br/>";
  $validLogin = false;
}

?> 
<!DOCTYPE html>
<html lang="en-US">
	
	<head>
		<title>signup</title>
		<style>
		h1 {color:red;}
		p {color:blue;}
		form { max-width: 300px; margin: 10px auto; padding: 10px 20px; background: #f4f7f8; border-radius: 8px;}
		body { font-family: 'Nunito', sans-serif; color: #065371; background-color:   #61A5BC;}

		</style>
	</head>
	<body >
	<form>
		<table align="center">
		<tr>
		<td><h1>You are Registered</h1></td>
		<td><p></p></td>
		
		<tr>
		<label for="fname">
			<td><b>First Name</b></td>
		</label>
		<td><?php echo ": $fname<br/>";?></td>
		
		<tr>
		<label for="lname">
			<td><b>Last Name</b></td>
		</label>
		<td><?php echo ": $lname<br/>";?></td>
		
		<tr>
		<label for="email">
			<td><b>Email</b></td>
		</label>
		<td><?php echo ": $email<br/>";?></td>
		
		<tr>
		<label for="birthday">
			<td><b>Birthday</b></td>
		</label>
		<td><?php echo ": $birthday<br/>";?></td>
		
		<tr>
		<label for="pass">
			<td><b>Password</b></td>
		</label>
			<td><?php echo ": can't share that with you<br/>";?></td>
		<tr>
		<tr>
		 <td> <a href="login.html">Go login</a></td>
	</table>
	</form>
