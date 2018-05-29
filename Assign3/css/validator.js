/**
* Author: Simon Dunkley
* Purpose: This file is for validation of user agents Form register.html
* Created: 26 April 2015
* Last updated: 2nd May 2015
*  
*/

function WipeData() {
	localStorage.clear();
	
}

function Quiz() {
		window.location.assign("quiz.php");
}

function setFacts(index){
var stateAbbreviation = new Array("WA", "NT", "QLD", "SA", "ACT", "NSW", "VIC", "TAS");
document.getElementById("State").innerHTML = state = stateAbbreviation[index];
	
}


/*get variables from form and check rules*/
function validate() {
	var errMsg = "";/* stores the error message */
	var result = true;/* assumes no errors */
	
	/*get values from the form*/
	var FName = document.getElementById("firstName");
	var LName = document.getElementById("lastName");
	var Date = document.getElementById("Birthday");
	var Address = document.getElementById("Address");
	var Suburb = document.getElementById("Suburb");
	var State = document.getElementById("State");
	var PostCode = document.getElementById("PostCode");
	var Email = document.getElementById("Email");
	var Phone = document.getElementById("Phone");
	
	var pattern = /^\d{4}[-]\d{2}[-]\d{2}$/;
	
	var numbers = /^[0-9]+$/;
	var atpos = Email.value.indexOf("@");
	var dotpos = Email.value.lastIndexOf(".");
	
		
	/* Maximum of 12 chars fname*/
	if (FName.value.length > 12) {					//if all not selected
		errMsg += "Please enter a First Name less than 12 characters.\n";
		result = false;
		FName.focus();
	}
	
	/* making sure numbers are not entered*/
	if (FName.value.match(numbers)) {
			errMsg += "First name must be in alphabetical characters only.\n";
			result = false;
			FName.focus();
	}
	
	/* Maximum 20 chars for lname*/
	if (LName.value.length > 20) {				
		errMsg += "Please enter a Last Name less than 20 characters.\n"; 
		result = false;
		LName.focus();
	} 

	/* making sure numbers are not entered*/
	if (!isNaN(LName.value)) {
			errMsg += "Last name must be in alphabetical characters only.\n";
			result = false;
			LName.focus();
	}
	
	/* making sure pattern is entered for DOB*/
	if(!pattern.test(Date.value)){
		errMsg += "Please enter a valid date of birth (dd/mm/yyyy)\n";	
		result = false;
		Date.focus();
	}
	
	 /* checking email for @ and .*/
   if ((atpos < 1) || ( dotpos - atpos < 2 )) 
   {
       errMsg += "Please enter a correct email (example@test.com)\n";
       Email.focus() ;
       result = false;
   }
		
	/* Maximum 40 chars for Address*/
	if (Address.value.length > 40) {				
		errMsg += "Please enter an Address less than 40 characters.\n"; 
		result = false;
		Address.focus();
	} 
	
	/* Maximum 20 chars for suburb*/
	if (Suburb.value.length > 20) {				
		errMsg += "Please enter a Suburb less than 20 characters.\n"; 
		result = false;
		Suburb.focus();
	} 
	
	/* making sure postcode is 4 digits*/
	if (PostCode.value.length != 4){
		errMsg += "Please enter a postcode with 4 characters.\n"; 
		result = false;
		PostCode.focus();
	}
	/* makign sure phone is 10 digits*/
	if (Phone.value.length != 10){
		errMsg += "Please enter a Phone number with 10 characters.\n"; 
		result = false;
		Phone.focus();
	}
	
	/* making sure numbers are entered*/
	if (isNaN(Phone.value)){
			errMsg += "Please enter a Phone number with numbers.\n"; 
			result = false;
			Phone.focus();
	}
	
	
	if (errMsg != ""){   //only display message box if there is something to show
		alert(errMsg);
	}
	
	if(FName.value && LName.value){
	var name = FName.value + ' ' + LName.value;
	localStorage.setItem("name", name);
	}
	return result;

}
/* link HTML elements to corresponding event function */
function init () {
var register = document.getElementById("register");
var topic = document.getElementById("topic");
var quizB = document.getElementById("quiz");
var done =  localStorage.getItem("done");

quizB.disabled = true;

var quizb = document.getElementById("quiz");
var wipeb = document.getElementById("wipe");

wipeb.onclick=function(){WipeData()};
quizb.onclick=function(){Quiz()};


document.getElementById("topic").readOnly = true;
topic.value = "User Agents";


//link the variable to the HTML element
register.onsubmit = validate;
/*
if(register.value = true){
	localStorage.setItem("done", "yes");
	}
	if(done.value = "yes") {quizB.disabled = false;}
	*/
	
if(localStorage.getItem('name')){
	quizB.disabled = false;
}
/* assigns functions to corresponding events */
}
window.onload = init;
