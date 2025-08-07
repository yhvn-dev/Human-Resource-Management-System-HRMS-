// Dark Mode Toggle Button
const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");

// Elements for Dark Mode Animation
const darkModeElements = [
    document.getElementById("body"),
    document.getElementById("darkmode_div"),

    document.querySelector(".jpf_wrapper"),
    document.querySelector(".jpf_bd_wrapper"),

    document.querySelector(".jpf_main_form"),
        document.getElementById("jpf_logo_div"),
        document.getElementById("form_nodelab_text"),
        document.querySelector(".jpf_header"),
            document.getElementById("jpf_dashboard"),
                document.getElementById("dashboard_button_icon"),
                document.getElementById("jpf_dashboard_lbl"),
            document.getElementById("jpf_table"),
                document.getElementById("table_button_icon"),
                document.getElementById("jpf_table_lbl"),
            document.getElementById("jpf_form"),
                document.getElementById("jpf_form_lbl"),
                document.getElementById("form_button_icon"),

            document.getElementById("user_greetings"),
            document.getElementById("hd_role_type"),

    document.querySelector(".jpf_fp_wrapper"),
        document.querySelector(".jpf_function_nav_bar"),
            document.querySelector(".left_form_edit"),
            document.querySelector(".btn_edit-lbl"),
            document.querySelector(".btn_delete-lbl"),
            document.querySelector(".btn_post-lbl"),
            document.querySelector(".add-btn-svg"),
            document.querySelector(".edit-btn-svg"),
            document.querySelector(".delete-btn-svg"),
            document.querySelector(".post-btn-svg"),
            document.querySelector(".btn_add-lbl"),

        document.getElementById("jpf_input_form_div_id"),
        document.querySelector(".form_title_div"),
        document.getElementById("jp_inp_job_title"),
        document.getElementById("job_description"),
        document.getElementById("jp_inp_job_field_category"),
        document.getElementById("jp_inp_job_min_age"),
        document.getElementById("jp_inp_job_max_age"),
        document.getElementById("jp_inp_job_location"),
        document.getElementById("jp_inp_salary_range_from"),
        document.getElementById("jp_inp_salary_range_to"),
        document.getElementById("jp_inp_employment_type"),
        document.getElementById("jp_inp_required_qualifications"),
        document.getElementById("jp_inp_preferred_qualifications"),
        document.getElementById("jp_inp_applications_deadline"),
        document.getElementById("jp_inp_posting_date"),
        document.getElementById("jp_inp_contact_information"),
        document.getElementById("jp_inp_employment_type"),

            document.getElementById("joblistform-lbl"),
            document.getElementById("jp_inp_job_title-lbl"),
            document.getElementById("jp_inp_job_description-lbl"),
            document.getElementById("jp_job_field_category-lbl"),
            document.getElementById("jp_job_min_age-lbl"),
            document.getElementById("jp_job_max_age-lbl"),
            document.getElementById("jp_job_location-lbl"),
            document.getElementById("jp_salary_range-lbl_from"),
            document.getElementById("jp_salary_range-lbl_to"),
            document.getElementById("jp_employment_type-lbl"),
            document.getElementById("jp_required_qualifications-lbl"),
            document.getElementById("jp_preferred_qualifications-lbl"),
            document.getElementById("jp_applications_deadline-lbl"),
            document.getElementById("jp_posting_date-lbl"),
            document.getElementById("jp_contact_information-lbl")

            
            

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
