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

// Helper function to remove animation temporarily
function disableAnimationTemporarily() {
    document.body.classList.add("no-animation");
    setTimeout(() => {
        document.body.classList.remove("no-animation");
    }, 100);
}



const FP_SUN_MOON_DARKMODE_BUTTON = document.getElementById("sun_moon_toggle_button");


// List of elements to apply dark mode
const darkModeElements = [
    FP_SUN_MOON_DARKMODE_BUTTON,
    document.getElementById("body"),
    document.getElementById("darkmode_div"),
        document.querySelector(".jp_db_wrapper"),
        document.querySelector(".jp_db_backdrop_wrapper"),
        document.querySelector(".jp_logo_div"),
        document.getElementById("db_nodelab_text"),
    document.querySelector(".jp_header_div"),
        document.querySelector(".number_card_div_a"),

    document.getElementById("jp_dashboard"),
    document.getElementById("jp_table"),
     document.querySelector(".table_div"),
        document.getElementById("jp_form"),
        document.getElementById("jp_dashboard_lbl"),
        document.getElementById("jp_table_lbl"),
        document.getElementById("jp_form_lbl"), 
        document.getElementById("dashboard_button_icon"),
        document.getElementById("table_button_icon"),
        document.getElementById("form_button_icon"),
        document.getElementById("user_greetings"),
        document.getElementById("hd_role_type"),

        
    document.querySelector(".jp_joblist_table"),
        document.getElementById("jp_table_a_title"),
        document.getElementById("jp_inp_search_a"),
        document.getElementById("jp_tp_search_lbl_a"),
        document.getElementById("search_button_div"),
            document.querySelector(".filter_status"),
            document.getElementById("jp_tr"),
            document.getElementById("noresults_td_a"), 
        

            
    document.querySelector(".jp_joblist_table_b"),
     document.querySelector(".table_div_b"),
        document.getElementById("jp_table_a_title_b"),
        document.getElementById("jp_inp_search_b"),
            document.getElementById("jp_tp_search_lbl_b"),
        document.getElementById("search_button_b"),
        document.getElementById("jp_tr_b"),
        document.getElementById("noresults_td_b")
];

