
<?php
include("includes/db.php");
session_start();
if (!isset($_SESSION['id'])) 
{	
header("location:index.php");
}
$id = $_SESSION['id'];
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

        <!--//slider-->
		<div class="page_container">
        <!--slider-->

        <!--//slider-->
                       
   <div class="wrap">
    		<div class="container">
            	
				<center><h1 class='title' style='color:blue;'> Update Your Details</h1></center>
				<div class="row">
                	
                    
                    <div class="span4">
                    	<h2 class="title" style='color:red;'>Clinic Details</h2>
                        <div class="flickrs">
                            <div class="">
                              
							<a href="update.php?N=Add"><button type="button" class="btn btn-primary">Address</button></a>
							<a href="update.php?N=Time"><button type="button" class="btn btn-primary">Timings</button></a>
							<a href="update.php?N=Fees"><button type="button" class="btn btn-primary">Fees</button></a>
							<a href="update.php?N=Efees"><button type="button" class="btn btn-primary">Emergency Fees</button></a>
							
                            <div class="clear"></div>
                            </div>
                        </div> 
                    </div> 

                    	<div class="span4">
                    	<h2 class="title" style='color:red;'>Personal Details</h2>
                        <div class="flickrs">
                            <div class="">
                             
							<a href="update.php?N=Name"><button type="button" class="btn btn-primary">Name</button></a>
							<a href="update.php?N=Degree"><button type="button" class="btn btn-primary">Degree</button></a>
							<a href="update.php?N=Pic"><button type="button" class="btn btn-primary">Profile Pic</button></a>
							<a href="update.php?N=Bio"><button type="button" class="btn btn-primary">Bio</button></a>
							   <div class="clear"></div>
                            </div>
                        </div> 
                    </div> 

					
<div class="span4">
                    	<h2 class="title" style='color:red;'>Account Details</h2>
                        <div class="flickrs">
                            <div class="">
							<a href="update.php?N=Email"><button type="button" class="btn btn-primary">Email</button></a>
							<a href="update.php?N=Pass"><button type="button" class="btn btn-primary">Password</button></a>
							
                            <a href="logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
                                <div class="clear"></div>
                            </div>
                        </div> 
                    </div> 
                    				
            	</div>
        	</div>            
        </div>
                 
   
        
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
                                        <li><a href="login.php">Log In</a></li>
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
