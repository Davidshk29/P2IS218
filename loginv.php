<?php
//registration 
$email1 =  $_GET['email'];

$validLogin =true;

if(empty($email1)){
  echo "Please enter a email.<br/>";
  $validLogin=false;
}
if(strpos($email1,'@')== false){
  echo "ERROR: Invalid Email<br/>";
  $validLogin=false;
}
if(empty($password)){
  echo "Please enter an password.<br/>";
  $validLogin = false;
}

if($validLogin){
  echo "Email: $email1<br/>";
  echo "Password: Can't tell you the password lol<br/>";
  mysql_connect (localhost, username, password);
   
mysql_select_db (shk29);

mysql_query ("INSERT INTO tablename (email1, password) VALUES ('$email1', ; '$password')");

print ($email1);

print (” “);

print ($password);

print (“<p>”);

print ("You have submitted your email");

}
?> 
<?php
			if(isset($_POST['login']))
			{
				$email=$_POST['email'];
				$password=$_POST['password'];
				$query = "select * from acc where email='$email' and pass='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					
					header( "Location: question.html");
					}
					else
					{
						echo '<script type="text/javascript">alert("Invalid Email or Password")</script>';
					}
				}
			}
			else
			{
			}
		?>
