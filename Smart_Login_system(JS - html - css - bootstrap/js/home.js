// variables
const userName = document.getElementById("userName");
const logoutBtn = document.getElementById("logoutBtn");
let sessionUserName = localStorage.getItem("sessionUserName");


window.addEventListener("load", displayWelcomeUser);
logoutBtn.addEventListener("click", logout);

function displayWelcomeUser(){
    userName.innerHTML = `Welcome ${sessionUserName}`;
}

function logout(){
    localStorage.removeItem("sessionUserName");
    location.replace("index.html");

}



