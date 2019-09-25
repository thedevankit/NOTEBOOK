<?php
$mysql_host = "localhost";
$mysql_database ="gesstory"; //create the database called "comment_sys"
$mysql_user = "root";
$mysql_password = "";

$con=mysql_connect($mysql_host,$mysql_user,$mysql_password);

if($con)
{
	echo "connected to data based";
}
else
{
	echo "errors<b>".mysql_errno();
	echo "<br>";
	echo "errors".mysql_error();
	echo "</b>";
}
	$db=mysql_select_db($mysql_database,$con);

 /*	$result=mysql_fetch_array($db);
 
	$ip=$_SERVER['REMOTE_ADDR'];
	$dt=date('r',time());
	
 */
/* $var_row =mysql_query("SELECT * FROM stories ");*/
date_default_timezone_set('asia/kolkata');
$feeling=$_POST['feeling'];
$topic=$_POST['topic'];
$message=$_POST['message'];
$ip=$_SERVER['REMOTE_ADDR'];
$dt=date('r',time());

	$var_row=mysql_query("INSERT INTO stories VALUES ('1','$topic','$feeling','','$message','$ip','$dt','1')");
	if ($var_row) 
	{
		echo "inserted into data based";
	}


?>