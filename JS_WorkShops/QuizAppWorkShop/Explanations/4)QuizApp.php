<!-- 

QuizApp:
    -we want to make a quiz generator app 
    -we will use this api:
        -go to (opentdb.com )
        -configure your quiz questions , type , number of questions, ...
        -then generate api
        -then take this api and use it in our code
        
        explanation of our api:
            base url : https://opentdb.com/api.php

            parameters:
                
                -category = number : 
                    -type of category is represented in number
                    -each category is represented as a number

                -difficulty = easy or medium or hard
                -type = true/false(boolean) or multiple choices

                Example:
                    -https://opentdb.com/api.php?amount=10&category=9&difficulty=easy&type=boolean
    
        
    -sections of our app:
        -settings section : set settings(number,type, difficulty) of our quiz
        -quiz section: contain questions of the quiz generated
        -finish section: display score of the quiz

        Notes:
            -we will make settings.js for settings section
            -we will make quiz.js for quiz section

        
            -we will import setting.js in main.js
            -we will link main.js with index.html

    -we will work with oop
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Settings:
    
    bind method:
        -the bind() method has to be used to prevent loosing this.
        -When you pass a method of an object to another function as a callback, the (this) is lost.

        Example without bind:
            let person = {
                name: 'John Doe',
                getName: function() {
                    console.log(this.name);
                }
            };

            setTimeout(person.getName, 1000);

            -output:
                -undefined

            -As you can see clearly from the output, the person.getName() returns undefined instead of 'John Doe'.
            
            -the (this) inside the setTimeout() function is set to the global object in non-strict mode and undefined in the strict mode.

            -Therefore, when the callback person.getName is invoked, the name does not exist in the global object, it is set to undefined.


            

        Solution Example with anonymous function:
            -To fix the issue, you can wrap the call to the person.getName method in an anonymous arrow function

            let person = {
                name: 'John Doe',
                getName: function() {
                    console.log(this.name);
                }
            };

            setTimeout(() =>{
                person.getName();
            }, 1000);

            -This works because it gets the person from the outer scope and then calls the method getName().
            
        Solution Example with bind():
            -The bind() method also solves this problem.
            -In the following example, the bind() method is used to bind person.getName to person.
            
            let person = {
                name: 'John Doe',
                getName: function() {
                    console.log(this.name);
                }
            };

            setTimeout(person.getName.bind(person), 1000);

        

        Example 2 using bind():
            export class Settings{
                constructor(){
                    this.categoryElement = document.getElementById("category");
                    this.difficultyElements = document.getElementsByName("difficulty");
                    this.numberOfQuestionsElement = document.getElementById("Number");
                    this.startBtn = document.getElementById("startBtn");

                    //solution 1 to prevent losing this using anonymous arrow function
                    /*this.startBtn.addEventListener("click",() =>{
                        this.startQuiz();
                    });*/

                    //solution 2 to prevent losing this using bind()
                    this.startBtn.addEventListener("click", this.startQuiz.bind(this));
                }


                startQuiz(){
                    console.log(this.categoryElement.value);
                }
            }
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    what will we do :
        -capture difficulty , category, numberOfQuestions elements
        -addEventListener on startBtn ,when click on startBtn , do startQuiz()

        
        -get values of elements captured
        -difficulty elements are nodeList, to convert nodeList to array , we can use spread operator  or we can use Array.from() method

        -then filter array to return only checked checkboxes
        -then save its value

        -then make url to required api and pass required parameters
        -then pass this url to fetchUrl() method
        -then call fetchUrl() , fetchUrl() is asynchronous function, so we need to use await with it


        -fetchUrl will get response using fetch() method 
        -since fetch() is synchronous method , we will use await
        -then use json() method to parse promise to return data . and use await with it
        
        -we use the json() method, which returns a second promise that resolves with the result of parsing the response body text as JSON

        -Note that despite the method being named json(), the result is not JSON but is instead the result of taking JSON as input and parsing it to produce a JavaScript object.

        -then response.results in a variable and return this variable 

        -if data.length > 0 which means that users entered the number of questions
        -if data.length > 0 , then fadeOut setting section , then fadeIn quiz section
        -then make a new instance of quiz class and pass numberOfQuestions and data to it
        -to make a new instance of quiz, we need to import quiz class


    Example settings:
        html:
             <section id="setting">

                <div class="bg-white overflow-auto w-50 m-auto shadow-lg  rounded-lg">
                    <h1 class="text-center text-spec py-5 bg-light border-bottom">Setting Your Quiz</h1>
                    <div class="p-4">
                        <div class="form-group">
                            <label for="category" class="text-spec">Category</label>
                            <select id="category" class="form-control" name="category">
                                <option value="9">General Knowledge</option>
                                <option value="27">Animals</option>
                                <option value="15">Video Games</option>
                                <option value="23">History</option>
                                <option value="21">Sports</option>
                                <option value="18">Science: Computers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="difficulty" class="text-spec"> Difficulty</label>
                            <div class="form-check" id="difficulty">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="difficulty" id="easy" value="easy" checked>
                                    Easy
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="difficulty" id="medium" value="medium">
                                    Medium
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="difficulty" id="hard" value="hard">
                                    Hard
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="" id="Number" aria-describedby="helpId"
                                placeholder="Number Of questions" required>
                        </div>
                        <button id="startBtn" class="btn float-right py-2 px-4 bg-spec rounded-pill text-white my-4">Start
                        </button>
                    </div>
                </div>
            </section>


        js:  
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
                    console.log(typeof(data));
                    return data.results;
                    
                }
            }

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Quiz:
    -first we capture elements 
    -show question at first
    -when user click on next btn
    -get next question to show it
    -getAnswers
    -show answers
    -checkAnswer when getting next question
    -when user click on try again , show setting section again
    

    Example:
        js:
            export class Quiz{
                constructor(numberOfQuestions, data){
                    this.currentElement = document.getElementById("current");
                    this.totalAmountElement = document.getElementById("totalAmount");
                    this.questionElement = document.getElementById("question");
                    this.rowAnswerElement = document.getElementById("rowAnswer");
                    this.scoreElement = document.getElementById("score");
                    this.nextBtn = document.getElementById("next");
                    this.tryBtn = document.getElementById("tryBtn");

                    this.numberOfQuestions = numberOfQuestions;
                    this.data = data;

                    this.currentQuestion = 0;

                    this.score = 0;


                    this.showQuestion();
                    this.nextBtn.addEventListener('click', this.nextQuestion.bind(this));
                    this.tryBtn.addEventListener('click', this.tryAgain.bind(this));
                    
                }


                getAnswers(){
                    // console.log(this.data);
                    let answers = [
                        this.data[this.currentQuestion].correct_answer,
                        ...this.data[this.currentQuestion].incorrect_answers
                    ];

                    let shuffledAnswers = answers.sort((a,b)=>{return 0.5 - Math.random()});
                    return shuffledAnswers;
                }

                showAnswers(answersArray){
                    let temp = ``;
                    for(let i = 0; i < answersArray.length; i++){
                        temp+= `
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="answer" id="q${i}" value="${answersArray[i]}">
                                    ${answersArray[i]}
                                </label>
                            </div>
                        `;
                    }

                    this.rowAnswerElement.innerHTML = temp;
                }
                
                checkAnswer(checkedAnswer){
            
                    if(this.data[this.currentQuestion].correct_answer == checkedAnswer){
                        this.score++;
                        $("#Correct").fadeIn(200);
                        
                    }else{
                        $("#inCorrect").fadeIn(200);
                        
                    }
                }


                showQuestion(){

                    this.questionElement.innerHTML = this.data[this.currentQuestion].question;
                    this.currentElement.innerHTML = this.currentQuestion+1;
                    this.totalAmountElement.innerHTML = this.numberOfQuestions;

                    let answers = this.getAnswers();
                    this.showAnswers(answers);
                }

                nextQuestion(){
                    $("#Correct").fadeOut(200);
                    $("#inCorrect").fadeOut(200);

                    let checkedAnswer = document.getElementsByName("answer");
                    checkedAnswer = [...checkedAnswer].filter((element)=>{return element.checked});
                    this.checkAnswer(checkedAnswer[0].value);

                    this.currentQuestion++;
                    this.currentQuestion < this.numberOfQuestions ? this.showQuestion() : this.finish();    
                }

                finish(){
                    $("#quiz").fadeOut(700, ()=>{
                        $("#finish").fadeIn(700);
                    });

                    this.scoreElement.innerHTML = this.score;
                }

            

                tryAgain(){
                    $("#Correct").fadeOut(200);
                    $("#inCorrect").fadeOut(200);

                    
                    $("#finish").fadeOut(700, ()=>{
                        $("#setting").fadeIn(700);
                    });
                }
            }
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Math.random():
    -Math.random() returns a random number between 0 (inclusive),  and 1 (exclusive):
    -Math.random() always returns a number lower than 1.

    -JavaScript Random Integers:
        -Math.random() used with Math.floor() can be used to return random integers.

        Example:
            // Returns a random integer from 0 to 9:
            let x = Math.floor(Math.random() * 10);

        Example:
            // Returns a random integer from 0 to 10:
            Math.floor(Math.random() * 11);

            // Returns a random integer from 0 to 99:
            Math.floor(Math.random() * 100);

            // Returns a random integer from 0 to 100:
            Math.floor(Math.random() * 101);

            // Returns a random integer from 1 to 10:
            Math.floor(Math.random() * 10) + 1;

            // Returns a random integer from 1 to 100:
            Math.floor(Math.random() * 100) + 1;

        Example:
            -This JavaScript function always returns a random number between min (included) and max (excluded):

            function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min) ) + min;
            }


        Example:
            This JavaScript function always returns a random number between min and max (both included):

            function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min + 1) ) + min;
            }


----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Compare function:
    -The purpose of the compare function is to define an alternative sort order.
    -The compare function should return a negative, zero, or positive value, depending on the arguments:
        function(a, b){return a - b}

    -When the sort() function compares two values, it sends the values to the compare function, and sorts the values according to the returned (negative, zero, positive) value.

    If the result is negative, a is sorted before b.

    If the result is positive, b is sorted before a.

    If the result is 0, no changes are done with the sort order of the two values.

    -The compare function compares all the values in the array, two values at a time (a, b).


    Sorting an Array in Random Order:
        Example:
            const points = [40, 100, 1, 5, 25, 10];
            points.sort(function(a,b){return 0.5 - Math.random()});

    
    -The Fisher Yates Method:
        The above example, array.sort(), is not accurate. It will favor some numbers over the others.

        The most popular correct method, is called the Fisher Yates shuffle, and was introduced in data science as early as 1938!

        Example:
            const points = [40, 100, 1, 5, 25, 10];

            for (let i = points.length -1; i > 0; i--) {
                let j = Math.floor(Math.random() * (i+1));
                let k = points[i];
                points[i] = points[j];
                points[j] = k;
            }


 -->