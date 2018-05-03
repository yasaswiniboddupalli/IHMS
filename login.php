<!--<html>
<head>
</head>
<body><form action="login.php" method="post">
	  <label><b>Email ID</b></label>
     <input type="text" id="FullName" name="email" placeholder="enter your emailid" maxlength="31" required />
	 <label><b>Password</b></label>
	 <input type="password" id="FullName" name="password" placeholder="enter your Password" maxlength="10" required />
	 <input type="submit" class="w3-btn w3-margin-bottom w3-blue " id="LogIn" value="Log In">
	 </form>
	 </body>
	 </html>--!>

<?php
if(isset($_GET['logout']))
{
	$expire = time()-60*60*24*30; //1 month time
		setcookie("id","",$expire);
}
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
//conect to server
$con=mysql_connect("localhost","root","");
if(!$con){
	die('could not connect:'.mysql_error());
}
mysql_select_db("health",$con);
if(mysql_num_rows(mysql_query("SELECT * FROM users where email= '$email' AND password= '$password'")))
{
	//correct information
	$result=mysql_query("SELECT * FROM users where email='$email' AND password='$password'");
	while($row = mysql_fetch_array($result))
	{
		$expire = time()+60*60*24*30; //1 month time
		setcookie("id",$row['id'],$expire);
		echo "logged in using email id <b>".$row['email']."</b>";
		//echo $_COOKIE['id'];
		$userID = $row['id'];
		$_SESSION['email']=$email;
		header("location: home1.php"); 
		
	}
	
	
	
	
}else{
	//false information
	echo "<b> email or password invaid</b>";
}
	
	
	mysql_close($con);
	
	
}
if(isset($_COOKIE['id'])){
	$userID=$_COOKIE['id'];
}
if(isset($userID))
{
	//echo "hello (<a href='?logout'> Logout?</a>)";
}
?>