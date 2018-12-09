var open = document.getElementById("open");
var sideMenu = document.getElementById("sideMenu");
open.addEventListener("click",function(){
	sideMenu.classList.toggle("extend");
});
var displayTimeAndDate =document.getElementById("time");
function updateClock(){
	var d = new Date();
	var day =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var month=["January","February","March","April","May","June","July","August",
	"September","October","November","December"];
	date = day[d.getDay()] + " " + month[d.getMonth()] + " " + d.getFullYear();
	time = d.getHours() + ":" + minutes();
	function minutes(){
		if (d.getMinutes() < 10) {
			return '0' + d.getMinutes();
		}
		return d.getMinutes();
	};
	displayTimeAndDate.innerHTML= date +"  "  +time ;
}
updateClock();
setInterval(updateClock , 10000);
function check(){
	var p = document.getElementById("password");
	var cp = document.getElementById("confirmPassword");
	var em = document.getElementByName("email");
	if (/\w{6,}\d+/.test(p.value)==false){
		alert("Password must contain 6 letters or more and at least 1 digit");
	}
	if(p.value!=cp.value){
		alert("password did not match. Try again.");
	}
}
