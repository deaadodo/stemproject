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
    <form name="myform" method="post" >
<input type="hidden" name="s_id" value="<?php echo "$row[st_id]"?>" />
 FirstName:<input type="text" name="s_fname" value="<?php echo "$row[st_fname]"?>" /><br/><br/><br/>
 
 LastName:<input type="text" name="s_lname" value="<?php echo "$row[st_lname]"?>" /><br/><br/><br/>

 Address:<input type="text" name="s_address" value="<?php echo "$row[st_address]"?>" /><br/><br/><br/>
 
 School:<input type="text" name="s_school" value="<?php echo "$row[st_school]"?>" /><br/><br/><br/>

 Totaldegree:<input type="text" name="s_totaldegree" value="<?php echo "$row[st_totaldegree]"?>" /><br/><br/><br/>

 Class:<input type="text" name="s_class" value="<?php echo "$row[st_class]"?>" /><br/><br/><br/>

 Gender:<input type="text" name="s_gender" value="<?php echo "$row[st_gender]"?>" /><br/><br/><br/>

 Phone:<input type="text" name="s_phone" value="<?php echo "$row[st_phone]"?>" /><br/><br/><br/>

 Email:<input type="text" name="s_email" value="<?php echo "$row[st_email]"?>" /><br/><br/><br/>

 Username:<input type="text" name="s_username" value="<?php echo "$row[st_username]"?>" /><br/><br/><br/>
 
 Password:<input type="text" name="s_password" value="<?php echo "$row[st_password]"?>" /><br/><br/><br/>
  
</form>

  <?php
	;}
	 mysql_close($con);
	
	?>
	 <?php
	 
	 
	 ?> 
