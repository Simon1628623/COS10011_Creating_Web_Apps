/**
* Author: Grima Wormtongue
* Purpose: This file is for validation of Rohirrim Trip Booking Form register.html
* Created: 23 Sept 2013
* Last updated: 24 Sept 2013
*  
*/

/*get variables from form and check rules*/
function validate(){
	
	var errMsg = "";								/* stores the error message */
	var result = true;								/* assumes no errors */
	var over18 = false;
	
	/*get values from the form*/
	var age = document.getElementById("age").value;
	
	var isAccom = document.getElementById("accom").checked;
	var is4day = document.getElementById("4day").checked;
	var is10day = document.getElementById("10day").checked;
	
	var species = getSpecies();    
	
	/* Rule 1 - at least one trip selected */
	if (!isAccom && !is4day && !is10day) {					//if all not selected
		errMsg += "Please select at least one trip or accomodation.\n";  //same as errMsg = errMsg + "....";
		result = false;
	}
	
	/*Rule 2 - No one under 18 can book*/
	/* first check a number has been entered*/
	if (isNaN(age)) {				//use the global function "is Not A Number"
		errMsg += "Your age must be a number.\n"; 
		result = false;
	} else if (age < 18){      // then check over age limit
		errMsg += "You must be 18 or over to book a trip.\n"; 
		result = false;
	} else 
		over18 = true;

	/*Rule 3 - check age within species range assuming >= 18*/
	/* shows combination of 2 attributes from the form*/

	if (over18) {
		switch(species){
			case "Human":
				if (age > 120) {
					errMsg += "You cannot be Human and over 120.\n"; 
					result = false;
				}
				break;
			case "Dwarf":          //note no break so next case will be selected if dwarf
				if (age > 150) {
				errMsg += "You cannot be " + species + " and over 150.\n";
				result = false;
				}
				else if (age>30 && beardLength<16) {
				errMsg += "you cannot be " + species + " and over 30 and a beard less than 16";
				result = false;
				}
				break;
			case "Hobbit":	
				if (age > 150){
					errMsg += "You cannot be " + species + " and over 150.\n"; 
					result = false;
				}
				else if (beardLength > 0) {
				errMsg += "you cannot be " + species + " and have a beard";
				result = false;
				}

				break;
				
				case "Elf":	
				if (beardLength > 0) {
				errMsg += "you cannot be " + species + " and have a beard";
				result = false;
				}

				break;
					//elves can be any age so no default message
		}   //end switch
	}
	
	
	if (errMsg != ""){   //only display message box if there is something to show
		alert(errMsg);
	}
	
	return result;    //if false the infomration will not be sent to the server
}

/* finds which radio button is checked and returns a string representing the species*/ 
function getSpecies() {
	var species = "Unknown";               //initialise variable in case does not get reinitialised properly
	/* test which radio button is selected*/ 
	var isHuman = document.getElementById("human").checked;   
	var isDwarf = document.getElementById("dwarf").checked;
	var isElf = document.getElementById("elf").checked;
	var isHobbit = document.getElementById("hobbit").checked;
	beardLength = document.getElementById("beard").value;
	
	if (isHuman) 
	{species = "Human";}
	else if (isDwarf) 
	{species = "Dwarf";}
	else if (isElf) 
	{species = "Elf";}
	else if (isHobbit) 
	{species = "Hobbit";}
	else
	{species = "Unknown";}
	return species;
}


/* link HTML elements to corresponding event function */
function init () {
var regForm = document.getElementById("regform");
//link the variable to the HTML element
regForm.onsubmit = validate;
/* assigns functions t
o corresponding events */
}
window.onload = init;
