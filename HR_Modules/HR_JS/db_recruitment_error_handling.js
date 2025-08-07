

const removeSuccessPrompt_F = document.querySelectorAll(".remove_success_button_prompt");

document.addEventListener("DOMContentLoaded" , function(){
   
    // Remove Error of Success
    removeSuccessPrompt_F.forEach(button =>{
        button.addEventListener("click", function (){
            hide_success_prompt(button);
        });

    });


    function hide_success_prompt(button){
        button.parentElement.style.display = "none";
    }





});