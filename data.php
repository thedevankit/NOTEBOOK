<?php 
  include('config.php');
   session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
/*
<---     data based insertion of data -->

*/

	if (isset($_POST['submit'])) 
	{
	
		
		if (isset($_POST['title'])&&isset($_FILES['file'])&& isset($_POST['topic']) && isset($_POST['feeling']) && isset($_POST['message'])) 
		{
			if(move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']))
			{

			   $ip=$_SERVER['REMOTE_ADDR'];
			   $title=mysql_real_escape_string($_POST['title']);
			   $feeling=mysql_real_escape_string($_POST['feeling']);
			   $topic=mysql_real_escape_string($_POST['topic']);
			   $message=$_POST['message'];
			   $part=$_FILES['file']['name'];
			   $dt=date('Y-m-d G:i:s');
			   $writer=$_SESSION['authname'];

			   $var_row=mysql_query("INSERT INTO stories (id, topic, feeling, title, story, ip, datetime, likes,photos,writer) VALUES ('','$topic','$feeling','$title','$message','$ip','$dt','','$part','$writer')");
			  

			  if ($var_row) 
			   {
			      echo "inserted into data based";
			      echo "<b>$feeling</b><br>";
			      echo "<b>$topic</b><br>";
			      echo "<b>$message</b><br>";
			      echo "$ip <br>";
			      echo "$dt<br>";
			      header("location:index.php");
			   
			   }

				else
				{

				   echo "not set data".mysql_error();
				   echo "<br>".mysql_errno();
				}
			}
			else
				{

				   echo "not set data".mysql_error();
				   echo "<br>".mysql_errno();
				}
	 
		}


	}
 

?>