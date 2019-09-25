<?php 

 session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }


   include('config.php');
 /* $title=array();*/
  $feeling;
  $topic;
  $message;
  $i=0;
  $id=48;
 /* $dt=array();*/
/*   
testing

*/
  $result=mysql_query("SELECT * FROM stories ");
   $var_row=mysql_fetch_array($result);
    
   
  
  /* foreach ($dt[] as $dt1[]) 
   {
      $dt1[]=;
      # code...
      echo "$dt1";
   }*/

  
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>GES-MAG</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.php">Home</a></li>
						    	<li><a  href="news.php">My Stories</a></li>
						    	<li  class="active"><a href="single.php">Timeline</a></li>
						    	<li><a href="gallery.html">Gallery</a></li>
						    	<li ><a href="404.html">Blog</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				     <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form action="search.php" method="post">
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="find" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png"><span><?php echo $_SESSION['authname'];?></span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<!-- <fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset> -->
						                   <a class="btn btn-lg btn-danger"  href="logout.php">Logout</a>						                	
						            	</fieldset>
						                 <!-- <span><a href="#">Change your password?</a></span> -->
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
   <!--single start here-->
		 <div class="single">
			<div class="container">
			<div class="col-md-8 sing">
          
			<?php 
			 while ($var_row=mysql_fetch_array($result)) 
   		{
   			$message=$var_row['story'];
     	 /*echo"<b>".$var_row['id'];
         echo " </b>";
         echo"<b>".$var_row['title'];
         echo " </b>";

         echo$var_row['topic'];
         echo"  ";
         echo$var_row['feeling'];
         echo "  ";
         echo$var_row['story'];
         echo "<br>";
         				*/
			 /*  $var_row['title'];
			   $var_row['topic'];

			   
			   $var_row['photos'];
			   $dt=date('Y-m-d G:i:s');*/
		    ?>
		       <div class=" single-grid">
					<img class="img-responsive" src="upload/pdf.ico" alt=""  class="img-responsive">
					<div class="lone-line">
						<h2><!-- Social Sense Perception of Loneliness -->
						<?php echo $var_row['title'];?>
						</h2>
						<div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i>22.08.2014</span></li>
								<li><a href="#" ><i class="glyphicon glyphicon-comment"> </i>24</a></li>
							</ul>
						</div>
						<p><?php echo $message;?></p>
						<h2>
							<?php $name=$var_row['photos']; ?>
							<a href="download.php?filename=<?php echo $name ;?>" >
							<?php echo "Click Here for Download" ;  ?></a>

						</h2>
						<p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error. --></p>

					</div>

				</div>
		        

		   <?php 
		}
		  

		   ?> 
		    



				



					<div class=" single-profile">
				<h4> Related Posts</h4>
				<div class="single-left ">					
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/s1.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/s2.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/s3.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/s4.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="single-bottom">
		
			<h3>Leave a Comment</h3>
				<form>
						<div class="col-md-6 comment">
							<input type="text" placeholder="Name">
						</div>
						<div class="col-md-6 comment">
							<input type="text" placeholder="email">
						</div>
						<div class="clearfix"> </div>
							<textarea placeholder="Message" required=""> </textarea>	
							<input type="submit" value="Send">					
				</form>
		  </div>
				</div>
					<div class="col-md-3 categories-grid">
				<div class="grid-categories">
					<h4>Categories</h4>
					<ul class="popular ">
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Computer</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Information Tech</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Mechanical</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Civil</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Electronics</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Automobile</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Other</a></li>
						</ul>
				</div>
				<!-- <div class="grid-categories">
					<h4>Fliter By Feelings</h4>
					<ul class="popular popular-in">
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>SAD</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>HAPPY</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>LOVE</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>SINGING</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>WATCHING</a></li>
					</ul>
				</div> -->
			</div>
				<div class="clearfix"> </div>
			
			</div>
	</div>

<!--//single end here--> <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Subscribe to our newsletter</h3>
   	   <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<!-- <li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li> -->
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Your stories</a></li>
				<li><a href="#">Your profile</a></li>
				<li><a href="#">Settings </a></li>
				<li><a href="#">Tems and Conditions</a></li>
				<li><a href="#">about</a></li>
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2017 GESMAG. All rights reserved | Design by ANKIT SINGH</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		