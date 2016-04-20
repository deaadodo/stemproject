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
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form method="get" action="update_student.php">
<input type="hidden" name="s_id" value="<?php echo "$row[st_id]"?>" /><br />


  Firstname<input type="text" name="s_firstname" value="<?php echo "$row[st_fname]"?>" /><br />
  
   Lastname<input type="text" name="s_lastname" value="<?php echo "$row[st_lname]"?>" /><br />
  
  Address<input type="text" name="s_address" value="<?php echo "$row[st_address]"?>" /><br />
  
    School<input type="text" name="s_school" value="<?php echo "$row[st_school]"?>" /><br />
    
     Totaldegree<input type="text" name="s_totaldegree" value="<?php echo "$row[st_totaldegree]"?>" /><br />
     
    Class<input type="text" name="s_class" value="<?php echo "$row[st_class]"?>" /><br />

 Gender<input type="text" name="s_gender" value=" <?php echo "$row[st_gender]"?>"><br />

Phone<input type="text" name="s_phone" value="<?php echo "$row[st_phone]"?>" /><br />


Email<input type="text" name="s_email" value="<?php echo "$row[st_email]"?>" /><br />

Username<input type="text" name="s_username" value="<?php echo "$row[st_username]"?>" /><br />

Password<input type="text" name="s_password" value="<?php echo "$row[st_password]"?>" /><br />


<input type="submit" name="submit" value="تعديل" />

 </form>
  <?php
	;}
	
	
	 mysql_close($con);
	?>
   
</body>
</html>