/**
* Author: Simon
* Purpose: alert test
* Created: 14/4/15
* Last updated: 14/4/15
* 
*/

var sName; //global variable accessible to all functions

function showAnotherMessage() {
alert("Hi " + sName + ".\nThis is an alert message that is no longer defined\nin the
HTML but in a JavaScript file");
}
function init() {
sName = prompt("Hi. Enter your name.\nWhen the browser window is first loaded\n
the function containing this prompt window is called.", "Your name");
//clickMe is a local variable in the init function. Careful: JavaScript is case sensitive!
clickMe = document.getElementById("clickme");
clickMe.onclick = showAnotherMessage;
}
window.onload = init;

