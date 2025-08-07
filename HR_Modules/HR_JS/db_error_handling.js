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

document.addEventListener("DOMContentLoaded" , function(){
   
    // Remove Error of EMPTY Fields  
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