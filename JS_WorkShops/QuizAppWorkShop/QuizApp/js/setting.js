
import { Quiz } from "./quiz.js";
export class Settings{
    constructor(){
        this.categoryElement = document.getElementById("category");
        this.difficultyElements = document.getElementsByName("difficulty");//nodeList
        this.numberOfQuestionsElement = document.getElementById("Number");
        this.startBtn = document.getElementById("startBtn");

        //solution 1 to prevent losing this using anonymous arrow function
        /*this.startBtn.addEventListener("click",() =>{
            this.startQuiz();
        });*/

        //solution 2 to prevent losing this using bind()
        this.startBtn.addEventListener("click", this.startQuiz.bind(this));
    }


    async startQuiz(){
        let category = this.categoryElement.value;

        let difficulty = [...this.difficultyElements].filter((element)=>{ return element.checked});//array
        difficulty = difficulty[0].value;
        
        let numberOfQuestions = this.numberOfQuestionsElement.value;

        let url = `https://opentdb.com/api.php?amount=${numberOfQuestions}&category=${category}&difficulty=${difficulty}`;
        let data = await this.fetchUrl(url);


        if(data.length > 0){
            $("#setting").fadeOut(700, ()=>{
                $("#quiz").fadeIn(700);
            })
            new Quiz(numberOfQuestions, data);
        }

    }


    async fetchUrl(url){
        let response = await fetch(url);
        let data = await response.json();
        return data.results;
        
    }


}
















