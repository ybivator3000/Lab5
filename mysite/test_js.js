	alert("Hello")
	var date = new Date()
	var current_date = date.toISOString().slice(0, 10)
	document.getElementById("date").value = current_date

function plus_zero(without_zero){
	if(without_zero < 10){
		without_zero = '0' + without_zero
	}
	return without_zero
}
function set_default_date(){
	alert("Hello")
	var date = new Date()
	var current_date = date.toISOString().slice(0, 10)
	document.getElementById("date").value = current_date
}