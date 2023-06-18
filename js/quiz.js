﻿function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
    var question7 = document.quiz.question7.value;
    var question8 = document.quiz.question8.value;
    var question9 = document.quiz.question9.value;
    var question10 = document.quiz.question10.value;
		
	
	if (question1 == "" || question2 == "" || question3 == "" || question4 == "" || question5 == "" || question6 == ""|| question7 == ""|| question8 == ""||question9 == "" || question10 == ""){
	alert ("Please fill in the required fields");
	}
	else {
	var dyslexia = 0;
	document.getElementById("after_submit").style.visibility = "visible";
	}
	
	if (question1 == "c" || question1 =="d"){
		dyslexia++;
	}
	
	if (question2 == "c" || question2 =="d"){
		dyslexia++;
	}

	if (question3 == "c" || question3 =="d"){
		dyslexia++;
	}

	if (question4 == "c" || question4 =="d"){
		dyslexia++;
	}

	if (question5 == "c" || question5 =="d"){
		dyslexia++;
	}

	if (question6 == "c" || question6 =="d"){
		dyslexia++;
	}

	if (question7 == "c" || question7 =="d"){
		dyslexia++;
	}

	if (question8 == "c" || question8 =="d"){
		dyslexia++;
	}

	if (question9 == "c" || question9 =="d"){
		dyslexia++;
	}

	if (question10 == "c" || question10 =="d"){
		dyslexia++;
	}

             
	
	if (dyslexia >= 5){
	document.getElementById("point_count").innerHTML = "You might have dyslexia we reccommend seeing a professional for a more accurate result";	
	document.getElementById("picture").src = "Quiz%20Pics/result/worried.jpg" ;
	}
	else if (dyslexia < 5){
	document.getElementById("point_count").innerHTML = "You dont seem to have dyslexia but we reccommend seeing a professional for a more accurate result";
	document.getElementById("picture").src = "Quiz%20Pics/result/allgood.png" ;
	}
	}
	