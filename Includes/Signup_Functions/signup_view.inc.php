<?php 


declare(strict_types=1);


function signup_inputs(){


    if(isset($_SESSION["signup_data"]["firstname"]) && !isset($_SESSION["errors_signup"]["firstname_taken"])
    
    && isset($_SESSION["signup_data"]["lastname"])){


        // Return the Type Firstname
        echo ' <div class="input_box" id="sn_firstname_inp_div">

                    <input type="text" name="sn_firstname_inp"  class="input_norm" id="sn_firstname_inp" placeholder="" 
                    value="'.$_SESSION["signup_data"]["firstname"].'">
                    <label for="employee_inp" class="input_norm_lbl">Firstname</label>
                            
               </div>';



        echo ' <div class="input_box" id="sn_lastname_inp_div">

               <input type="text" name="sn_lastname_inp"  class="input_norm" id="sn_lastname_inp" placeholder=""
               value="'.$_SESSION["signup_data"]["lastname"].'">
               <label for="employee_inp" class="input_norm_lbl">Lastname</label>
                       
              </div>';
        

    }else{

        // LEAVE USERNAME AND LASTNAME EMPTY
        echo ' <div class="input_box" id="sn_username_inp_div">

                    <input type="text" name="sn_firstname_inp" class="input_norm" id="sn_firstname_inp" placeholder="" value="">
                    <label for="employee_inp" class="input_norm_lbl">Firstname</label>     

               </div>';

        echo ' <div class="input_box" id="sn_lastname_inp_div">

               <input type="text" name="sn_lastname_inp"  class="input_norm" id="sn_lastname_inp" placeholder="" value="">
               <label for="employee_inp" class="input_norm_lbl">Lastname</label>
                       
              </div>';
        

    }

    // RETURN THE EMAIL IF NOT WORK
    if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
   

        echo ' <div class="input_box" id="sn_email_inp_div">

                        <input type="text" name="sn_email_inp" class="input_norm" id="sn_email_inp" placeholder=""
                        value="'. $_SESSION["signup_data"]["email"].'">
                        <label for="email_inp" class="input_norm_lbl">Email</label>

              </div>';

    }else{
   
        echo ' <div class="input_box" id="sn_email_inp_div">

                <input type="text" name="sn_email_inp" class="input_norm" id="sn_email_inp" placeholder="" value="">
                <label for="email_inp" class="input_norm_lbl">Email</label>

              </div>';

   
    }


    echo '<div class="input_box" id="sn_password_inp_div">

            <input type="password" name="sn_password_inp" class="input_norm" id="sn_password_inp" placeholder="" value"">
            <label for="sn_password_inp" class="input_norm_lbl" >Password</label>
                            
          </div>';

   
 
   

}

function check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo '<br>';

        foreach ($errors as $error) {
            echo '<p class="form_error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<p class="form_success">Sign Up Success</p>';

        // Unset session data after successful signup to clear the form
        unset($_SESSION['signup_data']); // Clear the session data for firstname, lastname, and email
        unset($_SESSION['errors_signup']);
    }
}