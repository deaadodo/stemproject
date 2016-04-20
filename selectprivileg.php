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
    <form name="myform" method="post" >
<input type="hidden" name="p_id" value="<?php echo "$row[pr_id]"?>" />
 Name:<input type="text" name="p_name" value="<?php echo "$row[pr_name]"?>" /><br/><br/><br/>

 Username:<input type="text" name="p_username" value="<?php echo "$row[pr_username]"?>" /><br/><br/><br/>
 
 Password:<input type="text" name="p_password" value="<?php echo "$row[pr_password]"?>" /><br/><br/><br/>
  
</form>

  <?php
	;}
	 mysql_close($con);
	
	?>
	 <?php
	 
	 
	 ?> 
