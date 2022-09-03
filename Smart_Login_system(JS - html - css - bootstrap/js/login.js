// variables
const userEmailInput = document.getElementById("email");
const userPasswordInput = document.getElementById("password");
const loginBtn = document.getElementById("loginBtn");
const fillMsg = document.getElementById("fillMsg");
const wrongMsg = document.getElementById("wrongMsg");

let usersList = []; 
//events
loginBtn.addEventListener("click", login);

//functions
if(localStorage.getItem("usersList") != null){
    usersList = JSON.parse(localStorage.getItem("usersList"));
}

function login(){
    if(isInputEmpty()){
        fillMsg.classList.replace("d-none", "d-block");
        wrongMsg.classList.replace("d-block", "d-none");
        return;
    }

    for(let i = 0 ; i < usersList.length; i++){
        if(usersList[i].email.toLowerCase() == userEmailInput.value.toLowerCase()
        && usersList[i].password.toLowerCase() == userPasswordInput.value.toLowerCase())
        {
            localStorage.setItem("userSession", JSON.stringify(usersList[i]));
            window.location.href = "home.html";
            fillMsg.classList.replace("d-block", "d-none");
            wrongMsg.classList.replace("d-block", "d-none");
            return;
        }    
    }
    fillMsg.classList.replace("d-block", "d-none");
    wrongMsg.classList.replace("d-none", "d-block");
}

function isInputEmpty(){
    if(userEmailInput.value == "" || userPasswordInput.value == ""){
        return true;
    }
    return false;
}
