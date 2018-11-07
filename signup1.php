<?php
	session_start();
	require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en-US">
	<style>
		h1 {color:red;}
		p {color:blue;}
		form { max-width: 300px; margin: 10px auto; padding: 10px 20px; background: #f4f7f8; border-radius: 8px;}
		body { font-family: 'Nunito', sans-serif; color: #065371; background-color:   #61A5BC;}

	</style>
	<head>
		<title>signup</title>
	</head>
	<body>
	<form action="validate.php" method="get">
		<table align="center">
		<tr>
		<td><h1>Sign Up</h1></td>
		<td><p>Please fill in this form to create an account.</p></td>
		
		<tr>
		<label for="fname">
			<td><b>First Name</b></td>
		</label>
		<td><input type="text" placeholder="Enter First Name" name="fname" id="fname"  ></td>
		
		<tr>
		<label for="lname">
			<td><b>Last Name</b></td>
		</label>
		<td><input type="text" placeholder="Enter Last Name" name="lname" id="lname" ></td>
		
		<tr>
		<label for="email">
			<td><b>Email</b></td>
		</label>
		<td><input type="text" placeholder="Enter Email" name="email" id="email" ></td>
		
		<tr>
		<label for="birthday">
			<td><b>Birthday</b></td>
		</label>
		<td><input type="text" placeholder="Enter Birthday" name="birthday" id="birthday" ></td>
		
		<tr>
		<label for="pass">
			<td><b>Password</b></td>
		</label>
			<td><input type="password" placeholder="Enter Password" name="pass" required  minlength="8" maxlength="12" ></td>
		<tr>

		<tr>
		<td><input name="register" type="submit"></td>

	</table>
	</form>
<?php
if(isset($_POST['register'])){
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$birtday=$_POST['birthday'];

	if($query_run){
		if(mysqli_num_rows($query_run)>0){
			echo '<script type="text/javascript">alert("Email Already exists. Try Another Email")</script>';
		}
		else{
			$query = "INSERT INTO accounts (email, fname, lname, birthday, pass) VALUES (:email, :firstName, :lastName, :birthday, :password)";
			$query_run = mysqli_query($con,$query);
			if($query_run){
				echo '<script type="text/javascript">alert("Registered.")</script>';
				$_SESSION['email'] = $email;
				$_SESSION['pass'] = $password;
				header( "Location: question.html");
			}
			else{
				echo '<p class="bg-danger msg-block">Registration UnsuccessfulPlease try</p>';. 
			}
		}
	}
}
?>
</body>
</html>