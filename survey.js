function loadResults(file){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("first").innerHTML = xhttp.responseText;
			}
		}
  	};
  	xhttp.open("GET", file, true);
  	xhttp.send();
}