<?php 




function apply_inputs() {

  
    // Check if the session data for inputs exists
    if (isset($_SESSION["apply_data"])) {
        $apply_data = $_SESSION["apply_data"];

           
        // First Name
        echo '<div class="jps_rows row_1_jps_form">

        
                <div class="jp_apply_parent_form_input_box full_name_input_box">


                    <div class="jp_apply_form_input_box firstname">
                        <input 

                            class="apply_form_inp af_firstname_inp"
                            name="af_firstname_inpn"
                            id="af_firstname_inpn"
                            placeholder=" "
                            value="' . htmlspecialchars($apply_data["arr_p_firstname"] ?? '') . '">
                        <label for="af_firstname_inpn" class="jp_af_label" id="jp_af_fname_lbl" >Firstname</label>
                    </div>';
        
             
        // Last Name
        echo '<div class="jp_apply_form_input_box lastname">
                    <input 
                        class="apply_form_inp af_lastname_inp"
                        name="af_lastname_inpn"
                        id="af_lastname_inpn"
                        placeholder=" "
                        value="' . htmlspecialchars($apply_data["arr_p_lastname"] ?? '') . '">
                    <label for="af_lastname_inpn" class="jp_af_label" id="jp_af_lname_lbl" >Lastname</label>
                </div>';

        // Middle Name
        echo '<div class="jp_apply_form_input_box middle_name">
                    <input 
                        class="apply_form_inp af_middlename_inp"
                        name="af_middlename_inpn"
                        id="af_middlename_inpn"
                        placeholder=" "
                        value="' . htmlspecialchars($apply_data["arr_p_middlename"] ?? '') . '">
                    <label for="af_middlename_inpn" class="jp_af_label" id="jp_af_mname_lbl" >Middlename</label>
                </div>
            </div>

             
        </div>';


        

        // Contact Information Section (Email and Phone Number)
        echo '<div class="jps_rows row_2_jps_form">

                <div class="jp_apply_parent_form_input_box contact_information">
          
                    <div class="jp_apply_form_input_box email">
                        <input 
                            class="apply_form_inp af_email_inp"
                            name="af_email_inpn"
                            id="af_email_inpn"
                            placeholder=" "
                            value="' . htmlspecialchars($apply_data["arr_p_email"] ?? '') . '"> 
    
                        <label for="af_email_inpn" class="jp_af_label" id="jp_af_email_lbl" >Email</label>
                        
                    </div>';


                 
    
        // Phone Number
        echo      
                    '<div class="jp_apply_form_input_box phone_number"> 
                            <input 
                                class="apply_form_inp af_phone_num_inp"
                                name="af_phone_num_inpn"
                                id="af_phone_num_inpn"
                                placeholder=" "
                                value="' . htmlspecialchars($apply_data["arr_p_phone_number"] ?? '') . '">
                            <label for="af_phone_num_inpn" class="jp_af_label" id="jp_af_pnum_lbl">Phone Number</label>
                    </div>
                    
                </div>

            
        </div>';
            
        // end of row 2


        // Upload Resume Section
        echo '<div class="jps_rows row_3_jps_form">
                <div class="upload_resume">
                    <label for="af_resume_inpn" class="jp_af_label" id="upl_resume_lbl">Upload Your Resume/CV</label>
                    <input type="file"
                        class="apply_form_inp af_resume_inp"
                        name="af_resume_inpn"
                        id="af_resume_inpn"
                        value="'. htmlspecialchars($apply_data["arr_p_resume_path"] ?? '' ). '"  
                        accept=".pdf,.doc,.docx"
                        placeholder="">
                        
                </div>
            </div>';

        // Cover Letter Section
        echo '<div class="jps_rows row_4_jps_form">
                <div class="jp_apply_form_input_box cover_letter">
                    <textarea type="text"
                        class="apply_form_inp af_cl_inp"
                        name="af_cl_inpn"
                        id="af_cl_inpn"
                        placeholder=" ">' . htmlspecialchars($apply_data["arr_p_cover_letter"] ?? '') . '</textarea>
                    <label for="af_cl_inpn" class="jp_af_label" id="cl_label">Add Your Personalize Cover Letter</label>
                </div>
            </div>';

        // Additional Question Section
        echo '<div class="jps_rows row_5_jps_form">
                <div class="question_div"> 
                    <span class="addit_questions_que">What makes you suitable for this job</span>
                </div>
                <div class="jp_apply_form_input_box additional_questions">
                    <textarea type="text"
                        name="af_questions_inpn"
                        id="af_questions_inpn"
                        placeholder=" ">' . htmlspecialchars($apply_data["arr_p_additional_question"] ?? '') . '</textarea>
                    <label for="af_questions_inpn" id="addit_que_label">Add The Question About What Makes You Suitable To The Job</label>
                </div>
                
            </div>';

            
    } else {

        // Empty fields when no session data exists
        echo '<div class="jps_rows row_1_jps_form">

                <div class="jp_apply_parent_form_input_box full_name_input_box">
                    <div class="jp_apply_form_input_box firstname">
                        <input class="apply_form_inp af_firstname_inp" name="af_firstname_inpn" id="af_firstname_inpn" placeholder=" ">
                        <label for="af_firstname_inpn" class="jp_af_label" id="jp_af_fname_lbl">Firstname</label>
                    </div>

                    <div class="jp_apply_form_input_box lastname">
                        <input class="apply_form_inp af_lastname_inp" name="af_lastname_inpn" id="af_lastname_inpn" placeholder=" ">
                        <label for="af_lastname_inpn" class="jp_af_label" id="jp_af_lname_lbl">Lastname</label>
                    </div>

                    <div class="jp_apply_form_input_box middle_name">
                        <input class="apply_form_inp af_middlename_inp" name="af_middlename_inpn" id="af_middlename_inpn" placeholder=" ">
                        <label for="af_middlename_inpn" class="jp_af_label" id="jp_af_mname_lbl">Middlename</label>
                    </div>
                </div>
            </div>';

      


        echo '<div class="jps_rows row_2_jps_form">


                <div class="jp_apply_parent_form_input_box contact_information">
                    <div class="jp_apply_form_input_box email">
                        <input class="apply_form_inp af_email_inp" name="af_email_inpn" id="af_email_inpn" placeholder=" ">
                        <label for="af_email_inpn" class="jp_af_label" id="jp_af_email_lbl">Email</label>
                    </div>


                    <div class="jp_apply_form_input_box phone_number">
                        <input class="apply_form_inp af_phone_num_inp" name="af_phone_num_inpn" id="af_phone_num_inpn" placeholder=" ">
                        <label for="af_phone_num_inpn" class="jp_af_label" id="jp_af_pnum_lbl" >Phone Number</label>
                    </div>
                </div>

                  

            </div>';

        echo '<div class="jps_rows row_3_jps_form">
                <div class="upload_resume">
                    <span for="af_resume_inpn" class="jp_af_label" id="upl_resume_lbl">Upload Your Resume/CV</span>
                    <input type="file" class="apply_form_inp af_resume_inp" name="af_resume_inpn" id="af_resume_inpn" accept=".pdf,.doc,.docx" placeholder=" ">
                </div>
            </div>';



        echo '<div class="jps_rows row_4_jps_form">
                <div class="jp_apply_form_input_box cover_letter">
                    <textarea type="text" class="apply_form_inp af_cl_inp" name="af_cl_inpn" id="af_cl_inpn" placeholder=" "></textarea>
                    <label for="af_cl_inpn" class="jp_af_label" id="cl_label">Add Your Personalize Cover Letter</label>
                </div>
            </div>';



            
        echo '<div class="jps_rows row_5_jps_form">
                <div class="question_div"> 
                    <span class="addit_questions_que">What makes you suitable for this job?</span>
                </div>
                <div class="jp_apply_form_input_box additional_questions">
                    <textarea type="text" name="af_questions_inpn" class="af_questions_inp" id="af_questions_inpn" placeholder=" "></textarea>

                  
                    <label for="af_questions_inpn" class="addit_que_label" id="addit_que_label"> What Makes You Suitable To The Job</label>

               
                </div>
            </div>';
    }


}



function check_application_success() {
    if (isset($_SESSION["apply_form_success"])) {
        $success_message = $_SESSION["apply_form_success"];

        if (!empty($success_message)) {
            echo '<div class="success_div">
                    <p class="form_success">' . htmlspecialchars($success_message) . '</p>
                    <span class="success_x_button remove_success_button_prompt">x</span>
                  </div>';
        }

        unset($_SESSION["apply_form_success"]);
        
    }


        unset($_SESSION["apply_data"], $_SESSION["apply_errors"]);

}


function check_af_form_errors(){
    if (isset($_SESSION["apply_errors"])) {

        $errors = $_SESSION["apply_errors"];
        foreach($errors as $error) {
       

            echo '<div class="error_div">
                        <p class="form_error">' . $error . '</p>
                        <span class="error_x_button remove_error_prompt">x</span>
                  </div>';
        }
        
        unset($_SESSION['apply_errors']);   

    }
}





function check_post_success(){


    if (isset($_SESSION["post_sucess"])) {
        $success_post_message = $_SESSION["post_sucess"];

        if (!empty($success_post_message)) {
            echo '<div class="success_div">
                    <p class="form_success">' . htmlspecialchars( $success_post_message) . '</p>
                    <span class="success_x_button remove_success_button_prompt">x</span>
                  </div>';
        }




        unset($_SESSION["post_sucess"]);
    }

}



?>