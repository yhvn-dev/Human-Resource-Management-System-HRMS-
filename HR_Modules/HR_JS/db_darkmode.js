
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



// Grouped Elements for Dark Mode
const darkModeElements = [
    FP_SUN_MOON_DARKMODE_BUTTON,
        document.getElementById("db_wrapper"),
        document.getElementById("db_bd_id"),
        document.getElementById("db_template_wrapper"),
        document.getElementById("darkmode_div"),
        document.getElementById("db_header_logo_div_id"),
        document.getElementById("db_sidebar_id"),
        document.getElementById("db_header_id"),
        document.getElementById("db_numbers_contents_id"),
        document.querySelector(".number_contents_b"),
        document.querySelector(".approved_jobseekers"),
            document.getElementById("appr-js-text"),
            document.getElementById("approve_js_count_holder"),
        document.querySelector(".rejected_jobseekers"),
            document.getElementById("rejct-js-text"),
            document.getElementById("rejected_js_count_holder"),

        document.getElementById("db_main_contents_id"),
        document.getElementById("db_aside_id"),
        document.querySelector(".text_a"),
        document.querySelector(".text_b"),


        document.getElementById("dashboard-lbtn"),
        document.getElementById("dashboard_button_icon"),
        document.getElementById("recruitment-lbtn"),
        document.getElementById("recruit_person_button_icon"),
        document.getElementById("jobposting-lbtn"),
        document.getElementById("job_posting_button_icon"),
        document.getElementById("employee-lbtn"),
        document.getElementById("employee_button-icon"),
        document.getElementById("logout-lbtn"),
        document.getElementById("logout_button_icon"),
        document.querySelector(".logo_text"),

        
        document.getElementById("user_greetings"),
        document.getElementById("hd_role_type"),
        document.getElementById("employee_number"),
        document.getElementById("jobseekers_number"),
        document.getElementById("jobpost_number"),
        document.getElementById("appr_icon"),
        document.querySelector(".appr_text"),
        document.getElementById("rjct_icon"),
        document.querySelector(".rjct_text"),


        document.querySelector(".mc_header_text"),
        document.querySelector(".select_rj_appr"),
        document.querySelector(".mc_table_div"),
                document.getElementById("db_inp_search_a"),
                document.getElementById("db_tp_search_lbl_a"),

        document.querySelector(".show_history_btn_icon"),
        document.getElementById("status_history_icon"),
        document.getElementById("status_history_text"),
        document.querySelector(".aside_mc_table_div")
     
];






// Event Listener for Dark Mode Toggle
FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    toggleClass(darkModeElements, "darkmode_popup");
    
       // header
    const mc_th_tr = document.querySelectorAll('.mc_th_tr');
    mc_th_tr.forEach(row => {
        row.classList.toggle('darkmode_popup');
    });
        const mc_cell_th = document.querySelectorAll('.th_firstname, .th_lastname, .th_applied_job, .th_email, .th_phone_num, .th_resume, .th_submission_date, .th_approval_date, .th_approval_date,  .th_rejection_date, .th_status, .th_action');
        mc_cell_th.forEach(column => {
            column.classList.toggle('darkmode_popup');
        });



        // output
    const mc_data_tr = document.querySelectorAll(".mc_data_tr");
    mc_data_tr.forEach(row =>{
        row.classList.toggle('darkmode_popup');
    }) 

    const mc_tb_data = document.querySelectorAll(".td_output_js_firstname, .td_output_js_lastname, .td_output_js_job_title, .td_output_js_email, .td_output_js_phone_num, .td_output_js_resume, .td_output_submission_date, .td_output_approval_date, .td_output_rejection_date, .td_output_js_status, .td_output_js_action")
    mc_tb_data.forEach(row =>{
        row.classList.toggle('darkmode_popup');
    });

    const isDarkMode = FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup");
    localStorage.setItem("darkmode", isDarkMode ? "enabled" : "disabled");
    
};










function applyDarkMode() {
    if (localStorage.getItem("darkmode") === "enabled") {
        addClass(darkModeElements, "darkmode_popup");

        // header

        const mc_th_tr = document.querySelectorAll(".mc_th_tr")
        mc_th_tr.forEach(row => {
            row.classList.add('darkmode_popup');
        });
            const mc_cell_th = document.querySelectorAll('.th_firstname, .th_lastname, .th_applied_job, .th_email, .th_phone_num, .th_resume, .th_submission_date, .th_approval_date,  .th_rejection_date, .th_status, .th_action');
            mc_cell_th.forEach(column  => {
                column.classList.add('darkmode_popup');
            });



        // output

        const mc_data_tr = document.querySelectorAll(".mc_data_tr");
        mc_data_tr.forEach(row =>{
            row.classList.add('darkmode_popup');
        })          
            const mc_tb_data = document.querySelectorAll(".td_output_js_firstname, .td_output_js_lastname, .td_output_js_job_title, .td_output_js_email, .td_output_js_phone_num, .td_output_js_resume, .td_output_submission_date, .td_output_approval_date, .td_output_rejection_date, .td_output_js_status, .td_output_js_action")
            mc_tb_data.forEach(row =>{
                row.classList.add('darkmode_popup');
            });
            


    }



}




// Initialize
applyDarkMode();





