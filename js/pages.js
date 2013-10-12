var inputs = new Array();

$(document).ready(function () {
	appendPageInput(document.getElementById("page-inputs"));
	appendPageInput(document.getElementById("page-inputs"));
	$("#remove-page-input-btn").hide();
});

$("#add-page-input-btn").click(function () {
	appendPageInput(document.getElementById("page-inputs"));
	if(inputs.length > 2) {
		$("#remove-page-input-btn").show();
	}
});

$("#remove-page-input-btn").click(function () {
	removePageInput(document.getElementById("page-inputs"));
	if(inputs.length <= 2) {
		$("#remove-page-input-btn").hide();
	}
});

function appendPageInput(e) {
	var i = document.createElement("input");
	i.type = "text";
	i.className = "form-control input-lg page-input";
	i.name = "page[]";
	i.id = "inp" + (inputs.length + 1);
	inputs.push(i);
	e.appendChild(i);
}

function removePageInput(e) {
	var i = inputs[inputs.length - 1];
	e.removeChild(i)
	inputs.pop();
}

$("#compare_pages_btn").click(function () {
	var inputData = {};
	for(var i = 0; i < inputs.length; i++) {
		inputData[i] = $("#inp" + (i+1)).val();
	}
	console.log(inputData);

	$.ajax({
		type: "POST",
		url: "api.php",
		data: inputData
	})
		.done(function (msg) {
			alert("AJAX request made. " + msg);
		});
});