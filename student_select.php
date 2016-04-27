<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>select_student</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="stem";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8'");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>


  FirstName <?php echo "$row[st_fname]"."   "?><br/><br/>
  
  LastName <?php echo "$row[st_lname]"."   "?><br/><br/>
  
  Address <?php echo "$row[st_address]"."   "?><br/><br/>
  
  School<?php echo "$row[st_school]"."   "?><br/><br/>
  
 Totaldegree <?php echo "$row[st_totaldegree]"."   "?><br/><br/>
 
  Class<?php echo "$row[st_class]"."   "?><br/><br/>
  
  Gender <?php echo "$row[st_gender]"."   "?><br/><br/>
  
  Phone <?php echo "$row[st_phone]"."   "?><br/><br/>

Email <?php echo "$row[st_email]".""?><br/><br/>

Username <?php echo "$row[st_username]".""?><br/><br/>
 
Password <?php echo "$row[st_password]"."<hr>"?><br/><br/>

  <?php
	;}
	 mysql_close($con);
	?>
</body>
</html>