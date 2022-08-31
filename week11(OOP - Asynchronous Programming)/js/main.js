(async function(){
    let response = await fetch("https://forkify-api.herokuapp.com/api/search?q=salad");

    let responseData = await response.json();
    console.log(responseData.recipes);
})();
