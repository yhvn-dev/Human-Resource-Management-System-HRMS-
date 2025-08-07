const removeErrorPromt_age = document.querySelectorAll(".age_remove_error_prompt");
const removeErrorPrompt_emtF = document.querySelectorAll(".remove_error_prompt");
const removeSuccessPrompt_F = document.querySelectorAll(".remove_success_button_prompt");

document.addEventListener("DOMContentLoaded" , function(){


      // Remove Error of AGE Mislogic
      removeErrorPromt_age.forEach(button => {
        button.addEventListener("click", function () {
            hide_error_prompt_age(button);
        });
    });




    removeErrorPrompt_emtF.forEach(button => {
        button.addEventListener("click", function (){
            hide_error_prompt_emtf(button);
        });
    });



    

    removeSuccessPrompt_F.forEach(button =>{
        button.addEventListener("click", function (){
            hide_success_prompt(button);
        });

    });




    // FUNCTIONS ==============================

    function hide_error_prompt_emtf(button){
        button.parentElement.style.display = "none";
    }

    function hide_error_prompt_age(button){
        button.parentElement.style.display = "none";
    }

    function hide_success_prompt(button){
        button.parentElement.style.display = "none";
    }





});