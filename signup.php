 
<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
</head>
<style type="text/css">
	.aks{

		margin-top:-10px;
	}

</style>
<body>
	<!-- main -->
	<div class="main-agileits">
		<!-- <h1> Create Account</h1> -->
		<div class="main-row aks">
			<ul class="steps">
				<li>Sign-in</li>
				<li class="is-active">Sign-up</li>
				<li>Forget Password</li>
			</ul>
			<form class="form-wrapper" action="data2.php" method="post">
				<fieldset class="section is-active"> 
					<h3>Your Details</h3>
					<input type="text" name="name" id="name" placeholder="Your Name" required="">
					<input type="email" name="email" id="email" placeholder="Your Email" required="">
					
					<a href="login.php"><div class="button2">LOGIN</div></a>  
				<!-- 
					<h3>Account Type</h3> -->
					<div class="row cf">
						
						<textarea class="text1" name="about"  placeholder="Write about Your Self."></textarea>
						<div class="four w3grids-agile">
							
						</div>
					
					</div>				<!-- 
					<h3>Choose a Password</h3> -->
					<input type="password" name="password" id="password" placeholder="Enter your Password">
					<input type="password" name="password2" id="password2" placeholder="Re-enter your Password">
					<BR>
					<font style="color:red">*Have account, please Login</font>
					<input class="submit button" type="submit" value="Sign Up">
				<!-- 
					<h3>Account Created !</h3>
					<p>Your account has been created successfully. please Login</p>
					<div class="button">Reset</div>
					<a href="login.html"><div class="button2">LOGIN</div></a> --> 
				</fieldset>
			</form>
		</div>	
	</div><style type="text/css">
		/*.diva{
			margin:0px;
			padding:0px;
		}*/
	</style>	
	<div class="diva">
		
	</div>

	<!-- //main --> 
		
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script>
		/*$(document).ready(function(){
		  $(".form-wrapper .button").click(function(){
			var button = $(this);
			var currentSection = button.parents(".section");
			var currentSectionIndex = currentSection.index();
			var headerSection = $('.steps li').eq(currentSectionIndex);
			currentSection.removeClass("is-active").next().addClass("is-active");
			headerSection.removeClass("is-active").next().addClass("is-active");

			$(".form-wrapper").submit(function(e) {
			  e.preventDefault();
			});

			if(currentSectionIndex === 3){
			  $(document).find(".form-wrapper .section").first().addClass("is-active");
			  $(document).find(".steps li").first().addClass("is-active");
			}
		  });
		});*/
	</script> 	
	<!-- //js --> 
</body>
</html>