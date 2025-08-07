document.addEventListener("DOMContentLoaded", function() {
    const successDiv = document.querySelector(".success_div");

    if (successDiv) {
    
        const form = document.querySelector("form");
        if (form) {
            form.reset();
        }
    }

});


const removeErrorPrompt_emtF = document.querySelectorAll(".remove_error_prompt");
const removeSuccessPrompt_F = document.querySelectorAll(".remove_success_button_prompt");
const removEmployeePromtF = document.querySelectorAll(".remove_error_prompt_empl");
const remove_dept_error = document.querySelectorAll(".remove_error_button_prompt");

document.addEventListener("DOMContentLoaded" , function(){
   

    removeErrorPrompt_emtF.forEach(button => {
        button.addEventListener("click", function (){
            hide_error_prompt_emtf(button);
        });
    });


    // Remove Error of Success
    removeSuccessPrompt_F.forEach(button =>{
        button.addEventListener("click", function (){
            hide_success_prompt(button);
        });

    });

    
    // Remove Error of Success
    removEmployeePromtF.forEach(button =>{
        button.addEventListener("click", function (){
            hide_empl_error_prompt(button);
        });

    });


    remove_dept_error.forEach(button => {
        button.addEventListener("click", function (){
            hide_dept_prompt(button);
        });

    });






    // FUNCTIONS ==============================

    function hide_error_prompt_emtf(button){
        button.parentElement.style.display = "none";
    }

    function  hide_empl_error_prompt(button){
        button.parentElement.style.display = "none";
    }

    function hide_success_prompt(button){
        button.parentElement.style.display = "none";
    }

    
    function hide_dept_prompt(button){
        button.parentElement.style.display = "none";
    }




});