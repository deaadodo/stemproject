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
	$sql = "SELECT * FROM parents" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form method="get" action="parent_update.php">
<input type="hidden" name="p_id" value="<?php echo "$row[pa_id]"?>" /><br />


  Name<input type="text" name="p_name" value="<?php echo "$row[pa_name]"?>" /><br />
  
  
  Address<input type="text" name="p_address" value="<?php echo "$row[pa_address]"?>" /><br />
 
 Gender<input type="text" name="p_gender" value=" <?php echo "$row[pa_gender]"?>"><br />

Phone<input type="text" name="p_phone" value="<?php echo "$row[pa_phone]"?>" /><br />


Email<input type="text" name="p_email" value="<?php echo "$row[pa_email]"?>" /><br />

Username<input type="text" name="p_username" value="<?php echo "$row[pa_username]"?>" /><br />

Password<input type="text" name="p_password" value="<?php echo "$row[pa_password]"?>" /><br />


<input type="submit" name="submit" value="تعديل" />

 </form>
  <?php
	;}
	
	
	 mysql_close($con);
	?>
   
</body>
</html>