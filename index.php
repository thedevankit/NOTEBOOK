  
<?php 
 session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }

   require('config.php');
  
  $feeling;
  $topic;
  $message;
  $i=0;

   $result=mysql_query("SELECT * FROM stories ");
  

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Story</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
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
						    	<li class="active"><a href="index.php">Home</a></li>
						    	<li><a href="news.php">My Notes</a></li>
						    	<li><a href="single.php">Timeline</a></li>
						    	<li><a href="gallery.html">Gallery</a></li>
						    	<li><a href="single.php">Blog</a></li>
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
   <div class="banner">
   	  <div class="container_wrap">

   		<h1>Share your Notes. </h1>
   		 <form id="reg-form" action="data.php" method="post" enctype="multipart/form-data">
          <input type="text" name="title" placeholder="Give a title to your Notes"  required>
             <div class="contact_btn">
   	       <div class="dropdown-buttons">   
            		<div class="dropdown-button">           			
            		<select name="topic" class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                  <option value="My Story">Select Branch</option>	
      						<option value="Computer">Computer</option>
      						<option value="IT">Information technology</option>
      						<option value="Mech">Mechanical</option>
      						<option value="Civil">Civil</option>
      						<option value="Automobile">Automobile</option>
      						<option value="Electronics">Electronics</option>
      						<!-- <option value="Viral Mode">Viral Mode</option>-->
      						<option value="Electrical">Electrical</option> 
      						<option value="Other">Other</option>

					     </select>
					</div>
				     <div class="dropdown-button">
					  <select name="feeling" class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}' required>
            			<option value="HandWritten">Hand-Written</option>	
						<option value="Book">Books</option>
						<option value="Xerox">Xerox</option>
						<option value="ImpNotes">IMP-Notes </option>
						<!-- <option value="movie">Movie</option>
						<option value="coading">Coading </option>
						<option value="partying">Partying</option>
						<option value="cooking">Cooking</option> -->

					  </select>
					 </div>
				   </div>

		    	   <textarea class="textarea1" name="message" placeholder="Write a short Discription about your notes." required></textarea>
               
               <center><input class="textarea1" type="file" name="file" >	      
</center>
                <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Share your Notebook"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"></div>
         </div>
   </div>
   <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Highlights</a></li> 
				</ul>
			</div>
		</div>
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
		</div>  -->
		<div class="col-md-4 filter_grid ">
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
   </div>
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
          
          <?php 
   while ($var_row=mysql_fetch_array($result)) 
   {  
     
     /* $S_date=date_format("D/m/y");*/
      ?>
     
         <div class="top_grid">
          <div class="col-md-3 index-grids">
              <div class="grid1">
               <div class="view view-first">
                  <div class="index_img"><img src="upload/pdf.ico"  height="170" alt=""/></div>
                   <div class="sale"><?php echo$var_row['datetime'];?></div>
                      <div class="mask">
                        
                        <ul class="mask_img">
                           <li class="star"><img src="images/star.png" alt=""/></li>
                           <li class="set"><img src="images/set.png" alt=""/></li>
                               <div class="clearfix"> </div>
                               <div class="clearfix"> </div>
                             <form id="show-story" action="story.php" method="post">
                           <input type="hidden" name="articleid" value="<?php echo $var_row['id']; ?>">
                           <label class="btn1  btn-2g"><input name="storytitle" type="submit" id="show_more" value=" show more" ></label>                              
                           </form>
                           <div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                <div class="inner_wrap"> 
                  <h3><?php echo $var_row['title'];?></h3>
                  <ul class="star1">
                    <h4 class="green"><?php echo $var_row['writer'];?></h4>
                    <li> <img src="images/star1.png" alt=""> </li>
                  </ul>
                </div>
               </div>
                <div class="clearfix"> </div>
            </div>

            </div>
            <?php
            }

            ?>

   			
   			<!-- <div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3> <?php ;?></h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">author</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3><?php //echo "$title[2]";?></h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">author</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale"><?php //echo "$dt[3]";?></div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3><?php //echo "$title[3]";?></h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">author</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div> -->
   			<div class="clearfix"> </div>
   		</div>

   	    <div class="middle_grid wow fadeInUp" data-wow-delay="0.4s">
   			<!-- <div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img"><img src="images/pic4.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div> -->
   			<!-- <div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star2.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star1.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div> -->
   			<div class="clearfix"> </div>
   		</div>
   		<!-- <div class="top_grid wow fadeInRight" data-wow-delay="0.4s">
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic1.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                       <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                        </div>
                    </div> 
                    <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   		<div class="bottom_grid wow bounce" data-wow-delay="0.4s">
   		  <div class="col-md-6 index-grids">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star2.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="single.html" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="b_home"></i>
   				  <div class="inner_wrap2">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="b_home1"> </i>
   				 <div class="inner_wrap2">
   				 	<h3>Lorem Ipsum is simply dummy text</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="clearfix"></div>
   			</div>
   		  </div>
   		  <div class="offering">
   		  	  <h2>What can Hotel Deluxe offer to you ?</h2>
   		  	  <h3>Ut wisi enim ad minim veniam, quis</h3>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		  	  <div class="real">
   		  	  	<h4>Reality</h4>
   		  	  	<div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s1"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod maxim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s2"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod maxim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="clearfix"> </div>
   	   			 </div>
   		  	  </div>
   		  </div>-->
   	  </div> 
   </div>
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