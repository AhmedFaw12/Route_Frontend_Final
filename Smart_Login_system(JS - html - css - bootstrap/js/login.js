// variables
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const loginBtn = document.getElementById("loginBtn");
const wrongMsg = document.getElementById("wrongMsg");

let users ;
if(localStorage.getItem("usersList") == null){
    users = [];
}else{
    users = JSON.parse(localStorage.getItem("usersList"));
}

//events
loginBtn.addEventListener("click", login);

//functions
function login(){
    if(isEmptyInputs()){
        let fillMsg = document.getElementById("fillMsg");
        fillMsg.classList.replace("d-none", "d-block");
        return;
    }
    let email = emailInput.value;
    let password = passwordInput.value;

    for(let i = 0 ; i < users.length; i++){
        if(users[i].email.toLowerCase() == email.toLowerCase() 
        && users[i].password.toLowerCase() == password.toLowerCase()){
            localStorage.setItem("sessionUserName", users[i].name);  
            loginBtn.setAttribute("href", "home.html"); 
        }else{            
            wrongMsg.classList.replace("d-none", "d-block");
        }
    }
}

function isEmptyInputs(){
    if(emailInput.value == "" || passwordInput.value == ""){
        return true;
    }
    return false;
}

function clearForm(){
    nameInput.value = "";
    emailInput.value = "";
    passwordInput.value = "";
}