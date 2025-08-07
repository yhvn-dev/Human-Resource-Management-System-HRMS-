// DARK MODE Toggle Button
const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");

// Collect all elements to toggle in dark mode
const darkModeElements = [
    // DARK MODE div
    "body",
    
    "sun_moon_toggle_button",
    "darkmode_div",

    // DARK MODE HEADER containers
    "h_button_div", "main_logo", "job-list-link", "about-us-link",
    "more-link", "h_hamburger_btn_link",

    // DARK MODE MAIN containers
    "main_wrapper_id", "backdrop_wrapper","bd_header","front_page_tag",
    "fb_tag_text_a_id", "fb_tag_text_b_id", "explore_jobs",
    "explore_jobs_lbl", "backdrop_login_wrapper", "login_wrapper",
    "welcome_lbl", "lgn_y_acc_lbl", "input_norm_lbl_emp",
    "input_norm_lbl_pwd", "employee_inp", "employee_pass_inp",
    "employee_inp_icon", "employee_pass_inp_icon",
    "gradient_div_aa_ac", "gradient_div_ad_m"
];


// Add the header to the list
const FP_HEADER = document.querySelector(".header");
if (FP_HEADER) darkModeElements.push(FP_HEADER);

// Function to toggle dark mode
FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    // Toggle dark mode classes for each element
    darkModeElements.forEach((id) => {
        const element = typeof id === "string" ? document.getElementById(id) : id;
        if (element) element.classList.toggle("darkmode_popup");
    });

    // Save dark mode state in localStorage
    if (FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup")) {
        localStorage.setItem("darkmode", "enabled");
    } else {
        localStorage.setItem("darkmode", "disabled");
    }
};






// Function to apply dark mode on page load
function applyDarkMode() {
    if (localStorage.getItem("darkmode") === "enabled") {
        // Add dark mode classes for each element
        darkModeElements.forEach((id) => {
            const element = typeof id === "string" ? document.getElementById(id) : id;
            if (element) element.classList.add("darkmode_popup");
        });
    }

    
    // Temporarily disable animation
    document.body.classList.add("no-animation");
    setTimeout(() => {
        document.body.classList.remove("no-animation");
    }, 100); // Allow the DOM to stabilize before removing the class
}

applyDarkMode();




