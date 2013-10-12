function addPageInput() {
	var e = document.getElementById("page-inputs");
	appendPageInput(e);
}

function appendPageInput(e) {
	var i = document.createElement("input");
	i.type = "text";
	i.className = "form-control input-lg page-input";
	i.name = "page[]";
	e.appendChild(i);
}