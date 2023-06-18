<?php
if(!isset($_SESSION)) 
{ 
	session_start();
}
include_once("connectDB.php");

$activePage = basename($_SERVER['PHP_SELF'], ".php");


if(!isset($_SESSION['user_id'])){
	if(isset($_POST['user_id'])){
		$_SESSION['user_id']=$_POST['user_id'];
	}
}

//print_r($_POST);
//print_r($_SESSION);

if(isset($_SESSION['user_id'])){
	
	$user=$userID=$_SESSION['user_id'];
}
else{
	$user=$userID=0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <title>About US</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta name="description" content="" />
 <!-- css -->
 <link href="css/bootstrap.min.css" rel="stylesheet" />
 <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
 <link href="css/jcarousel.css" rel="stylesheet" />
 <link href="css/flexslider.css" rel="stylesheet" />
 <link href="css/style.css" rel="stylesheet" />
 <link href="css/justification.css" rel="stylesheet" />

 <!-- Theme skin -->
 <link href="skins/default.css" rel="stylesheet" />
<style>

.same{
		font-family: calibri;
    	font-weight: 540;
    	font-size: 20px;
	}


</style>


</head>

<body>
 <div id="wrapper">
   <!-- start header -->
   <header>
     <div class="navbar navbar-default navbar-static-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
           <a href="index.php">
           </br><img src="assets/img/logofyp.png" height="150" width="200"></a>
         </div>
         <div class="navbar-collapse collapse ">
           <ul class="nav navbar-nav">
             <li><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="index.php">Home</a></li>
             <li class="active"><a href="aboutus.php">About Us</a></li>
             <?php
             if(isset($_SESSION['user_id'])){ ?>

             <li class="dropdown">
               <a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Games<b class=" icon-angle-down"></b></a>
               <ul class="dropdown-menu">
                 <li><a href="quiz.php">Diagnosis</a></li>
                 <li><a href="quiz2.php">Rearrange The Word</a></li>
                 <li><a href="quiz3.php">Fill in the Blanks</a></li>
               </ul>
             </li>
             <li><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="symptoms.html">Symptoms</a></li>
             <li><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="diagnosis.html">Diagnosis</a></li>
             <li><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="feedback.php">Feedback</a></li>
             <?php } ?>
             <?php
             if(isset($_SESSION['user_id'])){
              $user=select("*","users","WHERE `uID`='".$_SESSION['user_id']."'");
              $lname = $user[0]['uLname']; ?>

                    <li style = "Display: Flex;"><a style = "font-family: calibri; font-weight: 540; font-size: 20px; color:blue;" href="profile.php"><?php echo "Hi ". $lname; ?></a><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="login.php">LOGOUT</a></li>
             <?php }
              else { ?>
                    <li><a href="login.php">LOGIN/SIGN UP</a></li>
             <?php } ?>
             
           </ul>
         </div>
       </div>
     </div>
   </header>
   <!-- end header -->



           <div class="col-lg-12">
             <div class="container">
              </br>
            <h3>About E-Learner</h3>
           <font size="3">
             <p>E-Learner is a non-profit organization, established in 2020 to identify and assist children with Autism Spectrum Disorder – to establish higher levels of learning through specialized programs promoting better reading.
             Our Mission is to promote scientific breakthroughs in the early detection, prevention and remediation of Autism Spectrum Disorder and related reading difficulties. To disseminate new findings and deploy new evidence-based approaches. To prevent the suffering caused by reading failure and unlock the full potential of children and adults with Autism Spectrum Disorder so that they may personally succeed and contribute to society.
            </br></br>
             The E-Learner application system is an e-learning platform and web application that provide the user with fun learning experience. This application aims to educate and teaches individuals suffering from Autism Spectrum Disorder. The system allows users to Sign Up and Login and get access to variety of resources about ASD. It also provides quiz and games to help kids suffering from ASD learn better. From interactive games to puzzle games to help the individual learn in a fun way.
           </br></br>
             E-Learner are concerned with the well being, identification and educational intervention of all who struggle with aspects of spoken and written language.The E-Learner believes that all individuals with ASD or a related difference deserve the right to understand their learning difference and have access to evidence based instruction. E-Learner supports and provides accredited training in evidence based instruction with the addition of a multisensory component. Direct, explicit and structured language instruction with a multisensory component can assist all students including those with dyslexia and related difficulties.
           </br></br>
           The objectives for which the organization is established are:
           <li>To advance the education and general welfare of children who are affected by ASD</li>
           <li>To promote awareness and understanding of the problems and needs of children with specific learning disabilities and thereby assist them to obtain diagnosis and treatment so their disabilities may be remedied</li>
           <li>To persuade appropriate authorities to include in teacher-training courses such instruction as would serve to qualify teachers to recognise in children what may be specific learning disibalities requiring specialised treatment</li>
           <li>To help ASD patients learning better in a friendly environment</li>

             </p>

           </div>
            </div>
              </div>
            </div>


             <!-- divider -->
             <div class="row">
               <div class="col-lg-12">
                 <div class="solidline">
                 </div>
               </div>
             </div>
             <!-- end divider -->

   <footer>
     <div class="container">
       <div class="row">
         <div class="col-lg-3">
           <div class="widget">
             <h5 class="widgetheading">Get in touch with us</h5>
             <address>
         <strong>E-Learner</strong><br>
          Modernbuilding Cheras L03-AB-01<br>
          Bukit Jalil 57000 </address>
             <p>
               <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
               <i class="icon-envelope-alt"></i> elearner@organization.com
           </div>
         </div>
       </div>
     </div>
     <div id="sub-footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6">
             <div class="copyright">
               <p>&copy; E-learner. All right reserved.</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>
 </div>
 <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
 <!-- javascript
   ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="js/jquery.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.fancybox.pack.js"></script>
 <script src="js/jquery.fancybox-media.js"></script>
 <script src="js/google-code-prettify/prettify.js"></script>
 <script src="js/portfolio/jquery.quicksand.js"></script>
 <script src="js/portfolio/setting.js"></script>
 <script src="js/jquery.flexslider.js"></script>
 <script src="js/animate.js"></script>
 <script src="js/custom.js"></script>

</body>

</html>
