<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 


 session_start();//بداية الجلسة 

//استقبلنا البيانات من صفحة تسجيل الدخول 
 
$HostName="localhost";
$db_name="stem";
$LoginName="root";
$LoginPassword="";
$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if (isset($_POST['s_username'])){$s_user = $_POST['s_username'];}
if (isset($_POST['s_password'])){$s_pass = $_POST['s_password'];}
if (isset($_POST['submit'])){
if($_POST['submit']){
if($s_user!=''|| $s_pass!=''){
$user=$_POST['s_username'];
$password=$_POST['s_password'];
//الان نعمل استعلام هل العضو يمتلك بيانات في جدول الاعضاء 
$sql=mysql_query("select * from student where  st_username='$user' and st_password='$password' ") or die ("not"); 
//نعمل شرط هل البيانات هي نفس البيانات اللي بجدول 
 $row=mysql_fetch_assoc($sql); 

if ($user=$row['st_username'] and $password=$row['st_password']) { 
//اذا تطابقت البيانات نقوم بتخزنها في جلسات 
$_SESSION['s_id']=$row['st_id']; //خزنا الاي دي تبع العضو 
$_SESSION['s_username']=$row['st_username'];//خزنا اسم العضو 
$_SESSION['s_password']=$row['st_password'];//خزنا ايميل العضو 
$_SESSION['s_image']=$_FILES['userfile']['name'];;//خزنا ايميل العضو 

echo"Hi ".$_SESSION['s_username'];
echo"<img src='http://localhost/newjobrepo/pictures/'.$_SESSION[s_image].'  '>";
echo "<br/>".""."<br/>";

}
else{ 

echo "البيانات المدخلة خاطئة يرجى التاكد منها وشكرررررررررا"; 

} 

echo "<a href='profile.php?id=$_SESSION[s_id]'>البروفايل</a>";  
}}}
?>










</body>
</html>