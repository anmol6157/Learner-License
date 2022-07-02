var mins = 10 ;
var secs = mins * 60;
function countdown() {
	setTimeout('Decrement()',1000);
}
function Decrement() {
	if (document.getElementById) {
		minutes = document.getElementById("minutes");
		seconds = document.getElementById("seconds");
		// if less than a minute remaining
		if (seconds < 59) {
			seconds.value = secs;
		} else {
			minutes.value = getminutes();
			seconds.value = getseconds();
		}
		secs--;
		if(!(minutes.value==0 && seconds.value==0))
            	setTimeout('Decrement()',1000);
		else
		{
		var r=alert("Timed Out!! \n Try Again.");
		window.location.reload();
		}
		}
}
function getminutes() {
	mins = Math.floor(secs / 60);
	return mins;
}
function getseconds() {
	return secs-Math.round(mins *60);
}
countdown();
var inp = document.getElementsByTagName('input');
for (var i = inp.length-1; i>=0; i--) {
if ('radio'===inp[i].type) inp[i].checked = false;
}
