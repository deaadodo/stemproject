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
		mysql_query("set names 'utf8'");
	$sql = "SELECT * FROM parents" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>


  Name <?php echo "$row[pa_name]"."   "?><br/><br/>
  
  
  Address <?php echo "$row[pa_address]"."   "?><br/><br/>
 
  
  Gender <?php echo "$row[pa_gender]"."   "?><br/><br/>
  
  Phone <?php echo "$row[pa_phone]"."   "?><br/><br/>

Email <?php echo "$row[pa_email]".""?><br/><br/>

Username <?php echo "$row[pa_username]".""?><br/><br/>
 
Password <?php echo "$row[pa_password]"."<hr>"?><br/><br/>

  <?php
	;}
	 mysql_close($con);
	?>
</body>
</html>