<?php 
  	include('config.php');
			$name=mysql_real_escape_string($_POST['name']);
			$email=mysql_real_escape_string($_POST['email']);
			$about=mysql_real_escape_string($_POST['about']);
			$password=md5($_POST["password"]);
			$dt=date('Y-m-d G:i:s');			
			$ip=$_SERVER['REMOTE_ADDR'];


			$var_row=mysql_query("INSERT INTO users (id, name, email, about, password,regdate,ipaddress ) VALUES ('','$name','$email','$about','$password','$dt','$ip')");
			  

			if ($var_row) 
			   {
			     
			      header("location:login.php");
			   
			   }

				else
				{

				   echo "not set data".mysql_error();
				   echo "<br>".mysql_errno();
				}
			
	


	
 

?>