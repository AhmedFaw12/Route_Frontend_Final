class Weather{

    days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    
    constructor(){
        this.searchInputElement = document.getElementById("search");
        this.findBtn = document.getElementById("findBtn");
        this.locationElement = document.getElementById("location");
        this.dayNameElement = document.getElementById("dayName");
        this.dayMonthElement = document.getElementById("dayMonth");
        this.conditionTextElement = document.getElementById("conditionText");
        this.conditionIconElement = document.getElementById("conditionIcon");
        this.forecastInfoIconsElement = document.getElementById("forecastInfoIcons");
        this.tempNumberElement = document.getElementById("tempNumber");

        this.search("cairo");

        this.searchWord = '';
        this.searchInputElement.addEventListener("keyup", (eventInfo)=>{
            if(eventInfo.target.value == ''){
                this.searchWord = 'cairo';
            }else{
                this.searchWord = eventInfo.target.value;
            }
            this.search(this.searchWord);
        });

       
        this.findBtn.addEventListener("click", ()=>{
            this.searchWord = this.searchInputElement.value;
            // console.log(this.searchInputElement);
            if(this.searchWord !=""){
                this.search(this.searchWord);
            }
        })
    }

    async search(location){
        let response = await fetch(`https://api.weatherapi.com/v1/forecast.json?key=95af9d5033a94650a2a164141210705&q=${location}&days=3`);
        if (response.ok && 200 == response.status) {
            let data = await response.json();
            console.log(data);
            this.displayCurrent(data.location, data.current);
            this.displayAnother(data.forecast);
        }

        
    }

    displayCurrent(location, current){
        this.locationElement.innerHTML = location.name;
        // console.log(location.localtime);
        // console.log(current)

        let [date, time] = location.localtime.split(" ");
        
        let newDate = new Date(date);
        let dayName = this.days[newDate.getDay()];
        let dayNumber =newDate.getDate();
        let monthName = this.monthNames[newDate.getMonth()];

        // console.log(dayName, monthName, dayNumber);

        this.dayNameElement.innerHTML = dayName;
        this.dayMonthElement.innerHTML = `${dayNumber}${monthName}`;
        

        let conditionText = current.condition.text;
        let conditionIcon = current.condition.icon;
        let temp  = current.temp_c;


        this.conditionTextElement.innerHTML = conditionText;
        this.tempNumberElement.innerHTML = temp;
        this.conditionIconElement.setAttribute("src", conditionIcon) ;
        

        this.forecastInfoIconsElement.innerHTML = `
        <div class="icon d-inline-block mr-3">
            <img src="images/icon-umberella.png" alt="">
            <span>${current.humidity}%</span>
    
        </div>

        <div class="icon d-inline-block mr-3">
            <img src="images/icon-wind.png" alt="">
            <span>${current.wind_kph}km/h</span>
        </div>

        <div class="icon d-inline-block">
            <img src="images/icon-compass.png" alt="">
            <span>${current.wind_dir}</span>
        </div>
        `;        
    }


    displayAnother(forecast){
        // console.log(forecast)
        let forecastDayArray = forecast.forecastday;

        // console.log(forecastDayArray);
        let forecastDayElement = document.getElementsByClassName("forecastDay");
        let forecastContentDiv = document.getElementsByClassName("forecast-content");
    
        let cartoona = ``;
        for(let i = 1; i < forecastDayArray.length; i++){
            let newDate = new Date(forecastDayArray[i].date);
            forecastDayElement[i-1].innerHTML = this.days[newDate.getDay()];

            cartoona = `
                <img src="${forecastDayArray[i].day.condition.icon}" alt="">
                                    
                <div class="my-4">
                    <h3 class="text-white">${forecastDayArray[i].day.maxtemp_c}<sup>o</sup>C</h3>
                    <h4 class="h5">${forecastDayArray[i].day.mintemp_c}<sup>o</sup></h4>
                </div>
                <small class="text-info">${forecastDayArray[i].day.condition.text}</small>
            `;

            forecastContentDiv[i].innerHTML = cartoona;
        }
    }
}


new Weather();