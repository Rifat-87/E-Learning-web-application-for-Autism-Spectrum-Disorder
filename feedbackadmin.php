<?php 
	session_start();
	
	$title = "Profile";
	include("header.php");

//print_r($_SESSION);
if(isset($_SESSION['user_id'])){
	$user=select("*","users","WHERE `uID`='".$_SESSION['user_id']."'");
	$lname = $user[0]['uLname'];

	$data = select("*", "feedback", "WHERE `uID`='$userID'");
	$feed = $data[0]['fComment'];
	$res = $data[0]['fResponse'];
}
?>
<body>
<section id="main-container">
	
	<div class="menu-sliding cover"></div>
	
	<section id="main-wrapper" class="animate" anim-control="parent">
		<div class="section container-fluid pt5 pb5">
			<div class="auto">
				<div class="com_tabs com_bo-tab">
					<div class="com_tab-nav fz-20">
						<ul>
							<li><a href="#open-booking">Completed Feedback</a></li>
							<li><a href="#completed-booking">Game Score</a></li>
						</ul>
					</div>
					<div class="com_tab-main mt15">
						<div id="open-booking" class="com_tab-set">
							<!-- table result for desktop -->
							<div class="com_fl-st-table fz-16 d-none d-md-block">
								<table>
									<thead>
										<tr>
											<th>User</th>
											<th class="col-medium">Comment</th>
											<th class="col-medium">Response</th>
											
										</tr>
									</thead>
									<tbody>
										<?php if(isset($data) && $data!=0) {
											$data = select("*", "feedback", "WHERE `uID`='$userID'");

												for($i = 0; $i<count($data); $i++) {
													$fname = $data[$i]['fName'];
													$feed = $data[$i]['fComment'];
													$res = $data[$i]['fResponse'];



												
										?>
										<tr>
											<td>
												<p><?php echo $fname; ?></p>
											</td>
											<td>
												<p><?php echo $feed; ?></p>
											</td>
											<td>
												<p><?php if(isset($res)) {echo $res; }else{ ""; } ?></p>
											</td>
											
										</tr>
										<?php
												}
									 } ?>
									</tbody>
								</table>
							</div>

							
						</div>
						<div id="completed-booking" class="com_tab-set">
							<!-- table result for desktop -->
							<div class="com_fl-st-table fz-16 d-none d-md-block">
								<table>
									<thead>
										<tr>
											<th>User</th>
											<th class="col-medium">Quiz</th>
											<th class="col-medium">Score</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<p><?php echo $lname; ?></p>
											</td>
											<td>
												
												<div class="mb-1">
													
													<p>Fill in the blanks</p>
												</div>
											</td>
											<td>
												<p>5</p>
											</td>
											
										</tr>
										
									</tbody>
								</table>
							</div>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
﻿</section>
<footer></footer>
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>