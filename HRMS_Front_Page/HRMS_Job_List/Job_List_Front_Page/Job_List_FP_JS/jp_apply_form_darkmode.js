

// Helper function to toggle a class for a list of elements
function toggleClass(elements, className) {
    elements.forEach(element => {
        if (element) {
            element.classList.toggle(className);
        }
    });
}


// Helper function to add a class for a list of elements
function addClass(elements, className) {
    elements.forEach(element => {
        if (element) {
            element.classList.add(className);
        }
    });
}

 

const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");


// List of elements to apply dark mode
const darkModeElements = [
    FP_SUN_MOON_DARKMODE_BUTTON,
    document.getElementById("body"),
    document.getElementById("bd_jp_apply_form_wrapper"),
    document.getElementById("darkmode_div"),
    document.getElementById("jpfeed_link"),
    


        document.querySelector(".main_apply_div"),
        document.querySelector(".jpdata_div_header"),



        document.getElementById("job_title_lbl"),
        document.getElementById("job_description_lbl"),
        document.getElementById("field_category_lbl"),
        document.getElementById("age_req_lbl"),
        document.getElementById("job_loc_lbl"),
        document.getElementById("salary_range_lbl"),
        document.getElementById("employment_type_lbl"),
        document.getElementById("req_ual_lbl"),
        document.getElementById("pref_qual_lbl"),
        document.getElementById("posting_lbl"),
        document.getElementById("appl_deadl_lbl"),
        document.getElementById("contact_info_lbl"),


        document.querySelector(".job-title-holder"),
        document.querySelector(".job-description-holder"),
        document.querySelector(".field-category-holder"),
        document.querySelector(".job-min-age-holder"),
        document.querySelector(".job-max-age-holder"),
        document.querySelector(".job-location-holder"),
        document.querySelector(".salary-range-from-holder"),
        document.querySelector(".salary-range-to-holder"),
        document.querySelector(".employment-type-holder"),
        document.querySelector(".req-qual-holder"),
        document.querySelector(".pref-qual-holder"),
        document.querySelector(".posting-date-holder"),
        document.querySelector(".appl-deadl-holder"),
        document.querySelector(".contact-information-holder"),



        document.querySelector(".row_1_jps_form"),
        document.querySelector(".row_2_jps_form"),
        document.querySelector(".row_3_jps_form"),
        document.querySelector(".row_4_jps_form"),
        document.querySelector(".row_5_jps_form"),
        document.querySelector(".row_6_jps_form"),


            document.querySelector(".af_firstname_inp"),
            document.querySelector(".af_lastname_inp"),
            document.querySelector(".af_middlename_inp"),
            document.querySelector(".af_email_inp"),
            document.querySelector(".af_phone_num_inp"),
            
            document.querySelector(".af_resume_inp"),
            document.querySelector(".af_questions_inp"),
            document.querySelector(".af_cl_inp"),
            document.getElementById("af_questions_inpn"),
       
        document.getElementById("jp_af_fname_lbl"),
        document.getElementById("jp_af_lname_lbl"),
        document.getElementById("jp_af_mname_lbl"),
        document.getElementById("upl_resume_lbl"),
        document.getElementById("jp_af_email_lbl"),
        document.getElementById("jp_af_pnum_lbl"),
        document.getElementById("cl_label"),
        document.getElementById("addit_que_label")


];



FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    const darkModeEnabled = FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup");

    if (darkModeEnabled) {
        // Turn off dark mode
        darkModeElements.forEach(element => element?.classList.remove("darkmode_popup"));

    

        localStorage.setItem("darkmode", "disabled");

        
    } else {
        // Turn on dark mode
        addClass(darkModeElements, "darkmode_popup");

   

        localStorage.setItem("darkmode", "enabled");
    }
};



function applyDarkMode() {
    const darkModeEnabled = localStorage.getItem("darkmode") === "enabled";

    if (darkModeEnabled) {
        addClass(darkModeElements, "darkmode_popup");

    
    } else {
      


        darkModeElements.forEach(element => element?.classList.remove("darkmode_popup"));

    

    }
}

applyDarkMode();


