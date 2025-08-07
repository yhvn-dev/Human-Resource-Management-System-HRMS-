// Dark Mode Toggle Button
const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");

// Elements for Dark Mode Animation
const darkModeElements = [
    document.getElementById("body"),
    document.getElementById("darkmode_div"),
    document.getElementById("aside_left"),
    document.getElementById("aside_right"),
    document.querySelector(".main_feed"),
    document.querySelector(".jobpost_template"),
    document.querySelector(".rsjp_header_div"),
    document.querySelector(".text_a"),
    document.querySelector(".req_qual_label"),
    document.querySelector(".req_qual_holder"),
    document.querySelector(".pref_qual_label"),
    document.querySelector(".pref_qual_holder"),
    document.querySelector(".job_category_holder"),
    document.querySelector(".rsjp_header_div"),
    document.querySelector(".rsjp_footer_div")
    
      
    

];

// Function to toggle dark mode classes
function toggleDarkMode() {


    // Toggle dark mode classes on all elements
    darkModeElements.forEach((element) => {
        if (element) element.classList.toggle("darkmode_popup");
    });

    // Save dark mode state in localStorage
    const isDarkModeEnabled = FP_SUN_MOON_DARKMODE_BUTTON.classList.toggle("darkmode_popup");
    localStorage.setItem("darkmode", isDarkModeEnabled ? "enabled" : "disabled");
}

// Function to apply dark mode on page load
function applyDarkMode() {


    if (localStorage.getItem("darkmode") === "enabled") {
        darkModeElements.forEach((element) => {
            if (element) element.classList.add("darkmode_popup");
        });
        FP_SUN_MOON_DARKMODE_BUTTON.classList.add("darkmode_popup");
    }

    // Temporarily disable animation during page load
    document.body.classList.add("no-animation");
    setTimeout(() => {
        document.body.classList.remove("no-animation");
    }, 100);


}


FP_SUN_MOON_DARKMODE_BUTTON.addEventListener("click", toggleDarkMode);

// Apply dark mode on initial load
applyDarkMode();











// APPLICATION DEADLINE DARKMODE CONTROL
const applDeadlDateInput = document.getElementById('jp_inp_applications_deadline');

function updateInputColor_appddeadl() {
    if (applDeadlDateInput.classList.contains("darkmode_popup")) {

        applDeadlDateInput.style.color = applDeadlDateInput.value ? '#ede8f5' : 'gray';

    } else {
      
        applDeadlDateInput.style.color = applDeadlDateInput.value ? '#2c2e3a' : 'initial';
    }
}

applDeadlDateInput.addEventListener('input', updateInputColor_appddeadl);


const observer_appl_deadl = new MutationObserver(() => updateInputColor_appddeadl());
observer_appl_deadl.observe(applDeadlDateInput, { attributes: true, attributeFilter: ['class'] });


// POSTING DATE DARKMODE CONTROL
const postingDateInput = document.getElementById("jp_inp_posting_date");

function updateInputColor_postingDate(){
    if(postingDateInput.classList.contains("darkmode_popup")){
        postingDateInput.style.color = postingDateInput.value ? '#ede8f5' : 'gray';
    }
    else{
        postingDateInput.style.color = postingDateInput.value ? '#2c2e3a' : 'initial';
    }
}


postingDateInput.addEventListener('input', updateInputColor_postingDate);

const observer_posting_date = new MutationObserver(() => updateInputColor_postingDate());
observer_posting_date .observe(postingDateInput, { attributes: true, attributeFilter: ['class'] });
