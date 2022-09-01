async function getSalad(){
    let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");

    let responseData = await response.json();
    console.log("Salad");
    console.log(responseData.recipes);
}
async function getPasta(){
    let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=pasta");

    let responseData = await response.json();
    console.log("Pasta");
    console.log(responseData.recipes);
}
async function getPizza(){
    let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=pizza");

    let responseData = await response.json();
    console.log("Pizza");
    console.log(responseData.recipes);
}
async function getBeef(){
    let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=beef");

    let responseData = await response.json();
    console.log("Beef");
    console.log(responseData.recipes);
}

function endMenu(){
    console.log("Belhanna");
}


console.log("1");
(async function printAll(){
    try{
        await getSalad();
        await getBeef();
        await getPasta();
        await getPizza();
        endMenu();
    }catch(error){
        console.log(error.message);
    }
})(); 
console.log("2");





