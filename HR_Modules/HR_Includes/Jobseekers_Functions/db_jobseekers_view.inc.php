<?php


function  prompt_appprove_js_status_success()  {
    if (isset($_SESSION["approve_js_success"])) {

        $approve_success = $_SESSION["approve_js_success"];
        foreach( $approve_success as $success_message) {


            echo '<div class="success_div">

                          <p class="form_success">' . htmlspecialchars(  $success_message) . ' </p>
                          <span class="success_x_button remove_success_button_prompt">x</span>

                 </div>';
        }
        
        unset($_SESSION['approve_js_success']);   

    }
}

function prompt_recruit_js_status_success(){

    if (isset($_SESSION["recruited_js_success"])) {

        $recruit_success = $_SESSION["recruited_js_success"];
        foreach( $recruit_success as $success_message) {


            echo '<div class="success_div">

                          <p class="form_success">' . htmlspecialchars(  $success_message) . ' </p>
                          <span class="success_x_button remove_success_button_prompt">x</span>

                 </div>';
        }
        
        unset($_SESSION['recruited_js_success']);   

    }



}




function prompt_delete_js_status_success()  {
    if (isset($_SESSION["delete_js_success"])) {

        $delete_success = $_SESSION["delete_js_success"];
        foreach($delete_success as $success_message) {

            echo '<div class="success_div">
                          <p class="form_success">' . htmlspecialchars(   $success_message) . '</p>
                          <span class="success_x_button remove_success_button_prompt">x</span>
                 </div>';
        }
        
        unset($_SESSION['delete_js_success']);   

    }
    
}






function prompt_reject_js_status_success()  {
    if (isset($_SESSION["reject_js_success"])) {

        $reject_success = $_SESSION["reject_js_success"];
        foreach($reject_success as $success_message) {

            echo '<div class="success_div">
                          <p class="form_success">' . htmlspecialchars(   $success_message) . '</p>
                          <span class="success_x_button remove_success_button_prompt">x</span>
                 </div>';
        }
        
        unset($_SESSION['reject_js_success']);   

    }
}



