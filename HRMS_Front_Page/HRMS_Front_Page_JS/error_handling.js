


document.addEventListener("DOMContentLoaded", function () {
    // Select all buttons by class
    const removeErrorPromptsCDER = document.querySelectorAll(".remove_error_prompt_cdER");
    const removeErrorPromptsEMTFER = document.querySelectorAll(".remove_error_prompt_emtfER");



    // Handle credential error buttons
    removeErrorPromptsCDER.forEach(button => {
        button.addEventListener("click", function () {
            hide_error_prompt_cdER(button);
        });
    });

    


    // Handle empty field error buttons
    removeErrorPromptsEMTFER.forEach(button => {
        button.addEventListener("click", function () {
            hide_error_prompt_emtfER(button);
        });
    });

    
});





function hide_error_prompt_cdER(button) {
    button.parentElement.style.display = "none"; 
}

function hide_error_prompt_emtfER(button) {
    button.parentElement.style.display = "none";
}


