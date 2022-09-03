// variables
const userNameInput = document.getElementById("name");
const userEmailInput = document.getElementById("email");
const userPasswordInput = document.getElementById("password");
const signUpBtn = document.getElementById("signUpBtn");
const nameAlert = document.getElementById("nameAlert");
const emailAlert = document.getElementById("emailAlert");
const passwordAlert = document.getElementById("passwordAlert");
const confirmMsg = document.getElementById("confirmMsg");
const tryAgainMsg = document.getElementById("tryAgainMsg");
const emailExistMsg = document.getElementById("emailExistMsg");
let usersList = [];

// events
signUpBtn.addEventListener("click", signUp);
userNameInput.addEventListener("keyup", userNameValidation);
userEmailInput.addEventListener("keyup", userEmailValidation);
userPasswordInput.addEventListener("keyup", userPasswordValidation);


// functions
if(localStorage.getItem("usersList") != null){
    usersList = JSON.parse(localStorage.getItem("usersList"));
}

function signUp(){
    if(userInputValidation() && !isEmailExists()){
        let user = {
            name:userNameInput.value,
            email:userEmailInput.value,
            password:userPasswordInput.value,
        };
    
        usersList.push(user);
        localStorage.setItem("usersList", JSON.stringify(usersList));

        confirmMsg.classList.replace("d-none", "d-block");
        tryAgainMsg.classList.replace("d-block", "d-none");
        emailExistMsg.classList.replace("d-block", "d-none");

        clearForm();
    }else{
        if(!isEmailExists()){
            tryAgainMsg.classList.replace("d-none", "d-block");
        }
        confirmMsg.classList.replace("d-block", "d-none")
    }
}


function userNameValidation(){
    let regex = /^[A-Z][A-Za-z0-9]{2,10}(\s?[A-Za-z0-9]{3,10})?$/;
    if(regex.test(userNameInput.value) && userNameInput.value !=""){
        userNameInput.classList.add("is-valid");
        userNameInput.classList.remove("is-invalid");
        nameAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        userNameInput.classList.add("is-invalid");
        userNameInput.classList.remove("is-valid");
        nameAlert.classList.replace("d-none", "d-block");
        return false;
    }
}

function userEmailValidation(){
    let regex = /^[A-Za-z0-9_\s]{3,15}@[a-zA-Z]{5,10}(\.com)$/;
    if(regex.test(userEmailInput.value) && userEmailInput.value !=""){
        userEmailInput.classList.add("is-valid");
        userEmailInput.classList.remove("is-invalid");
        emailAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        userEmailInput.classList.add("is-invalid");
        userEmailInput.classList.remove("is-valid");
        emailAlert.classList.replace("d-none", "d-block");
        return false;
    }
}
function userPasswordValidation(){
    let regex = /^.{5,15}$/;
    if(regex.test(userPasswordInput.value) && userPasswordInput.value !=""){
        userPasswordInput.classList.add("is-valid");
        userPasswordInput.classList.remove("is-invalid");
        passwordAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        userPasswordInput.classList.add("is-invalid");
        userPasswordInput.classList.remove("is-valid");
        passwordAlert.classList.replace("d-none", "d-block");
        return false;
    }
}

function userInputValidation(){
    if(userNameValidation() && userEmailValidation() && userPasswordValidation()){
        return true; 
    }
    return false;
}

function isEmailExists(){
    for(let i = 0; i < usersList.length ; i++){
        if(usersList[i].email.toLowerCase() == userEmailInput.value.toLowerCase()){
            userEmailInput.classList.remove("is-valid");
            emailExistMsg.classList.replace("d-none", "d-block");
            return true;
        }
    }
    return false;
}

function clearForm(){
    userNameInput.value = "";
    userEmailInput.value = "";
    userPasswordInput.value = "";
}