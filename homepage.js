function loadDoc(file, type){
	var xhttp = new XMLHttpRequest();
	console.log(file + " where is it");
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("accomp1Detail").innerHTML = xhttp.responseText;
			//parse1(xhttp.responseText);
		}
  	};
  	xhttp.open("GET", file, true);
  	xhttp.send();
}

function parse1(text) {
	document.getElementById("accomp1Detail").innerHTML = text;
}

function parse2(text) {
	document.getElementById("accomp2Detail").innerHTML = text;
}