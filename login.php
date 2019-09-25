<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS'])==true){
      header('location:index.php');
  }
 /* else{
  	header('location:login.php');
  }*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Login to NoteBook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
 
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<h1> Login to NoteBook</h1>
		<div class="main-row">
			<ul class="steps">
				<li class="is-active">Sign-in</li>
				<li>Sign-up</li>
				<li>Forget Password</li>
			</ul>
			<form class="form-wrapper" action="pro.php" method="post">
				<fieldset class="section is-active"> 
					<h3>Enter your Details</h3>
					
					<input type="email" name="email" id="email" required placeholder="E.g abc@mail.com"><input type="password" name="password" id="password" placeholder="Password"><BR>

					<font style="color:red">*Don't Have account, please sign-up</font>>
					<!-- <div class="button">Next</div> -->
					<a href="signup.php"><div class="button2">sign-up</div></a>
					<input class="submit button" type="submit" value="Login">  
				</fieldset>
			</form>			
		</div>	
	</div>	
	<!-- //main --> 
		
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script> 
	
</body>
</html>