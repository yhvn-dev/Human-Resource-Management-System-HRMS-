
const MAIN_LOGIN_BUTTON = document.getElementById("login-btn-link");
const MAIN_LOGIN_CLOSE_BUTTON = document.getElementById("login_close_btn");


// HEADER ======================================================
const backdrop_lgn_template = document.getElementById("backdrop_login_wrapper");
const login_wrapper = document.getElementById("login_wrapper");

const jobListLink = document.getElementById('job-list-link');
const jobListIcon = document.getElementById('job_list_icon');

// FRONT PAGE =================================================
const vector_circle_design = document.getElementById("vector_circle_design");
const fp_vector_a = document.getElementById("fp_vector_a");


const hamburger_button = document.getElementById("h_hamburger_btn_link");
const logo_button = document.getElementById("main_logo");

const main_wrapper_1strow = document.getElementById("main_wrapper_id");
const backdrop_wrapper_1strow = document.getElementById("backdrop_wrapper");
const bd_front_page_tag_1strow = document.getElementById("frontpage_wrapper_id");

const h_button_div = document.getElementById("h_button_div");
const darkmode_div = document.getElementById("darkmode_div");
const joblist_button = document.getElementById("job-list-link");
const about_us_button = document.getElementById("about-us-link");
const more_button = document.getElementById("more-link");
const login_button = document.getElementById("login-btn-link");


const cube_A = document.getElementById("scene_a_id");
const cube_B = document.getElementById("scene_b_id");   




jobListLink.addEventListener('mouseenter', () => {
    jobListIcon.classList.add('move');  
});

jobListLink.addEventListener('mouseleave', () => {
    jobListIcon.classList.remove('move');  
});



hamburger_button.onclick = function(){


   

    hamburger_button.classList.toggle("mobile_header_show");
    h_button_div.classList.toggle("mobile_header_show");

    main_wrapper_1strow.classList.toggle("mobile_header_show");
    backdrop_wrapper_1strow.classList.toggle("mobile_header_show");
    bd_front_page_tag_1strow.classList.toggle("mobile_header_show");
    

    darkmode_div.classList.toggle("mobile_header_show");
    joblist_button.classList.toggle("mobile_header_show");
    about_us_button.classList.toggle("mobile_header_show");
    more_button.classList.toggle("mobile_header_show");
    login_button.classList.toggle("mobile_header_show");

  


}




// ======= LOGIN  BUTTON ========
MAIN_LOGIN_BUTTON.onclick = function(){

    MAIN_LOGIN_BUTTON.classList.add("active-popup");
    backdrop_lgn_template.classList.add("active-popup");
    login_wrapper.classList.add("active-popup");
    fp_vector_a.classList.add("dissapear-popoff");
    vector_circle_design.classList.add("dissapear-popoff");

   

    cube_A.classList.add("dissapear-popoff");
    cube_B.classList.add("dissapear-popoff");
   
    
    
}




// ======= LOGIN CLOSE BUTTON ========
MAIN_LOGIN_CLOSE_BUTTON.onclick = function(){
    
    MAIN_LOGIN_BUTTON.classList.remove("active-popup");
    backdrop_lgn_template.classList.remove("active-popup");
    login_wrapper.classList.remove("active-popup");
    fp_vector_a.classList.remove("dissapear-popoff");
    vector_circle_design.classList.remove("dissapear-popoff");


    
    cube_A.classList.remove("dissapear-popoff");
    cube_B.classList.remove("dissapear-popoff");
  

}


