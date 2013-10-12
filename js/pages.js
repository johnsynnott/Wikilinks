$("#add-page-input-btn").click(function() {
	appendPageInput(document.getElementById("page-inputs"));
});

function appendPageInput(e) {
	var i = document.createElement("input");
	i.type = "text";
	i.className = "form-control input-lg page-input";
	i.name = "page[]";
	e.appendChild(i);
}