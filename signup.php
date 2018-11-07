<!DOCTYPE html>
<html lang="en-US">
	
	<head>
		<title>signup</title>
		<link rel="stylesheet" type="text/css" href="style.css" title="style" />
	</head>
	<body>
	<form action="validate.php" method="POST">
		<table align="center" style="background-color:SlateBlue;" border= 2px solid red; border-radius: 5px;>
		<tr>
		<td><h1>Sign Up</h1></td>
		<td><p>Please fill in this form to create an account.</p></td>
		
		<tr>
		<label for="fname">
			<td><b>First Name</b></td>
		</label>
		<td><input type="text" placeholder="Enter First Name" name="fname" required><span class="error"><?php echo $fnameErr;?></span></td>
		
		<tr>
		<label for="lname">
			<td><b>Last Name</b></td>
		</label>
		<td><input type="text" placeholder="Enter Last Name" name="lname" required><span class="error"><?php echo $lnameErr;?></span></td>
		
		<tr>
		<label for="email">
			<td><b>Email</b></td>
		</label>
		<td><input type="text" placeholder="Enter Email" name="email" required><span class="error"><?php echo $emailErr;?></span></td>
		
		<tr>
		<label for="birthday">
			<td><b>Birthday</b></td>
		</label>
		<td><input type="birth" placeholder="Enter Birthday" name="birthday" required></td>
		
		<tr>
		<label for="pass">
			<td><b>Password</b></td>
		</label>
			<td><input type="password" placeholder="Enter Password" name="pass" required></td>
		<tr>

		<tr>
		<td><button style="background-color:Orange;" type="submit" class="signup">Sign Up</button></td>
			<td>
				<p>
					<a href="https://validator.w3.org/check/referer">
					<img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!" height="31" width="88" />
					</a>
				</p>
			</td>
	</table>
	</form>

</body>
</html>