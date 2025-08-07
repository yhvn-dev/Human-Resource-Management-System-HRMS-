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
    document.getElementById("darkmode_div"),
    document.getElementById("header_id"),
        document.getElementById("more-link"),
        document.getElementById("about-us-link"),
        document.getElementById("jpfeed_logo"),
        document.getElementById("jpfeed_inp_search"),
        document.getElementById("jpfeed_search_lbl"),
        document.getElementById("aside_left"),
        document.getElementById("aside_right"),
        document.getElementById("main_feed"),
            document.querySelector(".table_div"),
            document.querySelector(".no_sr_text")
];



FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    const darkModeEnabled = FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup");

    if (darkModeEnabled) {
        // Turn off dark mode
        darkModeElements.forEach(element => element?.classList.remove("darkmode_popup"));

        const feed_td = document.querySelectorAll(".result_jobpost");
        feed_td.forEach(row => {
            row.classList.remove("darkmode_popup");
        });

        const feed_td_contents = document.querySelectorAll(".text_a, .req_qual_label, .req_qual_holder, .pref_qual_label, .pref_qual_holder, .job_category_holder, .rsjp_header_div, .rsjp_footer_div");
        feed_td_contents.forEach(row => {
            row.classList.remove("darkmode_popup");
        });

        localStorage.setItem("darkmode", "disabled");

        
    } else {
        // Turn on dark mode
        addClass(darkModeElements, "darkmode_popup");

        const feed_td = document.querySelectorAll(".result_jobpost");
        feed_td.forEach(row => {
            row.classList.add("darkmode_popup");
        });

        const feed_td_contents = document.querySelectorAll(".text_a, .req_qual_label, .req_qual_holder, .pref_qual_label, .pref_qual_holder, .job_category_holder, .rsjp_header_div, .rsjp_footer_div");
        feed_td_contents.forEach(row => {
            row.classList.add("darkmode_popup");
        });

        localStorage.setItem("darkmode", "enabled");
    }
};



function applyDarkMode() {
    const darkModeEnabled = localStorage.getItem("darkmode") === "enabled";

    if (darkModeEnabled) {
        addClass(darkModeElements, "darkmode_popup");

        const feed_td = document.querySelectorAll(".result_jobpost");
        feed_td.forEach(row => {
            row.classList.add("darkmode_popup");
        });

        const feed_td_contents = document.querySelectorAll(".text_a, .req_qual_label, .req_qual_holder, .pref_qual_label, .pref_qual_holder, .job_category_holder, .rsjp_header_div, .rsjp_footer_div");
        feed_td_contents.forEach(row => {
            row.classList.add("darkmode_popup");
        });
    } else {
        // Ensure that elements are in light mode
        darkModeElements.forEach(element => element?.classList.remove("darkmode_popup"));

        const feed_td = document.querySelectorAll(".result_jobpost");
        feed_td.forEach(row => {
            row.classList.remove("darkmode_popup");
        });

        const feed_td_contents = document.querySelectorAll(".text_a, .req_qual_label, .req_qual_holder, .pref_qual_label, .pref_qual_holder, .job_category_holder, .rsjp_header_div, .rsjp_footer_div");
        feed_td_contents.forEach(row => {
            row.classList.remove("darkmode_popup");
        });
    }
}

applyDarkMode();