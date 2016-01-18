function loadDoc(file, type){
	var xhttp = new XMLHttpRequest();
	console.log(file + " where is it");
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			switch (type) {
				case 1:
					parse1(xhttp.responseText);
					break;
				case 2:
					parse2(xhttp.responseText);
					break;
			}
		}
  	};
  	xhttp.open("GET", file, true);
  	xhttp.send();
}

function parse1(text) {
	document.getElementById("accomp1Detail").innerHTML = text;
	document.getElementById("accomp2Detail").innerHTML = "";
	document.getElementById("ES").style.visibility = visible;
}

function parse2(text) {
	document.getElementById("accomp1Detail").innerHTML = "";
	document.getElementById("accomp2Detail").innerHTML = text;
	document.getElementById("NG").style.visibility = visible;
}