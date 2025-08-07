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


// Event Listener for toggle
FP_SUN_MOON_DARKMODE_BUTTON.onclick = function () {
    toggleClass(darkModeElements, "darkmode_popup");


 
        
        const cell_tba_th = document.querySelectorAll('.jp_th_id, .jp_th_job_title, .jp_th_job_description, .jp_th_field_category, .jp_th_min_age,.jp_th_max_age, .jp_th_job_location, .jp_th_status, .jp_th_action');
        cell_tba_th.forEach(cell => {
            cell.classList.toggle('darkmode_popup');
        });
    
        const rows_tba_tr = document.querySelectorAll('.tba_output_jp_tr');
            rows_tba_tr.forEach(row => {
                row.classList.toggle('darkmode_popup');
            });


            
        const tba_data = document.querySelectorAll('.tba_data_jp_id, .tba_data_job_title, .tba_data_job_description, .tba_data_field_category, .tba_data_min_age, .tba_data_max_age, .tba_data_job_location, .tba_data_status');
          tba_data.forEach(row => {
                row.classList.toggle('darkmode_popup');
            });


        // SEARCH FUNCTION

        const search_tb_row_a = document.querySelectorAll(".search-result-row");
            search_tb_row_a .forEach(cell =>{
               cell.classList.toggle('darkmode_popup');
            })

        const search_tb_data_a = document.querySelectorAll('.search-result_jp_id, .search-result_job_title, .search-result_job_description, .search-result_field_category, .search-result_min_age, .search-result_max_age, .search-result_job_location, .search-result_status');
            search_tb_data_a.forEach(row => {
                row.classList.toggle('darkmode_popup');
              });


        // TABLE B ====================================================================

        const cell_tbb_th = document.querySelectorAll('.jp_th_b_id, .jp_th_b_salary_range_from, .jp_th_b_salary_range_to, .jp_th_b_employment, .jp_th_b_req_qual, .jp_th_b_pref_qual, .jp_th_b_app_deadline, .jp_th_b_posting_date, .jp_th_b_contact_information,.jp_th_b_images, .jp_th_b_status, .jp_th_b_action');
        cell_tbb_th.forEach(cell => {
            cell.classList.toggle('darkmode_popup');
        });
    

        const rows_tbb_tr = document.querySelectorAll('.tbb-result-row');
            rows_tbb_tr.forEach(row => {
                row.classList.toggle('darkmode_popup');
            });
            
        const tbb_data = document.querySelectorAll('.tbb_data_jp_id, .tbb_data_salary_range_from, .tbb_data_salary_range_to, .tbb_data_employment_type, .tbb_data_req_qual, .tbb_data_pref_qual, .tbb_data_appl_deadline, .tbb_data_posting_date, .tbb_data_contact_information, .tbb_data_status');
         tbb_data.forEach(cell => {
                cell.classList.toggle('darkmode_popup');
            });



        // SEARCH RESULT B

        const search_tb_row_b = document.querySelectorAll(".search-result-row_b");
        search_tb_row_b.forEach(cell =>{
            cell.classList.toggle('darkmode_popup');
          })

        const search_tb_data_b = document.querySelectorAll('.sr_jp, .sr_salary_range_from, .sr_salary_range_to, .sr_employment_type, .sr_req_qual, .sr_pref_qual, .sr_appl_deadline, .sr_posting_date, .sr_contact_information');
            search_tb_data_b.forEach(row => {
                row.classList.toggle('darkmode_popup');
              });



    const darkModeEnabled = FP_SUN_MOON_DARKMODE_BUTTON.classList.contains("darkmode_popup");
    localStorage.setItem("darkmode", darkModeEnabled ? "enabled" : "disabled");
};








// Apply dark mode on load
function applyDarkMode() {
    if (localStorage.getItem("darkmode") === "enabled") {
        addClass(darkModeElements, "darkmode_popup");

     
        const cell_tba_th = document.querySelectorAll('.jp_th_id, .jp_th_job_title, .jp_th_job_description, .jp_th_field_category, .jp_th_min_age, .jp_th_max_age, .jp_th_job_location, .jp_th_status, .jp_th_action');
        cell_tba_th .forEach(cell => {
            cell.classList.add('darkmode_popup');
        });
    

        const rows_tba_tr = document.querySelectorAll('.tba_output_jp_tr');
            rows_tba_tr.forEach(row => {
                row.classList.add('darkmode_popup');
            });







        const tba_data = document.querySelectorAll('.tba_data_jp_id, .tba_data_job_title, .tba_data_job_description, .tba_data_field_category, .tba_data_min_age, .tba_data_max_age, .tba_data_job_location, .tba_data_status');
            tba_data.forEach(cell => {
                cell.classList.add('darkmode_popup');
              });

            
        const search_tb_row_a = document.querySelectorAll(".search-result-row");
            search_tb_row_a.forEach(cell =>{
                cell.classList.add('darkmode_popup');
                  })
      

        const search_tb_data_a = document.querySelectorAll('.search-result_jp_id, .search-result_job_title, .search-result_job_description, .search-result_field_category, .search-result_min_age, .search-result_max_age, .search-result_job_location, .search-result_status');
            search_tb_data_a.forEach(row => {
                row.classList.add('darkmode_popup');
                    });
         

    
               
    // TABLE B  =================================================================================================================== 

    const cell_tbb_th = document.querySelectorAll('.jp_th_b_id, .jp_th_b_salary_range_from, .jp_th_b_salary_range_to, .jp_th_b_employment, .jp_th_b_req_qual, .jp_th_b_pref_qual, .jp_th_b_app_deadline, .jp_th_b_posting_date, .jp_th_b_contact_information,.jp_th_b_images, .jp_th_b_status, .jp_th_b_action');
    cell_tbb_th.forEach(cell => {
        cell.classList.add('darkmode_popup');
    });

    const rows_tbb_tr = document.querySelectorAll('.tbb-result-row');
    rows_tbb_tr.forEach(row => {
        row.classList.add('darkmode_popup');
    });


    const tbb_data = document.querySelectorAll('.tbb_data_jp_id, .tbb_data_salary_range_from, .tbb_data_salary_range_to, .tbb_data_employment_type, .tbb_data_req_qual, .tbb_data_pref_qual, .tbb_data_appl_deadline, .tbb_data_posting_date, .tbb_data_contact_information, .tbb_data_status');
    tbb_data.forEach(cell => {
           cell.classList.add('darkmode_popup');
       });
    


       

    //  SEARCH RESULT B
    const search_tb_row_b = document.querySelectorAll(".search-result-row_b");
        search_tb_row_b.forEach(cell =>{
            cell.classList.add('darkmode_popup');
          })

        const search_tb_data_b = document.querySelectorAll('.sr_jp, .sr_salary_range_from, .sr_salary_range_to, .sr_employment_type, .sr_req_qual, .sr_pref_qual, .sr_appl_deadline, .sr_posting_date, .sr_contact_information, .sr_status');
            search_tb_data_b.forEach(row => {
                row.classList.add('darkmode_popup');
              });


    }


    disableAnimationTemporarily();
}

applyDarkMode();