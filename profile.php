<?php
session_start();
?>
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
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
  //بداية الجلسة 
$user_id=$_SESSION['s_id'];
 
$date=mysql_query("SELECT * FROM student where st_id='$user_id' "); 
 $row=mysql_fetch_assoc($date); 
if (!$_SESSION['s_username']){ 

die("انت لست عضوا لدينا او لم تقم بتسجيل الدخول"); 
} 
if ($row['st_id']!=$_SESSION['s_id']){ 

die("انت تحاول دخول صفحة لاتمتلك صلاحيات فيها"); 

}else{ 
echo "<center>اهلا وسهلا بك في البروفايل تبعك</center>"; 

//تضع هنا ماتشاء من اظهاره للعضو بعد التاكد من الاي دي تبعه 

} 

echo "<a href='logout.php'>logout</a>";  

?>



</body>
</html>