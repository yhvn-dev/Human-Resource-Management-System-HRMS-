
<?php


function  add_jobpost_input(){

    if(isset($_SESSION["jobpost_form_data"])){
        $add_jp_inputs = $_SESSION["jobpost_form_data"];


        echo '

                <div class="add_jp_form">

                            <div class="num_validation_div">
                            
                            </div>

                                    <div class="jp_id_holder_main_div">

                                        <div class="id_input_holder">

                                                <input type="hidden"
                                                name="jp_id"
                                                class="jp_inp jp_inp_id"
                                                id="jp_inp_id" 
                                                value="<?php echo $jobpost_id ?>">

                                        </div>


                                    </div>
                                    

                                    <div class="two_sides_form left_form">


                                        <!-- JOB TITLE -->
                                        <div class="jp_input_box" id="jp_inp_jop_title_div" name="jp_inp_jop_title_div">

                                            <input type="text" value="'. htmlspecialchars($add_jp_inputs["arr_p_job_title"] ?? '') . '" class="jp_inp" id="jp_inp_job_title" name="jp_inp_job_title" placeholder="">
                                            <label for="jp_inp_job_title" class="jp_inp-lbl" id="jp_inp_job_title-lbl">Job Title</label>

                                        </div>

                                         <!-- JOB DESCRIPTION -->
                                         <div class="jp_input_box" id="jp_inp_job_descripton_div" name="jp_inp_job_descripton_div" >

                                            <textarea type="text" class="jp_inp" id="job_description" name="jp_inp_job_descripton" placeholder="">'.htmlspecialchars( $add_jp_inputs["arr_p_job_description"]??'').'</textarea>
                                            <label for="job_descripton" class="jp_inp-lbl" id="jp_inp_job_description-lbl">Job Description</label>

                                        </div>

                                        <!-- JOB FIELD CATEGORY-->
                                        <div class="jp_input_box" id="jp_job_field_category_div" name="jp_job_field_category_div">

                                            <input type="text" value="'. htmlspecialchars($add_jp_inputs["arr_p_field_category"] ?? '') . '" class="jp_inp" id="jp_inp_job_field_category" name="jp_inp_job_field_category" placeholder=" ">
                                            <label for="jp_inp_job_field_category" class="jp_inp-lbl" id="jp_job_field_category-lbl">Field Category</label>

                                        </div>


                                        <!-- JOB MINIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_min_age_div" name="jp_job_min_age_div">

                                            <input type="text" value="'. htmlspecialchars($add_jp_inputs["arr_p_min_age"] ?? '') . '"  class="jp_inp" id="jp_inp_job_min_age" name="jp_inp_job_min_age" placeholder=" ">
                                            <label for="jp_inp_job_min_age" class="jp_inp-lbl" id="jp_job_min_age-lbl">Minimum Age</label>

                                        </div>
                                    

                                        <!-- JOB MAXIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_max_age_div" name="jp_job_max_age_div">

                                            <input type="text"class="jp_inp" value="'. htmlspecialchars($add_jp_inputs["arr_p_max_age"] ?? '') . '" id="jp_inp_job_max_age" name="jp_inp_job_max_age" placeholder=" ">
                                            <label for="jp_inp_job_max_age" class="jp_inp-lbl" id="jp_job_max_age-lbl">Maximum Age</label>

                                        </div>

                                        <!-- JOB LOCATION-->
                                        <div class="jp_input_box" id="jp_job_location_div" name="jp_job_location_div">

                                            <input type="text" value="'. htmlspecialchars($add_jp_inputs["arr_p_job_location"] ?? '') . '"  class="jp_inp" id="jp_inp_job_location" name="jp_inp_job_location" placeholder=" ">
                                            <label for="jp_inp_job_location" class="jp_inp-lbl" id="jp_job_location-lbl">Job Location</label>

                                        </div>

                                    



                                    </div>

                                    <!-- right form --------------------------------------------------- -->
                                    <div class="two_sides_form right_form">


                                    <div class="both_salary_range_div">

                                            <!-- JOB SALARY RANGE || FROM -->
                                            <div class="jp_input_box" id="jp_salary_range_div_from" name="jp_salary_range_div_from" >

                                                <input type="text" value="'. htmlspecialchars($add_jp_inputs["arr_p_salary_range_from"] ?? '') . '"   class="jp_inp" id="jp_inp_salary_range_from" name="jp_inp_salary_range_from" placeholder=" ">
                                                <label for="jp_inp_salary_range_from" class="jp_inp-lbl" id="jp_salary_range-lbl_from">Salary Range - From: </label>

                                            </div>


                                            <!-- JOB SALARY RANGE || TO -->
                                            <div class="jp_input_box" id="jp_salary_range_div_to" name="jp_salary_range_div_to">

                                                <input type="text"  value="'. htmlspecialchars($add_jp_inputs["arr_p_salary_range_to"] ?? '') . '"  class="jp_inp" id="jp_inp_salary_range_to" name="jp_inp_salary_range_to" placeholder=" ">
                                                <label for="jp_inp_salary_range_to" class="jp_inp-lbl" id="jp_salary_range-lbl_to">Salary Range - To: </label>

                                            </div>


                                            </div>


                                            <!-- JOB EMPLOYMENT TYPE-->
                                            <div class="jp_input_box" id="jp_employment_type_div" name="jp_employment_type_div">


                                                     <select class="jp_inp" id="jp_inp_employment_type" name="jp_inp_employment_type">
                                                        <option value="" disabled selected>Select Employment Type</option>
                                                        <option value="Full-Time" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Full-Time" ? 'selected' : '') . '>Full-Time</option>
                                                        <option value="Part-Time" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Part-Time" ? 'selected' : '') . '>Part-Time</option>
                                                        <option value="Contract" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Contract" ? 'selected' : '') . '>Contract</option>
                                                        <option value="Temporary" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Temporary" ? 'selected' : '') . '>Temporary</option>
                                                        <option value="Internship" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Internship" ? 'selected' : '') . '>Internship</option>
                                                        <option value="Freelance" ' . (isset($add_jp_inputs["arr_p_employment_type"]) && $add_jp_inputs["arr_p_employment_type"] === "Freelance" ? 'selected' : '') . '>Freelance</option>
                                                    </select>


                                            </div>
                                            

                                            <!-- JOB REQUIRED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_required_qualifications_div" name="jp_required_qualifications_div">

                                                <input type="text"  value="'. htmlspecialchars($add_jp_inputs["arr_p_required_qualifications"] ?? '') . '"   class="jp_inp" id="jp_inp_required_qualifications" name="jp_inp_required_qualifications" placeholder=" ">
                                                <label for="jp_inp_required_qualifications" class="jp_inp-lbl" id="jp_required_qualifications-lbl">Required Qualitifcations</label>

                                            </div>

                                            <!-- JOB PREFERED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_preferred_qualifications_div" name="jp_preferred_qualifications_div">

                                                <input type="text"  value="'. htmlspecialchars($add_jp_inputs["arr_p_preferred_qualifications"] ?? '') . '"    class="jp_inp" id="jp_inp_preferred_qualifications" name="jp_inp_preferred_qualifications" placeholder=" ">
                                                <label for="jp_inp_preferred_qualifications" class="jp_inp-lbl" id="jp_preferred_qualifications-lbl">Preferred Qualitifcations</label>

                                            </div>

                                            
                                            <!-- JOB APLLICATION DEADLINE  -->
                                            <div class="jp_input_box" id="jp_applications_deadline_div" name="jp_applications_deadline_div">

                                                <input type="date"  value="'. htmlspecialchars($add_jp_inputs["arr_p_application_deadline"] ?? '') . '"  class="jp_inp" id="jp_inp_applications_deadline" name="jp_inp_applications_deadline" placeholder=" ">
                                                <label for="jp_inp_applications_deadline" class="jp_inp-lbl" id="jp_applications_deadline-lbl">Application Deadline</label>

                                            </div>

                                            <!-- JOB POSTING DATE -->
                                            <div class="jp_input_box" id="jp_posting_date_div" name="jp_posting_date_div">

                                                <input type="date"  value="'. htmlspecialchars($add_jp_inputs["arr_p_posting_date"] ?? '') . '"  class="jp_inp" id="jp_inp_posting_date" name="jp_inp_posting_date" placeholder=" ">
                                                <label for="jp_inp_posting_date" class="jp_inp-lbl" id="jp_posting_date-lbl">Posting Date</label>


                                            </div>

                                            <!-- JOB CONTACT INFORMATION-->
                                            <div class="jp_input_box" id="jp_contact_information_div" name="jp_contact_information_div">

                                                <input type="text"  value="'. htmlspecialchars($add_jp_inputs["arr_p_contact_information"] ?? '') . '"  class="jp_inp" id="jp_inp_contact_information" name="jp_inp_contact_information" placeholder=" ">
                                                <label for="jp_inp_contact_information" class="jp_inp-lbl" id="jp_contact_information-lbl">Contact Information</label>

                                            </div>
                                            
                                           
                                    </div>


                                
                                </div>

                                
                        
        
        ';


    }else{

        echo
        '
        
        <div class="add_jp_form">

                            <div class="num_validation_div">
                            
                            </div>

                                    <div class="jp_id_holder_main_div">

                                        <div class="id_input_holder">

                                                <input type="hidden"
                                                name="jp_id"
                                                class="jp_inp jp_inp_id"
                                                id="jp_inp_id" 
                                                value="<?php echo $jobpost_id ?>">

                                        </div>


                                    </div>
                                    

                                    <div class="two_sides_form left_form">


                                        <!-- JOB TITLE -->
                                        <div class="jp_input_box" id="jp_inp_jop_title_div" name="jp_inp_jop_title_div">

                                            <input type="text" class="jp_inp" id="jp_inp_job_title" name="jp_inp_job_title" placeholder=" ">
                                            <label for="jp_inp_job_title" class="jp_inp-lbl" id="jp_inp_job_title-lbl">Job Title</label>

                                        </div>

                                         <!-- JOB DESCRIPTION -->
                                         <div class="jp_input_box" id="jp_inp_job_descripton_div" name="jp_inp_job_descripton_div" >

                                            <textarea type="text" class="jp_inp" id="job_description" name="jp_inp_job_descripton" placeholder="">       
                                            </textarea>
                                            <label for="job_descripton" class="jp_inp-lbl" id="jp_inp_job_description-lbl">Job Description</label>

                                        </div>

                                        <!-- JOB FIELD CATEGORY-->
                                        <div class="jp_input_box" id="jp_job_field_category_div" name="jp_job_field_category_div">

                                            <input type="text" class="jp_inp" id="jp_inp_job_field_category" name="jp_inp_job_field_category" placeholder=" ">
                                            <label for="jp_inp_job_field_category" class="jp_inp-lbl" id="jp_job_field_category-lbl">Field Category</label>

                                        </div>


                                        <!-- JOB MINIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_min_age_div" name="jp_job_min_age_div">

                                            <input type="text"  class="jp_inp" id="jp_inp_job_min_age" name="jp_inp_job_min_age" placeholder=" ">
                                            <label for="jp_inp_job_min_age" class="jp_inp-lbl" id="jp_job_min_age-lbl">Minimum Age</label>

                                        </div>
                                    

                                        <!-- JOB MAXIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_max_age_div" name="jp_job_max_age_div">

                                            <input type="text"class="jp_inp" id="jp_inp_job_max_age" name="jp_inp_job_max_age" placeholder=" ">
                                            <label for="jp_inp_job_max_age" class="jp_inp-lbl" id="jp_job_max_age-lbl">Maximum Age</label>

                                        </div>

                                        <!-- JOB LOCATION-->
                                        <div class="jp_input_box" id="jp_job_location_div" name="jp_job_location_div">

                                            <input type="text"  class="jp_inp" id="jp_inp_job_location" name="jp_inp_job_location" placeholder=" ">
                                            <label for="jp_inp_job_location" class="jp_inp-lbl" id="jp_job_location-lbl">Job Location</label>

                                        </div>

                                    



                                    </div>

                                    <!-- right form --------------------------------------------------- -->
                                    <div class="two_sides_form right_form">


                                    <div class="both_salary_range_div">

                                            <!-- JOB SALARY RANGE || FROM -->
                                            <div class="jp_input_box" id="jp_salary_range_div_from" name="jp_salary_range_div_from" >

                                                <input type="text"  class="jp_inp" id="jp_inp_salary_range_from" name="jp_inp_salary_range_from" placeholder=" ">
                                                <label for="jp_inp_salary_range_from" class="jp_inp-lbl" id="jp_salary_range-lbl_from">Salary Range - From: </label>

                                            </div>


                                            <!-- JOB SALARY RANGE || TO -->
                                            <div class="jp_input_box" id="jp_salary_range_div_to" name="jp_salary_range_div_to">

                                                <input type="text"  class="jp_inp" id="jp_inp_salary_range_to" name="jp_inp_salary_range_to" placeholder=" ">
                                                <label for="jp_inp_salary_range_to" class="jp_inp-lbl" id="jp_salary_range-lbl_to">Salary Range - To: </label>

                                            </div>


                                            </div>


                                            <!-- JOB EMPLOYMENT TYPE-->
                                            <div class="jp_input_box" id="jp_employment_type_div" name="jp_employment_type_div">

                                               
                                                     <select class="jp_inp" id="jp_inp_employment_type" name="jp_inp_employment_type">
                                                        <option value="" disabled selected>Select Employment Type</option>
                                                        <option value="Full-Time">Full-Time</option>
                                                        <option value="Part-Time">Part-Time</option>
                                                        <option value="Contract">Contract</option>
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Internship">Internship</option>
                                                        <option value="Freelance">Freelance</option>
                                                    </select>
                                            </div>

                                            <!-- JOB REQUIRED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_required_qualifications_div" name="jp_required_qualifications_div">

                                                <input type="text" class="jp_inp" id="jp_inp_required_qualifications" name="jp_inp_required_qualifications" placeholder=" ">
                                                <label for="jp_inp_required_qualifications" class="jp_inp-lbl" id="jp_required_qualifications-lbl">Required Qualitifcations</label>

                                            </div>

                                            <!-- JOB PREFERED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_preferred_qualifications_div" name="jp_preferred_qualifications_div">

                                                <input type="text "   class="jp_inp" id="jp_inp_preferred_qualifications" name="jp_inp_preferred_qualifications" placeholder=" ">
                                                <label for="jp_inp_preferred_qualifications" class="jp_inp-lbl" id="jp_preferred_qualifications-lbl">Preferred Qualitifcations</label>

                                            </div>

                                            
                                            <!-- JOB APLLICATION DEADLINE  -->
                                            <div class="jp_input_box" id="jp_applications_deadline_div" name="jp_applications_deadline_div">

                                                <input type="date"  class="jp_inp" id="jp_inp_applications_deadline" name="jp_inp_applications_deadline" placeholder=" ">
                                                <label for="jp_inp_applications_deadline" class="jp_inp-lbl" id="jp_applications_deadline-lbl">Application Deadline</label>

                                            </div>

                                            
                                            <!-- JOB POSTING DATE -->
                                            <div class="jp_input_box" id="jp_posting_date_div" name="jp_posting_date_div">

                                                <input type="date" class="jp_inp" id="jp_inp_posting_date" name="jp_inp_posting_date" placeholder=" ">
                                                <label for="jp_inp_posting_date" class="jp_inp-lbl" id="jp_posting_date-lbl">Posting Date</label>

                                            </div>

                                            <!-- JOB CONTACT INFORMATION-->
                                            <div class="jp_input_box" id="jp_contact_information_div" name="jp_contact_information_div">

                                                <input type="text"  class="jp_inp" id="jp_inp_contact_information" name="jp_inp_contact_information" placeholder=" ">
                                                <label for="jp_inp_contact_information" class="jp_inp-lbl" id="jp_contact_information-lbl">Contact Information</label>

                                            </div>
                                            
                                           
                                    </div>


                                
                                </div>












        
        
        ';



    }





}


function check_salary_errors(){

    if (isset($_SESSION["salary"])) { 
        $age_errors = $_SESSION["salary"];

        foreach ($age_errors as $error) {

            echo '<div class="age_error_div">

                     <p class="age_form_error">' . $error . '</p>
                     <span class="error_x_button age_remove_error_prompt">x</span>

                  </div>';
        }

        unset($_SESSION["salary"]); 
    }


   }



   function check_delete_success() {
    if (isset($_SESSION["success_delete"])) {
        $success_delete = $_SESSION["success_delete"];

        // Ensure $success_delete is an array
        if (is_array($success_delete)) {
            foreach ($success_delete as $success) {
                echo '<div class="success_div"">
                          <p class="form_success">' . htmlspecialchars($success) . '</p>
                          <span class="success_x_button remove_success_button_prompt">x</span>
                      </div>';
            }
        } else {
          
            echo '<div class="success_div"">
                      <p class="form_success">' . htmlspecialchars($success_delete) . '</p>
                      <span class="success_x_button remove_success_button_prompt">x</span>
                  </div>';
        }

        // Clear the session message after displaying it
        unset($_SESSION["success_delete"]);
    }
}





// CHECK AGE ERRORS ------------------------------
function check_age_errors() {

    if (isset($_SESSION["age"])) { 
        $age_errors = $_SESSION["age"];

        foreach ($age_errors as $error) {

            echo '<div class="age_error_div">

                     <p class="age_form_error">' . $error . '</p>
                     <span class="error_x_button age_remove_error_prompt">x</span>

                  </div>';
        }

        unset($_SESSION["age"]); 
    }
}







// CHECK JP FORM ERRORS ------------------------------
function check_jp_form_errors(){

    if(isset($_SESSION["jobpost_form_errors"])){
        $errors = $_SESSION["jobpost_form_errors"];

        foreach($errors as $error){
            
            echo '<div class="error_div">

                     <p class="form_error">' . $error . '</p>
                     <span class="error_x_button remove_error_prompt">x</span>

                  </div>';  
        }

        unset($_SESSION["jobpost_form_errors"]);



    }else if (isset($_SESSION["jobpost_form_success"])) {
        $success_message = $_SESSION["jobpost_form_success"];

        if (!empty($success_message) && is_array($success_message)) {
            foreach ($success_message as $success_message_prompt) {

                echo '<div class="success_div">
                          <p class="form_success">' . $success_message_prompt . ' </p>
                          <span class="success_x_button remove_success_button_prompt">x</span>
                      </div>';
            }
        }
        unset($_SESSION["jobpost_form_data"]);
        unset($_SESSION["jobpost_form_success"]);

    }


}





?>


<script src="../../HR_JS/error_handling.js"></script>






