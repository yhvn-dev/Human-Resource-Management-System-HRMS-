
function toggleClass(elements, className) {
    elements.forEach(element => {
        if (element) {
            element.classList.toggle(className);
        }
    });
}


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
        document.querySelector(".main_recq_wrapper"),
        document.querySelector(".bd_recq_wrappe"),
        document.querySelector(".fp_recq_wrapper"),
        document.querySelector(".logo_div"),
        document.getElementById("db_nodelab_text"),
        document.querySelector(".header"),
        document.getElementById("darkmode_div"),
        document.querySelector(".sidebar"),
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
        document.querySelector(".logo_text"),
        document.getElementById("hd_role_type"),
        document.getElementById("hr_name"),

     
        document.querySelector(".number_div"),
        document.getElementById("employee_number"),
        document.getElementById("jobseekers_number"),
        document.getElementById("jobpost_number"),
            document.querySelector(".approved_js_div"),
            document.querySelector(".reject_js_div"),
                
                document.getElementById("appr_text"),
                document.getElementById("rjct_text"),
                document.getElementById("appr_js_num_holder"),
                document.getElementById("rjct_js_num_holder"),

            

        document.querySelector(".main_contents"),
        document.querySelector(".mc_header_text"),
        document.querySelector(".select_rj_appr"),
        document.querySelector(".mc_table_div"),
     

     
     
];



// Event Listener for Dark Mode Toggle
FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    toggleClass(darkModeElements, "darkmode_popup");


     
       // header
       const mc_th_tr = document.querySelectorAll('.mc_th_tr');
       mc_th_tr.forEach(row => {
           row.classList.toggle('darkmode_popup');
       });
           const mc_cell_th = document.querySelectorAll('.th_firstname, .th_lastname, .th_applied_job, .th_email, .th_phone_num, .th_resume, .th_recruitment_date, .th_status, .th_action');
           mc_cell_th.forEach(column => {
               column.classList.toggle('darkmode_popup');
           });
   
   
   
           // data
   
       const mc_data_tr = document.querySelectorAll(".mc_data_tr");
       mc_data_tr.forEach(row =>{
           row.classList.toggle('darkmode_popup');
       }) 
   
       const mc_tb_data = document.querySelectorAll(".td_output_js_firstname, .td_output_js_lastname, .td_output_js_job_title, .td_output_js_email,  .td_output_js_phone_num, .td_output_js_resume, .td_output_js_recruitment_date, .td_output_js_status, .td_output_js_action")
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
            const mc_cell_th = document.querySelectorAll('.th_firstname, .th_lastname, .th_applied_job, .th_email, .th_phone_num, .th_resume, .th_recruitment_date, .th_status, .th_action');
            mc_cell_th.forEach(column  => {
                column.classList.add('darkmode_popup');
            });



        // data

        const mc_data_tr = document.querySelectorAll(".mc_data_tr");
        mc_data_tr.forEach(row =>{
            row.classList.add('darkmode_popup');
        })          
            const mc_tb_data = document.querySelectorAll(".td_output_js_firstname, .td_output_js_lastname, .td_output_js_job_title, .td_output_js_email, .td_output_js_phone_num, .td_output_js_resume, .td_output_js_recruitment_date,   .td_output_js_status, .td_output_js_action")
            mc_tb_data.forEach(row =>{
                row.classList.add('darkmode_popup');
            });
            
  
    }



}




// Initialize
applyDarkMode();