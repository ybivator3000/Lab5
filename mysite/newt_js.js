var error = document.createElement('div')
error.className = 'error'
error.style.color = 'red'
error.innerHTML = 'ERROR'

document.addEventListener('submit', function (event){
	
	delete_error()
	var form = document.querySelector('.js-form')
	var username = form.querySelector('.js-username')
	var productname = form.querySelector('.js-productname')
	var comment = form.querySelector('.js-comment')
	console.log(productname.value, check_name(productname, form))
	console.log(username.value, check_name(username, form))
	console.log(check_comment(comment, form))
	console.log("END")
	let_submit()
	
})
function check_name(name, form){
	if (name.value.length == 0 || name.value.length > 255){
		name.parentElement.insertBefore(error, name)
		event.preventDefault()
		return 0
	}
	for(var i = 0; i < name.value.length; i++)
		if(!((name.value[i] >= 'a' && name.value[i] <= 'z') || (name.value[i] >= 'A' && name.value[i] <= 'Z') || (name.value[i] >= '0' && name.value[i] <= '9'))){
			name.parentElement.insertBefore(error, name)
			event.preventDefault()		
			return 0
		}
	return 1
		
}

function check_comment(comment, form){
	if(comment.value.length > 500 || comment.value == 0){
		comment.parentElement.insertBefore(error, comment)
		event.preventDefault()
		return 0 
	}
	else 
		return 1
}
function delete_error(){
	var errors = document.querySelectorAll('.error')
	for(var i = 0 ; i < errors.length; i++){
		errors[i].remove()
	}
}
function let_submit(){
	console.log(document.querySelectorAll('.error').length)
	if(document.querySelectorAll('.error').length == 0)
		event.stopImmediatePropagation()
}