<?php
	session_start();
	require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en-US">
	
	<head>
		<title>Question Page</title>
		<style>
		h1 {color:red;}
		p {color:blue;}
		form { max-width: 600px; margin: 10px auto; padding: 10px 20px; background: #f4f7f8; border-radius: 8px;}
		body { font-family: 'Nunito', sans-serif; color: #065371; background-color:   #61A5BC;}

	</style>
	</head>
	<body>
	<center><h1>Welcome</h1></center>
	<form action="questionV.php" method="get">
		<table align="center" >
		<tr>
		<td><h1>Questions</h1></td>
		<td><p>Please fill in this form out.</p></td>
		
		<tr>
		<label for="qname1">
			<td><b>Question Name</b></td>
		</label>
		<td><input type="text" placeholder="Enter Question" id="qname1" name="qname1" ></td>
		
		<tr>
		<label for="qbody1">
			<td><b>Question Body</b></td>
		</label>
		<td><input type="text" placeholder="Enter answer" id="qbody1" name="qbody1"  rows="4" cols="50" maxlength="50" name="comment"></td>
		
		<tr>
		<label for="qskills">
			<td><b>Question Skills</b></td>
		</label>
			<td><input type="text" placeholder="Enter Skills" id="qskills" name="qskills" ></td>
		<tr>

		<tr>
		<td><input type="submit"></td>

	</table>
	</form>
<?php
if(isset($_POST['register'])){
	$question=$_POST['qname1'];
	$questionbody=$_POST['qbody1'];
	$skills=$_POST['qskills'];

	if($query_run){
		else{
			$query = "insert into acc values('$question','$questionbody','$skills')";
			$query_run = mysqli_query($con,$query);
			if($query_run){
				echo '<script type="text/javascript">alert("Registered.")</script>';
				$_SESSION['qname1'] = $question;
				$_SESSION['qbody1'] = $questionbody;
				$_SESSION['qskills'] = $skills;
				header( "Location: questionV.php");
			}
			else{
				echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
			}
		}
	}
}
?>

</body>
</html>