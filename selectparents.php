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
    <form name="myform" method="post" >
<input type="hidden" name="p_id" value="<?php echo "$row[pa_id]"?>" />
 Name:<input type="text" name="p_name" value="<?php echo "$row[pa_name]"?>" /><br/><br/><br/>

 Address:<input type="text" name="p_address" value="<?php echo "$row[pa_address]"?>" /><br/><br/><br/>

 Gender:<input type="text" name="p_gender" value="<?php echo "$row[pa_gender]"?>" /><br/><br/><br/>

 Phone:<input type="text" name="p_phone" value="<?php echo "$row[pa_phone]"?>" /><br/><br/><br/>

 Email:<input type="text" name="p_email" value="<?php echo "$row[pa_email]"?>" /><br/><br/><br/>

 Username:<input type="text" name="p_username" value="<?php echo "$row[pa_username]"?>" /><br/><br/><br/>
 
 Password:<input type="text" name="p_password" value="<?php echo "$row[pa_password]"?>" /><br/><br/><br/>
  
</form>

  <?php
	;}
	 mysql_close($con);
	
	?>
	 <?php
	 
	 
	 ?> 
