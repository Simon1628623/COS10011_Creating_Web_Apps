/**
* Author: Simon Dunkley
* Purpose: This file is for validation of user agents Form quiz.html
* Created: 26 April 2015
* Last updated: 26 April 2015
*  
*/


function init () {
var name = document.getElementById("name");
var score = document.getElementById("score");

document.getElementById("name").readOnly = true;
document.getElementById("score").readOnly = true;

name.value = localStorage.getItem("name");
score.value = localStorage.getItem("score");

	if(!localStorage.getItem("name") && !localStorage.getItem("score")){
	alert("You have not played yet please register and fill out the quiz");	
	}

}
window.onload = init;