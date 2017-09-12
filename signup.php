<?php
include("includes/db.php");

 session_start(); 
 if(isset($_POST['login']))
{
	
 $lemail = $_POST['lemail'];
 $pass = $_POST['lpassword'];
 $get = "SELECT * FROM user WHERE email ='$lemail' AND pass ='$pass'";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 if($row)
 {
  $_SESSION['id'] = $row['u_id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['pic'] = $row['pic'];
    $_SESSION['city'] = $row['city'];
  $_SESSION['degree'] = $row['degree'];
  $_SESSION['specialist'] = $row['specialist'];
  $_SESSION['bio'] = $row['bio'];
   $_SESSION['add'] = $row['address'];
  $_SESSION['time'] = $row['timing'];
  $_SESSION['fees'] = $row['fees'];
  $_SESSION['efees'] = $row['efees'];
  
  
  
  header("Location: home.php");
 }
 else
 {
    echo  "<script>alert('wrong details');</script>";      
 }
}
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
                       
   <div class="wrap">
    		<div class="container">
            	<div class="row">
                	
                    
                    <div class="span4">
                    	<h2 class="title"></h2>
                        <div class="flickrs">
                            <div class="">
                                <ul></ul>
                                <div class="clear"></div>
                            </div>
                        </div> 
                    </div> 
<div class="span4">
                    	<h2 class="title">Sign Up</h2>
                        <form action="signup.php" method="post" enctype="multipart/form-data">
                        	<input class="span3" type="text" name="name" id="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
                            <input class="span3" type="email" name="email" id="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                            <input class="span3" type="text" name="degree" id="degree" value="Degree" onFocus="if (this.value == 'Degree') this.value = '';" onBlur="if (this.value == '') this.value = 'Degree';" />
                            <input class="span3" type="text" name="city" id="city" value="City" onFocus="if (this.value == 'City') this.value = '';" onBlur="if (this.value == '') this.value = 'City';" />
                           <select class="form-control" name="specialist"/>
                            <option >Select your Specialization</option>
                             <option>Allergist</option>
                             <option>Anesthesiologist</option>
                             <option>Cardiologist</option>
<option>Dentist</option>
<option>Dermatologist</option>
<option>Gastroenterologist</option>
<option>Hematologist</option>
<option>Nephrologist</option>
<option>Neurologist</option>
<option>Neurosurgeon</option>
<option>Obstetrician</option>
<option>Gynecologist</option>
<option>Ophthalmologist</option>
<option>Orthopaedic Surgeon</option>
<option>Otolaryngologist</option>
<option>Pathologist</option>
<option>Plastic Surgeon</option>
<option>Urologist</option>
<option>Others</option>
</select><br>

                            <input class="span3" placeholder="Password" type="password" name="password" id="password" value="Password" onFocus="if (this.value == 'Password') this.value = '';" onBlur="if (this.value == '') this.value = 'Password';" /><BR>
                            <b>Profile Picture</b>
                            <input class="span3" type="file"  name="pic" />
							<input class="span3" type="text" name="add" id="add" value="Address" onFocus="if (this.value == 'Address') this.value = '';" onBlur="if (this.value == '') this.value = 'Address';" />
                            <input class="span3" type="text" name="time" id="time" value="Timing" onFocus="if (this.value == 'Timing') this.value = '';" onBlur="if (this.value == '') this.value = 'Timing';" />
                            <input class="span3" type="text" name="fees" id="fees" value="Fees" onFocus="if (this.value == 'Fees') this.value = '';" onBlur="if (this.value == '') this.value = 'Fees';" />
                            <input class="span3" type="text" name="efees" id="efees" value="Emergency Fees" onFocus="if (this.value == 'Emergency Fees') this.value = '';" onBlur="if (this.value == '') this.value = 'Emergency Fees';" />
							<textarea name="bio" id="bio" class="span3" onFocus="if (this.value == 'Bio') this.value = '';" onBlur="if (this.value == '') this.value = 'Mbio';" >Bio</textarea>
                            <div class="clear"></div>
                            <input type="reset" class="btn dark_btn" value="Clear form" />
                            <input type="submit" class="btn send_btn" name="signup" value="Sign Up" />
                            <div class="clear"></div>
                        </form>
                    </div> 						
					
<div class="span4">
                    	<h2 class="title">Log In</h2>
                        <form action="signup.php" method="post" enctype="multipart/form-data">
                        	<input class="span3" type="text" name="lemail" id="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                            <input class="span3" type="password" name="lpassword" id="password" value="Password" onFocus="if (this.value == 'Password') this.value = '';" onBlur="if (this.value == '') this.value = 'Password';" />
                            <div class="clear"></div>
                            <input type="submit" class="btn send_btn" name="login" value="Log In" />
                            <div class="clear"></div>
                        </form>                        
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
<?php




if(isset($_POST['signup']))
{ 	
 $name = $_POST['name'];
 $email = $_POST['email'];
 $city = $_POST['city'];
$time = $_POST['time'];
$fees = $_POST['fees'];
$add = $_POST['add'];
$efees = $_POST['efees'];
 $g = "SELECT email  FROM user WHERE  email ='$email'";
  $r = mysqli_query($con,$g);
   $ch = mysqli_fetch_array($r);
   if (strlen($ch['email']) != 0)
   {echo "<script>alert('This email id is already registered...!!!');</script>"; }
else {
	$degree = $_POST['degree'];
    $specialist = $_POST['specialist'];
    $pass = $_POST['password'];
    $bio = $_POST['bio'];
	
   $url = "compressed_udp/" ; //for compression

function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
//function ends here :) 
    $file = rand(1000,100000)."-".$_FILES['pic']['name'] ;
    $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['pic']['tmp_name'] ;
	$file_size = $_FILES['pic']['size'];
    $file_type = $_FILES['pic']['type'];
	$folder="udp/";
	$target_file = $folder.basename($_FILES["pic"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);


	if($FileType != "jpg" && $FileType != "JPG" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" )  
    {
     echo "<script>alert('it seems your image format is not supported by our system, we are sorry for trouble!!!');</script>"; 
}
 else
 {  $filename = compress_image($temp_file, $url.$files, 10); //for compression 
compress_image($temp_file, $folder.$files, 40); //for compression 
//move_uploaded_file($temp_file,$folder.$files);  
	
	
 $insert_user = "INSERT INTO user (name,email,degree,specialist,pic,pass,bio,city,address,timing,fees,efees) VALUES('$name','$email','$degree','$specialist','$files','$pass','$bio','$city','$add','$time','$fees','$efees')";
 $run_user = mysqli_query($con, $insert_user);
		
		if($run_user)
 {
	  echo "<script>alert('successfully registered!!');</script>";  
	  echo "<script> alert('redirecting'); window.location.assign('signup.php'); </script>"; 
 }
 else
 {
       echo "<script>alert('error while registering you...');</script>";
 }

}
}
}
?>
