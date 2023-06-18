<?php
if(!isset($_SESSION)) 
{ 
	session_start();
}
include_once("connectDB.php");


/*
if(isset($_POST['booking_num'])){
	$_SESSION['booking_num']=$_POST['booking_num'];
}

if(isset($_POST['booking_id'])) {
	$_SESSION['bookingid']=$_POST['booking_id'];
}

if(isset($_SESSION['booking_num'])) {
	
}
*/




$activePage = basename($_SERVER['PHP_SELF'], ".php");


if(!isset($_SESSION['user_id'])){
	if(isset($_POST['user_id'])){
		$_SESSION['user_id']=$_POST['user_id'];
	}
}

print_r($_POST);
print_r($_SESSION);

if(isset($_SESSION['user_id'])){
	
	$user=$userID=$_SESSION['user_id'];
}
else{
	$user=$userID=0;
}
$data = select("*","users", "WHERE `uID` = '$userID' AND uType = 1 ");
	
?>


<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>ELearner | <?php echo $title;?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#699DC4">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#699DC4">
<link rel="stylesheet" href="assets/css/style.css" media="all"/>
<style>
	

	.set-background-blue{
		background-color: #7997ff;
		color: #161619;
	}
	.set-background-blue:hover{
		background-color: #0C0C10;
	}
	.set-background-blugray{
		background-color: #9EB1DD;
		color: #161619;
	}
	.set-background-blugray:hover{
		background-color: #0C0C10;
	}
	.write-up{
		background-image: linear-gradient(to bottom, #FFFFFF, #7B68EE, #B8C7EA, #dbd2a6);
		color: #161619;
	}
.dropbtn {
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 14px;
  text-decoration: none;
  display: block}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-61255047-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-61255047-10');
</script>

</head>
<body>
<section id="main-container">
	<header>
		<div class="header-content container-fluid fz-20" style="background-color: #fff; opacity: 90%;">
			<div class="auto">
				<div class="d-flex align-items-center justify-content-between">
					<div class="logo bp-img">
					<a href="index.php" ><img src="assets/img/logofyp.png" width="200" style = "height: 150px;"></a>
					</div>


					<div class="he-co-col d-none d-md-flex align-items-center">

						<div class="menu" style="display: Flex; background-color: #fff; letter-spacing: 2px;">	
								

							<div class="menu" style="color: #606971; letter-spacing: 2px;">
									<ul style = "margin-right: 25px;">
									<?php if(isset($_SESSION['user_id'])){ ?>
										<li><a href="aboutus.php"> About Us </a></li>
										<li><a href="feedback.php">Feedback</a></li>
									<?php } else { ?>
										<li><a href="aboutus.php"> About Us </a></li>
									<?php } ?>	
										<!--<li><a href="#">Support</a></li>-->
									</ul>
							</div>			
							<div style="color: #606971; letter-spacing: 2px;">
									<?php
										if(isset($_SESSION['user_id'])){
											$user=select("*","users","WHERE `uID`='".$_SESSION['user_id']."'");
											$lname = $user[0]['uLname']; ?>

											<a style= "color: blue;" href="profile.php"><?php echo "Hi ". $lname; ?></a>
											<?php echo ''."\t|\t".''; ?>
											<a href="login.php">LOGOUT</a>

									<?php	}
										else{ ?>
											<a href="login.php"> LOGIN/SIGN UP </a> 
									<?php }
									?>
							</div>
						</div>
					<div class="menu-bar d-block d-md-none"><i class="fas fa-stream" style="color:#b0c3ca;"></i><!--span style="color:red;">1</span><span>2</span><span>3</span--></div>
				</div>
			</div>
		</div>
	</header>
	<div class="menu-sliding main" style="background-color: #b0c3ca; ">
		<div class="me-sl-col col-top d-flex align-items-center" style="background-color: #b0c3ca; color: #fff; letter-spacing: 2px;overflow:hidden;">
		<?php
			if(isset($_SESSION['user_id'])){
				$user=select("*","users","WHERE `uID`='".$_SESSION['user_id']."'"); 
				$lname = $user[0]['uLname']; ?>

				<a href="profile.php"><?php echo "Hi ". $lname; ?></a>
				<?php echo ''."\t|\t".''; ?>
				<a href="login.php">LOGOUT</a>

		<?php	}
			else{ ?>
				<a href="login.php"> LOGIN/SIGN UP  </a>
		<?php	}
		?>
		</div>
		<div class="me-sl-col">
			<div class="menu" style="background-color: #b0c3ca; color: #fff; letter-spacing: 2px;">
				<ul>
					<li><a href="my-booking.php"> MY BOOKING </a></li>				
					<!--li><a href="flight-status.php">Flight Status</a></li>
					<li><a href="#">Support</a></li>-->
				</ul>
			</div>
		</div>
	</div>
	<div class="menu-sliding cover"></div>

<script>

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

document.getElementById("langForm").onclick = function() {
    document.getElementById("langForm").submit();
}
</script>

	
