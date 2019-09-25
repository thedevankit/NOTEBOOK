<?php
session_start();
include_once('config.php');
 if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');


  }
else{

	  $feeling;
	  $topic;
	  $message;
	  $i=0;
	  $wri=$_SESSION['authname'];
	  $query="select * from stories where writer='".$wri."'";

	  $query1="select * from users where name='".$wri."'";

  		$result=mysql_query($query);

	   $result1=mysql_query($query1);
	  
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>NoteBook</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
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
						    	<li class="active" ><a href="news.php">My Notes</a></li>
						    	<li ><a href="single.php">Timeline</a></li>
						    	<li><a href="gallery.html">Gallery</a></li>
						    	<li><a href="404.html">Blog</a></li>
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
						               <!--   <span><a href="#">Change your password?</a></span> -->
							      </form>  
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
    </div>
   <!--  <div class="banner">
   	  <div class="container_wrap">
   		<h1>What are you looking for?</h1>
   	       <div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Dubai</option>	
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3"> New Zealand</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					  </select>
					</div>
				     <div class="dropdown-button">
					  <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Hotels</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					  </select>
					 </div>
				   </div>  
		    <form>
				<input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"></div>
         </div>
   </div> -->
    <!--  <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Highlights</a></li> 
				</ul>
			</div>
		</div> -->
		<!-- <div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Dubai</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Show Map</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">maxim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		       </div>
		</div> -->
		<!-- <div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon4"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div> -->
   <div class="living_middle">
   	  <div class="container">
   		  <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   		  	<ul class="feature">
                   <li> <i class="icon-trophy"></i></li>
                    <li class="feature_right"><h4>Your Details</h4>
                    <p class="alert alert-info form-control-static">
                    <?php 
   $var_row1=mysql_fetch_array($result1)
     
   	?>
                        <label class="control-label" for="email">Email: <input class="form-control" value="<?php echo$var_row1['email'];?>" id="disabledInput" type="text" disabled>
                        </label>		   
					     
					    
                    </p>
                    <p class="alert alert-danger">

                         <label class="control-label" for="email">About:-</label>
                       <?php echo$var_row1['about'];?>
                    </p>
                    <p>
                    <?php ?>

                      <!--    <form method="post" id="regform" autocomplete="off"class="alert alert-warning">
                         <label class="control-label" for="email">Chnage your passowrd: </label>
							  <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="oldpass" placeholder="enter old Password">
							  </div>
							  <div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="newpass" placeholder="Enter new Password">
							  </div>
							  <div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="cnewpass" placeholder="Conform Password">
							  </div>

							  <div class="input-group">
							    <input class="btn btn-warning" type="submit" class="form-control" name="msg" placeholder="submit">
							  </div>

							
						</form>  -->
                    </p>
                    
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <!-- <ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Lorem ipsum dolor</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-audio"></i></li>
                    <li class="feature_right"><h4>Hotel Services</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature last_grid">
                   <li> <i class="icon-video"></i></li>
                    <li class="feature_right"><h4>Nemo ipsam</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul> -->
         </div>
         <div class="col-md-8 wow fadeInRight" data-wow-delay="0.4s">
          <div class="educate_grid">
            <?php 
   while ($var_row=mysql_fetch_array($result)) 
   {  
     
     /* $S_date=date_format("D/m/y");*/
      ?>
		    <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="upload/pdf.ico"  class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label"><?php echo$var_row['datetime'];?></span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#"><?php echo $var_row['title'];?></a></h3>
				<p>By You </p>
				<p class="educate"><img src="images/star1.png" alt=""/></p>
				<p class="price pr_box">0</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div>
		   
		   <?php
            }

            ?>
		   <!-- <div class="educate_grid1">
            <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="images/e1.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Balcony</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<p class="educate"><img src="images/star1.png" alt=""/></p>
				<p class="price pr_box">$150</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div> --><!-- 
		    <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="images/e2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Pool</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">aliquam volutp</a></h3>
				<p>Lorem ipsum consectetuer adipiscing </p>
				<p class="educate"><img src="images/star1.png" alt=""/></p>
				<p class="price pr_box">$150</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div> -->
		   
		 </div>
      </div>
   </div>
  <!--  <div class="living_bottom">
   	  <div class="container">
   	  	<h2 class="title block-title">Latest Posts</h2>
   	  	<div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  	<div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single.html">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2015</span></p>
   	  	</div>
   	  </div>
   </div> -->
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
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
				<li><a href="#">Claritas</a></li>
				<li><a href="#">Mirum est</a></li>
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
			 <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>


<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#regform').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'paasch.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
			//data1: $(this).serialize() // it will serialize the form data

		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Passord not match,...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});
</script>
</html>		