<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="stem";
$LoginName="root";
$LoginPassword="";




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE parents SET pa_name= '$_GET[p_name]',pa_address='$_GET[p_address]',pa_gender='$_GET[p_gender]',pa_phone='$_GET[p_phone]',pa_email='$_GET[p_email]',pa_username='$_GET[p_username]',pa_password='$_GET[p_password]' WHERE pa_id='$_GET[p_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
</body>
</html>