var username = document.querySelector('.username');
var message = document.querySelector('.msgPassword');
var validUsername;
username.onkeypress=()=>{
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    var validfirstUsername = usernameRegex.test(username.value);
    if(validfirstUsername){
        message.classList.add('hidden');
        document.getElementById("myButtonId").removeAttribute("disabled");
        document.getElementById("myButtonId").classList.remove('bg-gray-400');
    }else {
        message.classList.remove('hidden');
        document.getElementById("myButtonId").classList.add('bg-gray-400');
        document.getElementById("myButtonId").setAttribute("disabled", ""); 
}
}
