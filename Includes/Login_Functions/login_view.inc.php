


<?php

    function output_username(){

        if(isset($_SESSION["user_id"])){
            echo $_SESSION["user_firstname"];
        }else{
            echo "Dev Mode";
        }
    }


    function output_role(){
        if(isset($_SESSION["role"])){
            echo  '<p class="user_role"> ' . $_SESSION["role"] . ' </p>';
        }else{
            echo "<p class='user_role'>Dev Mode</p>";
        }
    }

    function output_profile_pic(){

    }
    



    function check_credential_errors(){
        if(isset($_SESSION["errors_login_credentials"])){

            $wrong_credentials_errors = $_SESSION["errors_login_credentials"];

            foreach($wrong_credentials_errors as $wrong_credentials_prompt){

                echo '
            
                <div class="login_form_error_div_cdER">
            
                    <p class="login_form_error_cdER"> '. $wrong_credentials_prompt . '</p>
                    <span class="error_x_button remove_error_prompt_cdER" id="remove_error_prompt_cdER">x</span>
    
                </div>
                ';

            }

            unset($_SESSION["errors_login_credentials"]);

        }  else if(isset($_GET['login']) && $_GET['login'] === "success"){
            echo '<p class="login_form_success"> Login Sucess</p>';
    
        }
    }



    function check_login_empty_field_errors(){

    if(isset($_SESSION["errors_login_empty"])){

        $empty_fields_errors = $_SESSION["errors_login_empty"];

        foreach($empty_fields_errors as $empty_fields_prompts){
            echo '
            
            <div class="login_form_error_div_emtfER">
        
                <p class="login_form_error_emtfER"> '. $empty_fields_prompts . '</p>
                <span class="error_x_button remove_error_prompt_emtfER" id="remove_error_prompt_emtfER">x</span>

            </div>
            ';

        }

        unset($_SESSION["errors_login_empty"]);

    }

    else if(isset($_GET['login']) && $_GET['login'] === "success"){
        echo '<p class="login_form_success"> Login Sucess</p>';

    }



}



  