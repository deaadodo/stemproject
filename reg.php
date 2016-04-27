<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/screen.css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<body>
<form method="post" action="login_user.php">
<span id="sprytextfield1">
<label for="text1">Username:</label>
<input type="text" name="s_username" id="text1" />
<span class="textfieldRequiredMsg">username is required.</span></span>
<span id="sprypassword1">
<label for="password1">Password:</label>
<input type="password" name="s_password" id="password1" />
<span class="passwordRequiredMsg">password is required.</span></span>
<input type="submit" name="submit" value="LogIn">
</form>
<?php 
$HostName="localhost";
$db_name="stem";
$LoginName="root";
$LoginPassword="";
$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if (isset($_POST['s_user'])){$s_user = $_POST['s_user'];}
if (isset($_POST['s_pass'])){$s_pass = $_POST['s_pass'];}
if (isset($_POST['submit']))
{
if($_POST['submit']){
if($s_user!=''|| $s_pass!=''){
$sql = mysql_query("SELECT * FROM student WHERE st_username ='$s_user'");
WHILE($row = mysql_fetch_assoc($sql)){
	$user_name=$row['st_username'];
	$user_pass=$row['st_password'];
	if($s_pass == $user_pass){
		echo"you have loged in";
		
		session_start();
		$_SESSION['username']=$user_name;
		header("location:loginn.php");
		}
		else {echo"wrong password";}
		}
	}
	else{ echo"please put your data";}		
}}
?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>