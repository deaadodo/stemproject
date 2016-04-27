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
	
	$sql = "UPDATE student SET  st_fname= '$_GET[s_firstname]',st_lname='$_GET[s_lastname]',st_address='$_GET[s_address]',st_school='$_GET[s_school]',st_totaldegree='$_GET[s_totaldegree]',st_class='$_GET[s_class]',st_gender='$_GET[s_gender]',st_phone='$_GET[s_phone]',st_email='$_GET[s_email]',st_username='$_GET[s_username]',st_password='$_GET[s_password]' WHERE  st_id= '$_GET[s_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
</body>
</html>