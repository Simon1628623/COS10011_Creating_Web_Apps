/*  JavaScript for Cookie code */
      // add your store cookie function here...
function storeCookieData() {
    alert('Testing');
      }
      // simple function that shows current cookie string and length with alerts
function showCookieString() {
    alert('Cookie String: '+document.cookie +'\n' 
	+ 'Cookie Length: '+document.cookie.length);
      }
	

function init(){
   var butn01=document.getElementById("butn01");
   butn01.onclick=storeCookieData;
   var butn02=document.getElementById("butn02");
   butn02.onclick=showCookieString;
}	

window.onload=init;