/**
* Author: Simon Dunkley
* Purpose: This file is for validation of user agents Form quiz.html
* Created: 26 April 2015
* Last updated: 2nd May April 2015
*  
*/



	
	


function CountDown(){
	setTimeout(function(){document.getElementById("quiz").submit();}, 60000);

}

function noTime(){
	document.getElementById("quiz").submit();
}

function check() {
var wrg = "";
var result = true;

var q1Answer = document.getElementById("A").checked;
var q1Wrong = document.getElementById("B").checked;
var q1Wrong2 = document.getElementById("C").checked;

var q2Answer = document.getElementById("chrome").checked;
var q2Answer2 = document.getElementById("firefox").checked;
var q2Answer3 = document.getElementById("safari").checked;
var q2Wrong = document.getElementById("gfirefox").checked;
var q2Wrong2 = document.getElementById("mchrome").checked;


var q3 = document.getElementById("question3").value;

var q4 = document.getElementById("question4").value;


var score = 0;
/*Q1*/
if(q1Answer){
score += 1;	

}

if (!q1Answer && !q1Wrong && !q1Wrong2){
wrg += "You have not entered any values for Question 1\n";
result = false;	
}


/*Q2*/
if(q2Answer){
score += 1;	
}
if(q2Answer2){
score += 1;	
}
if(q2Answer3){
score += 1;	
}
/*
if(q2 = "wrong"){
wrg += "You got question 2 wrong.\n";	
}	*/
if (!q2Answer && !q2Answer2 && !q2Answer3 && !q2Wrong && !q1Wrong2) {					//if all not selected
		wrg += "You have not entered any values for Question 2\n";
		result = false;
	}

/*Q3*/
if (q3 == "identifier"){
score += 1;	
}
/*
if (q3 != "identifier"){
wrg += "the correct answer was identifier.\n";	
} */
if(q3.length == 0){
wrg += "You have not entered any values for Question 3\n";	
result = false;
}

/*Q4*/
if (q4 == "Chrome"){
score += 1;	
}

if(q4 == ""){
wrg += "You have not entered any values for Question 4\n";	
result = false;
}

if(score == 6){
	wrg += "you have 6/6 score congrats";
	
}

if (wrg != ""){   //only display message box if there is something to show
		alert(wrg);
	}
	
	localStorage.setItem("score", score);
	
	return result;
}



function init () {
var checkQ = document.getElementById("quiz");

//link the variable to the HTML element
checkQ.onsubmit = check;

CountDown();
	
/* assigns functions to corresponding events */
}
window.onload = init;
