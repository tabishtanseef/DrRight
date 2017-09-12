<?php
include("includes/db.php");
include("functions.php");
 session_start(); 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dr Right</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="js/google-code-prettify/prettify.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->  

</head>
<body>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span2">
                        	<div class="logo"><a href="index.php"><img height="40%" width="70%"src="img/drlogo.png" alt="" /></a></div>
							
                        </div>
						 <div class="span5">
						 <div class="follow_us">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        	<div class="widget">
                                	<form class="form-search">
                                        
										<input type="text" class="input-medium search-query" placeholder="Specialist">
                                        <input type="text" class="input-medium search-query" placeholder="City">
										<button type="submit" class="btn dark_btn">Search</button>
                                     </form>
                                </div>
                        </div>
                        <div class="span5">
                        	<div class="follow_us">
                                <ul>
                                    <li><a href="#" class="facebook">Facebook</a></li>
                                 
                                    <li><a href="#" class="twitter">Twitter</a></li>
                                    
                                </ul>
                            </div>
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">
                                      <li class="current"><a href="home.php">Home</a></li>
                                      
                                       <li class="sub-menu"><a href="javascript:{}">Doctors</a>
                                          <ul>
                                              <li><a href="Allergist.php"><span>-</span>Allergist</a></li>
                                              <li><a href="Anesthesiologist.php"><span>-</span>Anesthesiologist</a></li>
                                              <li><a href="Cardiologist.php"><span>-</span>Cardiologist</a></li>
                                              <li><a href="Dentist.php"><span>-</span>Dentist</a></li>   
                                              <li><a href="Dermatologist.php"><span>-</span>Dermatologist</a></li>
                                              <li><a href="Gastroenterologist.php"><span>-</span>Gastroenterologist</a></li>
                                              <li><a href="Hematologist.php"><span>-</span>Hematologist </a></li>
                                              <li><a href="Nephrologist.php"><span>-</span>Nephrologist</a></li>  
                                              <li><a href="Neurologist.php"><span>-</span>Neurologist</a></li>
                                              <li><a href="Neurosurgeon.php"><span>-</span>Neurosurgeon</a></li>
                                              <li><a href="Obstetrician.php"><span>-</span>Obstetrician</a></li>
                                              <li><a href="Gynecologist.php"><span>-</span>Gynecologist</a></li>   
                                              <li><a href="Ophthalmologist.php"><span>-</span>Ophthalmologist</a></li>
                                              <li><a href="Orthopaedic.php"><span>-</span>Orthopaedic Surgeon</a></li>
                                              <li><a href="Otolaryngologist.php"><span>-</span>Otolaryngologist</a></li>
                                              <li><a href="Pathologist.php"><span>-</span>Pathologist</a></li>  	
                                              <li><a href="Plastic.php"><span>-</span>Plastic Surgeon</a></li>   
                                              <li><a href="Urologist.php"><span>-</span>Urologist</a></li>
                                          </ul>                                          
                                      </li>
                                      <li><a href="signup.php">Join</a></li> 
                                      
                                      <li><a href="contacts.html">Contact</a></li>
									  <li><a href="about.html">About Us</a></li>
                                    </ul>
                                </div>
                             </nav>                            
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->
     
    <!--page_container-->
    <div class="page_container">
        <!--slider-->
        <div id="main_slider">
            <div class="camera_wrap" id="camera_wrap_1">
                <div data-src="img/specialist/allergist/1.jpg"></div>
                <div data-src="img/specialist/allergist/4.jpg"></div>
                <div data-src="img/specialist/allergist/2.jpg"></div>
                <div data-src="img/specialist/allergist/3.jpg"></div>
                <div data-src="img/specialist/allergist/5.jpg"></div>
                <div data-src="img/specialist/allergist/6.jpg"></div>					
            </div><!-- #camera_wrap_1 -->
            <div class="clear"></div>	
        </div>        
        <!--//slider-->
                       
        <!--planning-->
       
        <!--//planning-->
        
        <!--Welcome-->
        <div class="wrap block">
            <div class="container welcome_block">
            	<div class="welcome_line welcome_t"></div>
            	Who Is An ALLERGIST?<span>An ALLERGIST is the one who take cares of our Allergy problem.</span>
                <div class="welcome_line welcome_b"></div>
            </div>
        </div>
        <!--//Welcome-->         
        
        <!--featured works-->
       

        <!--Latest news-->
        
        <!--latest posts-->
        <div class="wrap block carousel_block">
            <div class="container">
            	<h2 class="upper">Choose Your Favourite ALLERGIST</h2>
            	<div class="row">
                    <div class="span12">
                       <ul id='mycarousel2' class='jcarousel-skin-tango'>
                        <?php 
					$all='allergist';
					$get_posts ="select * from user WHERE specialist = '$all' order by rand()";
				$run_posts= mysqli_query($con, $get_posts);
				 
				while($row_posts=mysqli_fetch_array($run_posts))
				{
					$u_id = $row_posts['u_id'];
					$name = $row_posts['name'];
					$city = $row_posts['city'];
					$pic=$row_posts['pic'];
					$degree = $row_posts['degree'];
					$spe = $row_posts['specialist'];
					$fee = $row_posts['fees'];
					$efee = $row_posts['efees'];
					$time = $row_posts['timing'];
					$add = $row_posts['address'];		
				
							
                         echo "
						
                            <li>
                            	<div class='post_carousel'>
                                	<img src='udp/$pic' width='70%' height='100px' />
                                	<div class='title_t'><a href='profile.php?uid=$u_id'>Dr.$name</a></div>
                                    <div>
                                		 <a href='#'>$spe</a> In <a href='#'>$city</a>
                                    </div>
									 <div >
                                		 <a href='#'>Rs. $fee Fees</a> Between <a href='#'>$time</a>
                                    </div>
									<div >"
                                	;?> <a href='#'><?PHP avoid($u_id);?></a> people are saying for avoiding.</br> <a href='#'><?PHP tri($u_id); ?></a> people are saying for trying.</br> <a href='#'><?PHP reco($u_id);?></a> people are recommanding.</br> </a>
                                    <?php echo"</div>
                                    
                                </div>	
                            </li>";  } ?> </ul>     
							</div>
                </div>                
            </div>
        </div>        
        <!--//latest posts--> 
    </div>
    <!--//page_container-->
    
    <!--footer-->
    <div id="footer">
    	
        
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.html"><img height="20%" width="40%"src="img/drlogo.png" alt="" /></a></div>    
                        	<div class="copyright">&copy; 2017 Dr. Right, Know Your Doctor </br>All Rights Reserved.</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                        <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                        <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                        <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="index.html" class="current">Home</a></li>
                                        <li><a href="signup.php">Log In</a></li>
                                        <li><a href="signup.php">Sign Up</a></li>
                                        <li><a href="aboutus.php">About Us</a></li>
                                        <li><a href="contacts.html">Contact Us</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>

