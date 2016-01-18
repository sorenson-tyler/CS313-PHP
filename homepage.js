function loadDoc(file, type){
	var xhttp = new XMLHttpRequest();
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
	document.getElementById("accompDetail").innerHTML = text;
	document.getElementById("ES").src = 'Homepage Sources/EagleScout.jpg';

}

function parse2(text) {
	document.getElementById("accompDetail").innerHTML = text;
	document.getElementById("ES").src = 'Homepage Sources/NAVEXGlobal.jpg';

}

function parse3() {
	document.getElementById("accompDetail").innerHTML = 'Here is a link to my resume';
	document.getElementById("ES").src = 'Homepage Sources/Document.jpg';
	document.getElementById("ImgLink").href = 'Homepage Sources/Sorenson, Tyler, Resume.docx'
}