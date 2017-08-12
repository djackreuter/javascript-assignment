function mouseEnter() {
	document.getElementById("box").innerHTML = "Fuzzy";
	document.getElementById("box").style.backgroundColor = "blue";
}

function mouseOut() {
	document.getElementById("box").innerHTML = "Not Fuzzy";
	document.getElementById("box").style.backgroundColor = "cadetBlue";
}

function writeStuff() {
	 document.getElementById("box2").value = document.getElementById("text").textContent += " Fuzzzy";
}

function validateForm() {
	var input = document.forms["form1"]["text-area"].value;
	if(input == "") {
		window.alert("Aren't you defiant. Type something first please.");
		return false;
	} else {
		window.alert("Sorry wrong answer");
	}
}

$(document).ready(function() {
	$('#bacon').click(function() {
		$.ajax({url: "https://baconipsum.com/api/?type=meat-and-filler&paras=5&format=text",
		success: function(result) {
			$('#bacon-here').html(result);
		}});
	});
});




