
const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");

// List of elements to apply dark mode
const darkModeElements = [
    FP_SUN_MOON_DARKMODE_BUTTON,
    document.getElementById("body")
];

        FP_SUN_MOON_DARKMODE_BUTTON.addEventListener("click",()=>{

        darkModeElements.forEach(element =>{
            if(element) element.classList.toggle("darkmode_popup");

        })

        if(FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup")){
            localStorage.setItem("darkmode","enabled");
            console.log(FP_SUN_MOON_DARKMODE_BUTTON);
        }else{
            localStorage.setItem("darkmode","disabled")

        }

    })


function applyDarkMode(){

    if(localStorage.getItem("darkmode") === "enabled"){

        darkModeElements.forEach(element =>{
            if(element) element.classList.add("darkmode_popup");
              console.log(FP_SUN_MOON_DARKMODE_BUTTON);
        })
    }

}

applyDarkMode();
