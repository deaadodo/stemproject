<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insert_student</title>
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
if ( isset($_POST['s_firstname']) && isset($_POST['s_lastname'])&& isset($_POST['s_address'])&& isset($_POST['s_school'])&& isset($_POST['s_totaldegree'])&& isset($_POST['s_class'])&&isset($_POST['s_gender'])&& isset($_POST['s_phone'])&& isset($_POST['s_email'])&& isset($_POST['s_username'])&& isset($_POST['s_password'])) {
$sql = "INSERT INTO student (st_fname,st_lname,st_address,st_school,st_totaldegree,st_class,st_gender,st_phone,st_email,st_username,st_password) VALUES
 ('$_POST[s_firstname]','$_POST[s_lastname]','$_POST[s_address]','$_POST[s_school]','$_POST[s_totaldegree]','$_POST[s_class]','$_POST[s_gender]','$_POST[s_phone]','$_POST[s_email]','$_POST[s_username]','$_POST[s_password]')" ;
} else {
$sql = '';
}


mysql_query($sql,$con) ;

mysql_close($con);

?>
<?php
echo"تم التسجيل بنجاح";

?>

</body>
</html>