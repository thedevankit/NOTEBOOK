<?php

$mysql_host = "localhost";
$mysql_database ="storybook"; //create the database called "comment_sys"
$mysql_user = "root";
$mysql_password = "";

$con=mysql_connect($mysql_host,$mysql_user,$mysql_password);

if($con)
{
	
}
else
{
	echo "errors<b>".mysql_errno();
	echo "<br>";
	echo "errors".mysql_error();
	echo "</b>";

}

$db=mysql_select_db($mysql_database,$con);

?>