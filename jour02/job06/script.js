
var state = 0, do_want = [38,38,40,40,37,39,37,39,66,65];

document.getElementById("body").addEventListener("keydown", function(e) {
if ( e.keyCode == do_want[state] ) state++;
else state = 0;

if ( state == 10 )
window.location = "https://laplateforme.io";

}, true);