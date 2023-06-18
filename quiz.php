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
 <title>Diagnosis</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta name="description" content="" />
 <!-- css -->
 <link href="css/bootstrap.min.css" rel="stylesheet" />
 <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
 <link href="css/jcarousel.css" rel="stylesheet" />
 <link href="css/flexslider.css" rel="stylesheet" />
 <link href="css/style.css" rel="stylesheet" />
 <link href="css/justification.css" rel="stylesheet" />
 <link href="css/quiz.css"rel="stylesheet">


 <!-- Theme skin -->
 <link href="skins/default.css" rel="stylesheet" />


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
           <img src="assets/img/logofyp.png" height="150" width="200"></a>
         </div>
         <div class="navbar-collapse collapse ">
           <ul class="nav navbar-nav">
             <li class="active"><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="index.php">Home</a></li>
                <li><a style="font-family: calibri; font-weight: 540; font-size: 20px; color:#606971;" href="aboutus.php">About Us</a></li>
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


           </div>
          

             <!-- divider -->
             <div class="row">
               <div class="col-lg-12">
                 <div class="solidline">
                 </div>
               </div>
             </div>
             <!-- end divider -->
             
             <form id = "quiz" name = "quiz">


		<P style="color:black">1. Do you confuse visually similar words like cat and cot?<BR>
			<input type="radio" id ="mc" name="question1" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question1" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question1" value="c">Often<BR>
			<input type="radio" id ="mc" name="question1" value="d">All the time<BR>
		</p>
		
		<P style="color:black">2. Will you miss out words or lines when you are reading?<BR>
			<input type="radio" id ="mc" name="question2" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question2" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question2" value="c">Often<BR>
			<input type="radio" id ="mc" name="question2" value="d">All the time<BR>
		</p>
		
		<P style="color:black">3. Do you confuse names of objects like hair and chair?<BR>
			<input type="radio" id ="mc" name="question3" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question3" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question3" value="c">Often<BR>
			<input type="radio" id ="mc" name="question3" value="d">All the time<BR>
		</p>
		
		<P style="color:black">4. Do you read a paragraph multiple times to understand them?<BR>
			<input type="radio" id ="mc" name="question4" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question4" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question4" value="c">Often<BR>
			<input type="radio" id ="mc" name="question4" value="d">All the time<BR>
		</p>
		
		<P style="color:black">5.  Do you get confused when you receive several instructions at once?<BR>
			<input type="radio" id ="mc" name="question5" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question5" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question5" value="c">Often<BR>
			<input type="radio" id ="mc" name="question5" value="d">All the time<BR>
		
		</p>
		
		<P style="color:black">6. Do you make a lot of mistakes when taking down telephone messages?<BR>
			<input type="radio" id ="mc" name="question6" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question6" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question6" value="c">Often<BR>
			<input type="radio" id ="mc" name="question6" value="d">All the time<BR>
		</p>
		
		<P style="color:black">7. Do you still find yourself having spelling mistakes after a spelling check?<BR>
			<input type="radio" id ="mc" name="question7" value="a">Rarely<BR>
			<input type="radio" id ="mc" name="question7" value="b">Sometimes<BR>
			<input type="radio" id ="mc" name="question7" value="c">Often<BR>
			<input type="radio" id ="mc" name="question7" value="d">All the time<BR>
		</p>
		
		<P style="color:black">8. How hard do you find it pronouncing words like e-le-phant?:<BR>
			<input type="radio" id ="mc" name="question8" value="a">Easy<BR>
			<input type="radio" id ="mc" name="question8" value="b">Tough<BR>
			<input type="radio" id ="mc" name="question8" value="c">Hard<BR>
			<input type="radio" id ="mc" name="question8" value="d">Very Hard<BR>
		</p>
		
		<P style="color:black">9. Do you find the multiplication table easy to remember?<BR>
			<input type="radio" id ="mc" name="question9" value="a">Easy<BR>
			<input type="radio" id ="mc" name="question9" value="b">Tough<BR>
			<input type="radio" id ="mc" name="question9" value="c">Hard<BR>
			<input type="radio" id ="mc" name="question9" value="d">Very Hard<BR>
		</p>
		
		<P style="color:black">10. Do you find it easy to differentiate alphebats?<BR>
			<input type="radio" id ="mc" name="question10" value="a">Easy<BR>
			<input type="radio" id ="mc" name="question10" value="b">Tough<BR>
			<input type="radio" id ="mc" name="question10" value="c">Hard<BR>
			<input type="radio" id ="mc" name="question10" value="d">Very Hard<BR>
		</p>
				
				<input id="button" type="button" value="Submit Answer" onclick="check();">
	</form>

	<div id = "after_submit">
	<p id = "point_count"></p>
	<img id="picture" style="width:400px;height:300px;">
	</div>
	
	
             
            

 <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
 <!-- javascript
   ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="js/quiz.js"></script>
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
