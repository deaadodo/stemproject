<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>select_grdelete</title>
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
	$sql = "SELECT * FROM privileg" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
   <form method="get" action="privileg_delete.php">
<input type="hidden" name="p_id" value="<?php echo "$row[pr_id]"?>" /><br />


Name<input type="text" name="p_name" value="<?php echo "$row[pr_name]"?>" /><br />

Username<input type="text" name="p_username" value="<?php echo "$row[pr_username]"?>" /><br />

Password<input type="text" name="p_password" value="<?php echo "$row[pr_password]"?>" /><br />

<input type="submit" name="submit" value="حذف" />

 </form>
  <?php
	;}
	
	
	 mysql_close($con);
	?>
   

</body>
</html>