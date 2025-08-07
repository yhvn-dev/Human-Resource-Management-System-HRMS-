const currentDate = document.getElementById("current-date");
const daysTag = document.getElementById("days"),
prevNextIcon = document.querySelectorAll('.icons span');


// getting new date, current date year and month

let date = new Date(),
currYear = date.getFullYear(),
currMonth  = date.getMonth();


const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "Novermber",
        "December"  
];



const renderCalendar = () => {

    let firsDayofMonth = new Date(currYear,currMonth,1).getDay(), 
    lastDateofMonth = new Date(currYear,currMonth + 1,0).getDate(),
    lastDayofMonth = new Date(currYear,currMonth,lastDateofMonth).getDay(), //getting the last day of month //getting the last date of month
    lastDateofLastMonth = new Date(currYear,currMonth,0).getDate(); //getting the last date of previous month


    let liTag = "";

    for(let i = firsDayofMonth; i > 0;i--){   //creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }
    
    for(let i = 1; i <= lastDateofMonth; i++){  //creating li of all days of current month
       let isToday = i === date.getDate() && currMonth === new Date().getMonth()
       && currYear === new Date().getFullYear()? "active" : "";
       
       liTag += `<li class="${isToday}">${i}</li>`;
    }

    for(let i = lastDayofMonth; i < 6; i++){  //creating li of next month first day
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
     }
 
     
    

    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

}

renderCalendar();


prevNextIcon.forEach(icon =>{
    icon.addEventListener("click",() =>{    //adding click event on both icons

        //if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        
        if(currMonth < 0 || currMonth > 11){
            date = new Date(currYear,currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }else{
            date = new Date();
        }
        renderCalendar();
    });
});