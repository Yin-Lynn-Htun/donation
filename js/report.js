function reportFunction() {
	document.getElementById("report-div").style.display = "block";
	document.getElementById("report-btn").style.visibility = "hidden";
	document.getElementById("donate-btn").innerHTML = "REPORT";
	document.getElementById("donate-btn").className = "btn btn-danger";
	document.getElementById("close-btn").innerHTML = "CANCEL";
}

function reset() {
	document.getElementById("report-div").style.display = "none";
	document.getElementById("report-btn").style.visibility = "visible";
	document.getElementById("donate-btn").innerHTML = "DONATE";
	document.getElementById("donate-btn").className = "btn btn-success";
	document.getElementById("close-btn").innerHTML = "Close";
	document.getElementById("reportCheck1").checked = false;
	document.getElementById("reportCheck2").checked = false;
	document.getElementById("reportCheck3").checked = false;
	document.getElementById("reportCheck4").checked = false;
}