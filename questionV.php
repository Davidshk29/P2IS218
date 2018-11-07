<?php
	session_start();
	require_once('connection.php');
?>
	<?php
	$qname1 = $_GET['qname1'];
	$qbody1 = $_GET['qbody1'];
	$qskills = $_GET['qskills'];
 
	$questionV = true;
  
	if(empty($qname1)){
  		echo "Empty</br>";
     $questionV=false;
	}
	if(strlen($qname1)<3){
  		echo "Type more than 3 characters </br>";
     $questionV = false;
	}
	if(empty($qbody1)){
  		echo "Empty";
     $questionV=false;
	}
	if(strlen($qbody1)>500){
  		echo "Type less than 500 characters </br>";
     $questionV=false;
	}
?>
<!DOCTYPE html>
<html>
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
	<div>
		<center><h1>Welcome <?php echo $_SESSION['fname']; ?></h1></center>
		<form action="questionV.php" method="post">
			<table align="center">
		<tr>
		<td><h1>Questions</h1></td>
		
		<tr>
		<label for="qname1">
			<td><b>Question Name</b></td>
		</label>
		<td><?php echo ":$qname1<br/>";?></td>
		
		<tr>
		<label for="qbody1">
			<td><b>Question Body</b></td>
		</label>
		<td><?php echo ":$qbody1<br/>";?></td>
		
		<tr>
		<label for="qskills">
			<td><b>Question Skills</b></td>
		</label>
			<td><?php echo ":$qskills<br/>";?></td>
		<tr>
			<td><a href="login.html"> Log Out </a></td>
		</tr>
		</form>
		<form action="questionV.php" method="get">
		<table align="center" >
		<tr>
		<td><h1>New Questions</h1></td>
		<td><p></p></td>
		
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
	</div>

</body>
</html>

