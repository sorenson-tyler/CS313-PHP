function loadResults(file, elementID, vote){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
            find(xhttp.responseText, document.getElementById(elementID), vote);
		}
  	};
  	xhttp.open("GET", file, true);
  	xhttp.send();
}

function find(text, element, vote)
{
    if (text.indexOf(vote) > -1)
        {
            var temp = text.split(vote);
            element.innerHTML = temp.length -1;
        }
}