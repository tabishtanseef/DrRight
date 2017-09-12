<?php
include("includes/db.php");
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
        <?php
				
				if(isset($_GET['uid']))
			{
				$u_id = $_GET['uid'];
				$get_users="select * from user where u_id=$u_id";
				$run_users= mysqli_query($con, $get_users);
				 
				while($row_posts=mysqli_fetch_array($run_users))
				{
					$u_id = $row_posts['u_id'];
					$email = $row_posts['email'];
					$name = $row_posts['name'];
					$city = $row_posts['city'];
					$pic  = $row_posts['pic'];
					$bio  = $row_posts['bio'];
					$degree = $row_posts['degree'];
					$spe = $row_posts['specialist'];
					$fee = $row_posts['fees'];
					$efee = $row_posts['efees'];
					$time = $row_posts['timing'];
					$add = $row_posts['address'];	
					
				    echo "
                   <div class='page_container'>
    	           <div class='breadcrumb'>
                   <div class='wrap'>
               	   <div class='container'>
                   <a href='index.php' style='float:left;' >Home</a><span>/</span>Dr. $name 
			       </div>		
                   </div>
                   </div>
    	           <div class='wrap'>
                   <div class='container'>
                   <section>
                   <div class='row'>
                    	<div class='span7'>
                        	<div class='post'> 
							<img src='udp/$pic' width='70%' />
                            </div>
				 "; 
				} 
				
			 $get_posts ="select * from post where uid= '$u_id' order by post_id desc";
				$run_posts= mysqli_query($con, $get_posts);
				 
				while($row_posts=mysqli_fetch_array($run_posts))
				{
					$post_id = $row_posts['post_id'];
					$title = $row_posts['title'];
					$caption = $row_posts['caption'];
					$pic = $row_posts['pic'];
					$date = $row_posts['date'];		
				
							
                         echo   "<div class='post'>
                            	<h2 class='title'><span>$title</span></h2>
                           		<img src='pdp/$pic' width='100%' height='205px'/>
                                <div class='post_info'>
                                	<div class='fleft'><span>$caption </span></div>
                                    <div class='fright'>  By <span>Dr. $name On $date</span></div>                                    
                                	<div class='clear'></div>
                                </div>
                   
                           
				</div>"; }
                           
                        
                     echo "  </div>
                    	<div class='span5'>
                        	<div class='sidebar'>";
                            	
                              echo  "<div class='widget'>
                                	<h2 class='title'><span>Dr. $name </span></h2>
									<h3 class='title'><span>$email</span></h3>
									<h2 class='title'><span>$city </span></h2>
									<h2 class='title'><span>$degree</span></h2>
                                	<h4><p>$bio</p></h4>
                                     <h2 class='title' style='color: red;'>Clinic Details </h2>
									 <table>
									 <tr><td><h4 class='title'>Address </h4></td><td>:</td> <td style= 'align= right;'><h4>$add</h4></td></tr>
									 <tr><td><h4 class='title'>Timing </h4></td><td> :</td> <td><h4> $time</h4></td></tr>
									 <tr><td><h4 class='title'>Fees </h4></td><td>: </td> <td><h4>$fee</h4></td></tr>
									 <tr><td><h4 class='title'>Emergency Fees </h4></td><td> :</td> <td><h4>  $efee</h4></td></tr>
									 </table>
									
                                 </div>";?>
							<div class='widget'>
                                	<h2 class='title' style='color: red;'>Rate Your Dr.</h2>
                        <form action='profile.php' method='post' enctype='multipart/form-data'>
                        	<label><input  type='radio' name='star' value='Avoid'>Avoid</label><label><input  type='radio' name='star' value='Try'>Try it once</label><label><input  type='radio' name='star' value='Rec'>Recommend</label></br></br>
							<h2 class='title' style='color: blue;'> Give Feedback!</h2>
							<input class='span3' type='text' name='title' id='title' value='Title' onFocus="if (this.value == 'Title') this.value = '';" onBlur="if (this.value == '') this.value = 'Title';" />
                            <textarea   name='caption' id='caption' class='span3' onFocus="if (this.value == 'Feedback') this.value = '';" onBlur="if (this.value == '') this.value = 'Feedback';" >Feedback</textarea>
                            <input class='span3' type='text' name='name' id='name' value='Name' onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
                            <div class='clear'></div>
                            <input type='reset' class='btn dark_btn' value='Clear form' />
                            <input type='submit' name='feed' class='btn send_btn' value='Post!' />
                            <div class='clear'></div>
                        </form>
			</div>   <?php 
			                    if(isset($_GET['uid']))
								{ $id = $_GET['uid']; 
                                   $_SESSION['i_d'] = $id;
			echo "<div class='widget'>
                                	<h2 class='title'><span>FeedBACK</span></h2>
                                	<ul class='recent_post'>"; 
                                    $get_posts ="select * from feed where uid='$id' order by f_id desc";
				$run_posts= mysqli_query($con, $get_posts);
				 
				while($row_posts=mysqli_fetch_array($run_posts))
				{
					$f_id = $row_posts['f_id'];
					$title2 = $row_posts['title'];
					$caption2 = $row_posts['caption'];
					$name2 = $row_posts['name'];
							echo"<li>
                                            <div>$title2</br>$caption2</div>
                                            By $name2
                                        	<div class='clear'></div>
								</li>"; } }
                                   echo "</ul>
                                	
                                </div>";
			
                                if(isset($_GET['uid']))
								{ $id = $_GET['uid']; 
                                echo "<div class='widget'>
                                	<h2 class='title'><span>Shared links By Dr. $name</span></h2>";
                                $get_posts ="select * from links where uid='$id' order by l_id desc";
				$run_posts= mysqli_query($con, $get_posts);
				 
				while($row_posts=mysqli_fetch_array($run_posts))
				{
					$l_id = $row_posts['l_id'];
					$title = $row_posts['title'];
					$link = $row_posts['link'];
		               echo  "<ul class='links'>
                                    	<li>$title<br><a href='#'>$link</a></li></ul> 
										 
								";	}} }  ?> 
									
                                </div>                            
                            </div>                             
                        </div>                	
                	</div>
                </section>
            </div>
				</div>
    </div> 
    <!--//page_container-->
    
    <!--footer-->

    	
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
                                    <button type="submit" class="btn dark_btn">Search</button>
									</form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                      </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="home.php" class="current">Home</a></li>
                                        <li><a href="signup.php">Join Us</a></li>
                                        <li><a href="about.html">About Us</a></li>
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
    <script src="js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>    
    <script src="js/application.js"></script>
</body>
</html>
<?php 
if(isset($_POST['feed']))
{   
			
			$id = $_SESSION['i_d'];
			
	$title=$_POST['title'];
	$caption=$_POST['caption']; 
$name=$_POST['name'];
if(isset($_POST['star'])){
 $stars = $_POST['star'];
 }	
 $insert_post = "INSERT INTO feed (uid,stars,title,caption,name) VALUES('$id','$stars','$title','$caption','$name')";
 $run_user = mysqli_query($con, $insert_post);
 if($run_user)
 {
	  echo "<script>alert('successfully posted!!');</script>";
 echo "<script> alert('redirecting'); window.location.assign('index.php'); </script>";	  
	  }
 else
 {
       echo "<script>alert('error while posting...');</script>";
 }
 }

?>