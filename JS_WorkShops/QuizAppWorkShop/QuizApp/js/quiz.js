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
        
        if(checkedAnswer.length > 0){
            this.checkAnswer(checkedAnswer[0].value);
    
            this.currentQuestion++;
            this.currentQuestion < this.numberOfQuestions ? this.showQuestion() : this.finish();    
        }
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





















