function mouseEnter() {
	document.getElementById("box").innerHTML = "Fuzzy";
	document.getElementById("box").style.backgroundColor = "blue";
}

function mouseOut() {
	document.getElementById("box").innerHTML = "Not Fuzzy";
	document.getElementById("box").style.backgroundColor = "cadetBlue";
}

function writeStuff() {
	document.getElementById("box2").innerHTML = document.getElementById("text").textContent += " Fuzzzy";
}