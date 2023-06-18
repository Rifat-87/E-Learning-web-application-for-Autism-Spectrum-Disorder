﻿function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
   		
	
	if (question1 == "" || question2 == "" || question3 == "" || question4 == "" || question5 == ""){
	alert ("Please fill in the required fields");
	}
	else {
	var dyslexia = 0;
	document.getElementById("after_submit").style.visibility = "visible";
	}
	
	if (question1 == "c"){
		dyslexia++;
		document.getElementById("c").style.color = "blue";
	}
	
	if (question2 == "b"){
		dyslexia++;
	}

	if (question3 == "a"){
		dyslexia++;
	}

	if (question4 == "b"){
		dyslexia++;
	}

	if (question5 == "d"){
		dyslexia++;
	}

 
	
if (dyslexia >= 3){
	document.getElementById("point_count").innerHTML = "You Got "+dyslexia+" out of 5 correct";
	document.getElementById("picture").src = "Quiz%20Pics/result/goodjob.jpg" ;	
	}
	else if (dyslexia < 3){
	document.getElementById("point_count").innerHTML = "You Got "+dyslexia+" out of 5 correct";
	document.getElementById("picture").src = "Quiz%20Pics/result/sorry.jpg" ;
	}
	}
	
