<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gr_insert</title>
</head>

<body>
<?php 
$HostName="localhost";
$db_name="stem";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['p_name']) && isset($_POST['p_username'])&&isset($_POST['p_password'])) {
$sql = "INSERT INTO privileg (pr_name,pr_username,pr_password) VALUES
 ('$_POST[p_name]','$_POST[p_username]','$_POST[p_password]')" ;
} else {
$sql = '';
}


mysql_query($sql,$con) ;

mysql_close($con);

?>

</body>
</html>