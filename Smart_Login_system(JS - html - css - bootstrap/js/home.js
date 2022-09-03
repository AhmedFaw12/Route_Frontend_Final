//variables
const userName = document.getElementById("userName");
const logoutBtn = document.getElementById("logoutBtn");
let currentUser = JSON.parse(localStorage.getItem("userSession"));

//events
window.addEventListener("load", displayWelcomeUser);
logoutBtn.addEventListener("click", logout);

//functions
function displayWelcomeUser(){
    if(currentUser == null){
        userName.innerHTML = `No user`;
    }else{
        userName.innerHTML = `Welcome ${currentUser.name}`;
    }
}

function logout(){
    localStorage.removeItem("userSession");
    window.location.replace("index.html");
}