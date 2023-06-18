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
	document.getElementById("answer").innerHTML = "Question 1 = Correct";
	}
	else if (question1 == "a" || question1 == "b" || question1 == "d") {
	document.getElementById("answer").innerHTML = "Question 1 = C";
	}
	
	if (question2 == "a"){
		dyslexia++;
	document.getElementById("answerr").innerHTML = "Question 2 = Correct";
	}
	else if (question2 == "b" || question2 == "c" || question2 == "d") {
	document.getElementById("answerr").innerHTML = "Question 2 = A";
	}

	if (question3 == "d"){
		dyslexia++;
	document.getElementById("answerrr").innerHTML = "Question 3 = Correct";
	}
	else if (question3 == "a" || question3 == "b" || question3 == "c") {
	document.getElementById("answerrr").innerHTML = "Question 3 = D";
	}


	if (question4 == "b"){
		dyslexia++;
	document.getElementById("answerrrr").innerHTML = "Question 4 = Correct";
	}
	else if (question4 == "a" || question4 == "c" || question4 == "d") {
	document.getElementById("answerrrr").innerHTML = "Question 4 = B";
	}


	if (question5 == "c"){
		dyslexia++;
	document.getElementById("answerrrrr").innerHTML = "Question 5 = Correct";
	}
	else if (question5 == "a" || question5 == "b" || question5 == "d") {
	document.getElementById("answerrrrr").innerHTML = "Question 5 = C";
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
	

