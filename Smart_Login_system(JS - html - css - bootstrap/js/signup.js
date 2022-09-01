const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const signUpBtn = document.getElementById("signUpBtn");
const nameAlert = document.getElementById("nameAlert");
const emailAlert = document.getElementById("emailAlert");
const passwordAlert = document.getElementById("passwordAlert");
const accountExistMsg = document.getElementById("accountExistMsg");

let users ;
if(localStorage.getItem("usersList") == null){
    users = [];
}else{
    users = JSON.parse(localStorage.getItem("usersList"));
}

// events
signUpBtn.addEventListener("click", function(){
    signUp();
});
nameInput.addEventListener("keyup", userNameValidation);
passwordInput.addEventListener("keyup", userPasswordValidation);
emailInput.addEventListener("keyup", userEmailValidation);


function signUp(){
    if(userInputValidation() == true && isExist() == false){
        let user = {
            name : nameInput.value,
            email : emailInput.value,
            password : passwordInput.value
        };
    
        users.push(user);
        localStorage.setItem("usersList", JSON.stringify(users));
        
        const confirmMsg = document.getElementById("confirmMsg");
        confirmMsg.classList.replace("d-none", "d-block");
        
        const signIn = document.getElementById("signIn");
        signIn.classList.replace("d-none", "d-block");

        accountExistMsg.classList.replace("d-block", "d-none");
        tryAgainMsg.classList.replace("d-block", "d-none");

        clearForm();
    }else{
        const tryAgainMsg = document.getElementById("tryAgainMsg");
        tryAgainMsg.classList.replace("d-none", "d-block");
    }
}


function userNameValidation(){
    //name start with capital letter
    //then with 2-10 letter(small or big) or numbers 
    //then we can enter space or not
    //then we can enter second name or not(3 to 10 letters small or big)

    let regex = /^[A-Z][A-Za-z0-9]{2,10}(\s?[A-Za-z]{3,10})?$/;//Ahmed Fawzy
    if(regex.test(nameInput.value) == true && nameInput.value != ""){
        nameInput.classList.add("is-valid");
        nameInput.classList.remove("is-invalid");
        nameAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        nameInput.classList.add("is-invalid");
        nameInput.classList.remove("is-valid");
        nameAlert.classList.replace("d-none", "d-block");
        return false;
    }
}
function userPasswordValidation(){
    // The wildcard ( . ):
    //The wildcard represents any character(letters , symbols, numbers ,...)
    //our password will be from 5 to 15 of any characters
    let regex = /^.{5,15}/;

    if(regex.test(passwordInput.value) == true && passwordInput.value != ""){
        passwordInput.classList.add("is-valid");
        passwordInput.classList.remove("is-invalid");
        passwordAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        passwordInput.classList.add("is-invalid");
        passwordInput.classList.remove("is-valid");
        passwordAlert.classList.replace("d-none", "d-block");
        return false;
    }
}

function userEmailValidation(){
    //my email must contain @ then 5 to 10 characters , then .com 
    let regex = /@[a-zA-Z]{5,10}(\.com)$/;

    if(regex.test(emailInput.value) == true && emailInput.value != ""){
        emailInput.classList.add("is-valid");
        emailInput.classList.remove("is-invalid");
        emailAlert.classList.replace("d-block", "d-none");
        return true;
    }else{
        emailInput.classList.add("is-invalid");
        emailInput.classList.remove("is-valid");
        emailAlert.classList.replace("d-none", "d-block");
        return false;
    }
}

function userInputValidation(){
    if(userNameValidation() && userEmailValidation() && userPasswordValidation()){
        return true;   
    }
    return false;
}

//mail exists before
function isExist(){
    for(let i = 0 ; i < users.length; i++){
        if(users[i].email.toLowerCase() == emailInput.value.toLowerCase()){
            emailInput.classList.remove("is-valid");
            accountExistMsg.classList.replace("d-none", "d-block");
            return true;
        }
    }
    return false;
}

function clearForm(){
    nameInput.value = "";
    emailInput.value = "";
    passwordInput.value = "";
}