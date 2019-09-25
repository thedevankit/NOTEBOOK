<?php

 session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }

include('config.php');
$id=$_POST['articleid'];

 $result=mysql_query("SELECT * FROM stories WHERE id='$id'") or die('Something went wrong');
   
  //echo mysql_num_rows($result);
 while ($var_row=mysql_fetch_array($result)) 
   {
         
       /*
         echo " </b>";

         echo$var_row['topic'];
         echo"  ";
         
         echo "  ";
         
         echo "<br>";*/
   


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel  A Hotel category Flat bootstrap Responsive  Website Template | Single :: w3layouts</title>
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

<style type="text/css">
	
	.banner input[type="submit"], .footer input[type="submit"] {
    -webkit-appearance: none;
    cursor: pointer;
    border: none;
    outline: none;
    background: none;
    text-transform: uppercase;
}
</style>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.PHP"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.PHP">Home</a></li>
						    	<li><a href="news.php">My Notes</a></li>
						    	<li><a href="single.php">Timeline</a></li>
						    	<li><a href="gallery.html">Gallery</a></li>
						    	<li class="active"><a href="404.html">Blog</a></li>
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
						 
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						 					
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
						                <!--  <span><a href="#">Change your password?</a></span> -->
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
				<div class=" single-grid">
					<img class="img-responsive" src="upload/pdf.ico" alt=""  class="img-responsive">
					<div class="lone-line">
						<h2> <?php echo$var_row['title'];?></h2>
						<div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i><?php echo$var_row['datetime'];?></span></li>
								<li><a href="#" ><i class="glyphicon glyphicon-comment"> </i><?php echo$var_row['feeling']; ?></a></li>
							</ul>
						</div>
						<p><?php echo$var_row['story'];  ?></p>
						<h2>
							<?php $name=$var_row['photos']; ?>
							<a href="download.php?filename=<?php echo $name ;?>" >
							<?php echo "Click Here for Download" ; } ?></a>

						</h2>

					</div>
				</div>
					<div class=" single-profile">
				<h4> Related Posts</h4>

				<div class="single-left ">	

<?php $result1=mysql_query("SELECT * FROM stories
ORDER BY rand() LIMIT 4 ") or die('Something went wrong');

     while ($var_row=mysql_fetch_array($result1)) 
   {
       
        if ($id!=$var_row['id']) {
?>				
					<div class="col-md-3 post-top">

					<img class="img-responsive " src="upload/pdf.ico"alt="">
						<h6><?php echo $var_row['title'];?> </h6>
						<p>
							<form id="show-story" action="story.php" method="post">
	                           <input type="hidden" name="articleid" value="<?php echo $var_row['id']; ?>">
	                           <input  type="submit" class="btn btn-warning" name="storytitle" id="show_more" value="READ FULL STORY " >                          
	                        </form>
						</p>
					</div>
<?php    }}

?>
					
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
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Electronis</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Automobile</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Other</a></li>
						</ul>
				</div>
				<!-- <div class="grid-categories">
					<h4>Archives</h4>
					<ul class="popular popular-in">
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>MAY 2014</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>SEP 2012</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>JANUARY 2011</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>FEB 2010</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>NOV 2009</a></li>
					</ul>
				</div> -->
			</div>
				<div class="clearfix"> </div>
			
			</div>
	</div>

<!--//single end here-->
   <div class="footer">
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
			<!-- <h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
			</ul> -->
		  </div>
		  <!-- <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
				<li><a href="#">Claritas</a></li>
				<li><a href="#">Mirum est</a></li>
			</ul>
		  </div> -->
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy" id="contact">
              <p> &copy;  Design Developed by Ankitkumar Singh</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		