
<?php


function crem_input(){

    if(isset($_SESSION["crem_data"])){
      
        $crem_inputs = $_SESSION["crem_data"];
       
        echo '



        

             <div class="left_right_div left_create_div"    >
                                

                                                    <!-- EMPLOYEE ID -->
                                                    <div class="create_emp_acc_input_box employee_id_input_box">

                                                        <input type="text" class="employee_id_inp_class"  id="employee_id_inp" value="'.htmlspecialchars($crem_inputs["arr_p_employee_id"]) .'" name="employee_id_inp" placeholder="">
                                                        <label class="crem_lbl">Employee ID</label>
                                                        <button type="submit" id="generate_btn" name="generate_id_btn">
                                                        
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.6144 17.7956 11.492 15.7854C12.2731 13.9966 13.6789 12.5726 15.4325 11.7942L17.8482 10.7219C18.6162 10.381 18.6162 9.26368 17.8482 8.92277L15.5079 7.88394C13.7092 7.08552 12.2782 5.60881 11.5105 3.75894L10.6215 1.61673C10.2916.821765 9.19319.821767 8.8633 1.61673L7.97427 3.75892C7.20657 5.60881 5.77553 7.08552 3.97685 7.88394L1.63658 8.92277C.868537 9.26368.868536 10.381 1.63658 10.7219L4.0523 11.7942C5.80589 12.5726 7.21171 13.9966 7.99275 15.7854L8.8704 17.7956C9.20776 18.5682 10.277 18.5682 10.6144 17.7956ZM19.4014 22.6899 19.6482 22.1242C20.0882 21.1156 20.8807 20.3125 21.8695 19.8732L22.6299 19.5353C23.0412 19.3526 23.0412 18.7549 22.6299 18.5722L21.9121 18.2532C20.8978 17.8026 20.0911 16.9698 19.6586 15.9269L19.4052 15.3156C19.2285 14.8896 18.6395 14.8896 18.4628 15.3156L18.2094 15.9269C17.777 16.9698 16.9703 17.8026 15.956 18.2532L15.2381 18.5722C14.8269 18.7549 14.8269 19.3526 15.2381 19.5353L15.9985 19.8732C16.9874 20.3125 17.7798 21.1156 18.2198 22.1242L18.4667 22.6899C18.6473 23.104 19.2207 23.104 19.4014 22.6899Z"></path></svg>
                                                        
                                                        <span> Generate </span></button>
                                                    
                                                    </div>



                                                    <!--FIRST NAME  -->
                                                    <div class="create_emp_acc_input_box first_name_input_box">

                                                        <input type="text" readonly  class="first_name_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_firstname"] ).'" name="first_name_inp" placeholder="">
                                                        <label class="crem_lbl">First Name</label>
        
                                                 
                                                    </div>



                                                    <!-- LAST NAME -->
                                                    <div class="create_emp_acc_input_box last_name_input_box">

                                                        <input type="text" readonly  class="lastname_name_inp_class"  value="'.htmlspecialchars(   $crem_inputs["arr_p_lastname"] ).'"  name="last_name_inp" placeholder="">
                                                        <label class="crem_lbl">Last Name</label>
        
                                                        
                                                    </div>



                                                    <!-- MIDDLE INPUT -->
                                                    <div class="create_emp_acc_input_box middle_input_box">

                                                        <input type="text" readonly  class="middle_name_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_middlename"] ).'" name="middle_name_inp" placeholder="">
                                                        <label class="crem_lbl">Middle Name<label>

                                                    </div>



                                                         <!-- EMAIL -->
                                                    <div class="create_emp_acc_input_box email_input_box">

                                                        <input type="text" readonly  class="email_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_email"] ).'" name="email_inp" placeholder="">
                                                        <label class="crem_lbl" >Email</label>

                                                    </div>

                                            </div>




                                            <div class="left_right_div right_create_div">



                                                         <!-- PHONE NUMBER -->
                                                        <div class="create_emp_acc_input_box phone_number_input_box">

                                                            <input type="text" readonly  class="phone_number_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_phone_number"] ).'"  name="phone_number_inp" placeholder="">
                                                            <label class="crem_lbl" >Phone Number</label>

                                                        </div>

                                                


                                                        <!-- RESUME PATH -->
                                                        <div class="create_emp_acc_input_box resume_path_input_box">

                                                            <input type="text" readonly  class="resume_path_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_resume_path"] ).'"   name="resume_path_inp" placeholder="">
                                                            <label class="crem_lbl">Resume</label>

                                                        </div>      




                                                                <!-- JOB TITLE -->
                                                        <div class="create_emp_acc_input_box job_title_input_box">

                                                            <input type="text" readonly  class="job_title_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_job_title"] ).'"  name="job_title_inp" placeholder="">
                                                            <label class="crem_lbl" >Job Title</label>

                                                        </div>



                                                            <!-- DEPARTMENT -->
                                                        <div class="create_emp_acc_input_box department_input_box">

                                                            <input type="text" class="department_inp_class" value="'.htmlspecialchars(   $crem_inputs["arr_p_department"] ).'"  name="department_inp" placeholder="">
                                                            <label class="crem_lbl">Department</label>


                                                        </div>



                                                        
                                                            <!-- ROLE  -->
                                                        <div class="create_emp_acc_input_box role_input_box">

                                                            <select class="select_input select_role_inp_class" name="roles_inp" placeholder="">

                                                                <option value="' .htmlspecialchars(   $crem_inputs["arr_p_role"] ).'" disabled selected >Select Role</option>

                                                                <option  value="Employee" class="select_role_options" 
                                                                name="employee_inp">Employee</option>

                                                                <option value="HRR' .htmlspecialchars(   $crem_inputs["arr_p_role"] ).'"   class="select_role_options" 
                                                                name="hrr_inp" >HR Recruiter</option>     

                                                            </select>
                                                          
                                                        </div>




                                                            <!-- PASSWORD-->
                                                        <div class="create_emp_acc_input_box password_box">

                                                            <input type="password" class="department_inp_class"    name="password_inp" placeholder="">
                                                            <label class="crem_lbl">Password</label>

                                                        </div>



                                                
                                            </div>
        
        ';


        

        
    }else{


        echo '
        
        

             <div class="left_right_div left_create_div">
                                


                                                    <!-- EMPLOYEE ID -->
                                                    <div class="create_emp_acc_input_box employee_id_input_box">

                                                        <input type="text" class="employee_id_inp_class" name="employee_id_inp" placeholder="">
                                                        <label class="crem_lbl">Employee ID</label>
                                                        <button type="submit" id="generate_btn" name="generate_id_btn">
                                                        
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.6144 17.7956 11.492 15.7854C12.2731 13.9966 13.6789 12.5726 15.4325 11.7942L17.8482 10.7219C18.6162 10.381 18.6162 9.26368 17.8482 8.92277L15.5079 7.88394C13.7092 7.08552 12.2782 5.60881 11.5105 3.75894L10.6215 1.61673C10.2916.821765 9.19319.821767 8.8633 1.61673L7.97427 3.75892C7.20657 5.60881 5.77553 7.08552 3.97685 7.88394L1.63658 8.92277C.868537 9.26368.868536 10.381 1.63658 10.7219L4.0523 11.7942C5.80589 12.5726 7.21171 13.9966 7.99275 15.7854L8.8704 17.7956C9.20776 18.5682 10.277 18.5682 10.6144 17.7956ZM19.4014 22.6899 19.6482 22.1242C20.0882 21.1156 20.8807 20.3125 21.8695 19.8732L22.6299 19.5353C23.0412 19.3526 23.0412 18.7549 22.6299 18.5722L21.9121 18.2532C20.8978 17.8026 20.0911 16.9698 19.6586 15.9269L19.4052 15.3156C19.2285 14.8896 18.6395 14.8896 18.4628 15.3156L18.2094 15.9269C17.777 16.9698 16.9703 17.8026 15.956 18.2532L15.2381 18.5722C14.8269 18.7549 14.8269 19.3526 15.2381 19.5353L15.9985 19.8732C16.9874 20.3125 17.7798 21.1156 18.2198 22.1242L18.4667 22.6899C18.6473 23.104 19.2207 23.104 19.4014 22.6899Z"></path></svg>
                                                        
                                                        <span> Generate </span></button>
                                                    
                                                    </div>

                                                    <!--FIRST NAME  -->
                                                    <div class="create_emp_acc_input_box first_name_input_box">

                                                        <input type="text" class="first_name_inp_class" name="first_name_inp" placeholder="">
                                                        <label class="crem_lbl">First Name</label>
        
                                                 
                                                    </div>

                                                    <!-- LAST NAME -->
                                                    <div class="create_emp_acc_input_box last_name_input_box">

                                                        <input type="text"  class="lastname_name_inp_class"   name="last_name_inp" placeholder="">
                                                        <label class="crem_lbl">Last Name</label>
        
                                                        
                                                    </div>

                                                    <!-- MIDDLE INPUT -->
                                                    <div class="create_emp_acc_input_box middle_input_box">

                                                        <input type="text"  class="middle_name_inp_class" name="middle_name_inp" placeholder="">
                                                        <label class="crem_lbl">Middle Name<label>

                                                    </div>

                                                         <!-- EMAIL -->
                                                    <div class="create_emp_acc_input_box email_input_box">

                                                        <input type="text" class="email_inp_class"  name="email_inp" placeholder="">
                                                        <label class="crem_lbl" >Email</label>

                                                    </div>

                                            </div>



                                            <div class="left_right_div right_create_div">

                                                         <!-- PHONE NUMBER -->
                                                        <div class="create_emp_acc_input_box phone_number_input_box">

                                                            <input type="text"  class="phone_number_inp_class"  name="phone_number_inp" placeholder="">
                                                            <label class="crem_lbl" >Phone Number</label>

                                                        </div>

                                                
                                                        <!-- RESUME PATH -->
                                                        <div class="create_emp_acc_input_box resume_path_input_box">

                                                            <input type="text"  class="resume_path_inp_class"  name="resume_path_inp" placeholder="">
                                                            <label class="crem_lbl">Resume</label>

                                                        </div>      


                                                                <!-- JOB TITLE -->
                                                        <div class="create_emp_acc_input_box job_title_input_box">

                                                            <input type="text" class="job_title_inp_class" name="job_title_inp" placeholder="">
                                                            <label class="crem_lbl" >Job Title</label>

                                                        </div>

                                                            <!-- DEPARTMENT -->
                                                        <div class="create_emp_acc_input_box department_input_box">

                                                            <input type="text" class="department_inp_class" name="department_inp" placeholder="">
                                                            <label class="crem_lbl">Department</label>

                                                        </div>

                                                            <!-- ROLE  -->
                                                        <div class="create_emp_acc_input_box role_input_box">

                                                            <select class="select_input select_role_inp_class" name="roles_inp" placeholder="">

                                                                <option value="" disabled selected class="select_role_options"
                                                                >Select Role</option>

                                                                <option value="Employee"  class="select_role_options" 
                                                                name="employee_inp" >Employee</option>

                                                                <option value="HRR"  class="select_role_options" 
                                                                name="hrr_inp" >HR Recruiter</option>     

                                                            </select>
                                                          
                                                        </div>

                                                            <!-- PASSWORD-->
                                                        <div class="create_emp_acc_input_box password_box">

                                                            <input type="password" class="department_inp_class" name="password_inp" placeholder="">
                                                            <label class="crem_lbl">Password</label>

                                                        </div>

                                            </div>   
        ';

    }
}





function employee_prompt_success() {
    if (isset($_SESSION["fire_js_success"])) {
        $fire_succ = $_SESSION["fire_js_success"];

      
        $fire_succ_message = is_array($fire_succ) ? implode('<br>', $fire_succ) : $fire_succ;

        echo '<div class="success_div">
                <p class="form_success">' . $fire_succ_message . '</p>
                <span class="success_x_button remove_success_button_prompt" onclick="removeSuccessMessage(this)">x</span>
              </div>';

        unset($_SESSION["fire_js_success"]); 
    }

    if(isset($_SESSION["delete_js_success"])){
        $delete_succ = $_SESSION["delete_js_success"];

        $delete_succ_message = is_array($delete_succ) ? implode('<br>', $delete_succ) : $delete_succ;

            
        echo '<div class="success_div">
                <p class="form_success">' .  $delete_succ_message . '</p>
                <span class="success_x_button remove_success_button_prompt" onclick="removeSuccessMessage(this)">x</span>
              </div>';

        unset($_SESSION["delete_js_success"]); 

    }




}









function output_edit_emp_id(){

    if (isset($_SESSION["generated_employee_id"])) {
        $emp_id = $_SESSION["generated_employee_id"];
        
        echo '<div class="success_div">
        
                <p class="form_success">Generated Employee ID: ' . htmlspecialchars($emp_id) . '</p>
                <span class="success_x_button remove_success_button_prompt" onclick="removeSuccessMessage(this)">x</span>
              </div>';

        unset($_SESSION["generated_employee_id"]);

    }


}

function check_editem_for_errors() {
    if (isset($_SESSION['update_errors'])) {
        foreach ($_SESSION['update_errors'] as $error) {
            echo '<div class="error_div">
                     <p class="form_error">' . htmlspecialchars($error) . '</p>
                     <span class="error_x_button remove_error_prompt">x</span>
                  </div>';
        }
        unset($_SESSION['update_errors']);
    }

    if (isset($_SESSION['update_success'])) {
        echo '<div class="success_div">
                 <p class="form_success">' . htmlspecialchars($_SESSION['update_success']) . '</p>
                 <span class="success_x_button remove_success_button_prompt">x</span>
              </div>';
        unset($_SESSION['update_success']);
    }
}








function output_employee_id() {


    if (isset($_SESSION["generated_employee_id"])) {
        $emp_id = $_SESSION["generated_employee_id"];
        
        echo '<div class="success_div">
        
                <p class="form_success">Generated Employee ID: ' . htmlspecialchars($emp_id) . '</p>
                <span class="success_x_button remove_success_button_prompt" onclick="removeSuccessMessage(this)">x</span>
              </div>';

        unset($_SESSION["generated_employee_id"]);


    } elseif (isset($_SESSION["required_department_error"])) {
        $emp_dept = $_SESSION["required_department_error"];
        
        echo '<div class="dept_error_div">

            <p class="form_error">' . $emp_dept . '</p>
            <span class="error_x_button remove_error_prompt">x</span>

        </div>';  

        unset($_SESSION["required_department_error"]);


        
    }elseif (isset($_SESSION["empl_id_exist"])) {
    
        $errors  = is_array($_SESSION["empl_id_exist"]) ? $_SESSION["empl_id_exist"] : [$_SESSION["empl_id_exist"]];

        foreach ($errors as $error) {
            echo '<div class="error_div">
                     <p class="form_error">' . htmlspecialchars($error) . '</p>
                     <span class="error_x_button remove_error_prompt">x</span>
                  </div>';
        }


        unset($_SESSION["empl_id_exist"]);
       
    }



}




function check_crem_for_errors(){
    

if(isset($_SESSION["empty_fields"])){
        $errors = $_SESSION["empty_fields"];

        foreach($errors as $error){
            
            echo '<div class="error_div">

                     <p class="form_error">' . $error . '</p>
                     <span class="error_x_button remove_error_prompt">x</span>

                  </div>';  
        }

        unset($_SESSION["empty_fields"]);



    }else if (isset($_SESSION["crem_form_success"])) {
        $success_message = $_SESSION["crem_form_success"];

            foreach ($success_message as $success_message_prompt) {

                echo '<div class="success_div">
                          <p class="form_success">' . $success_message_prompt . ' </p>
                          <span class="success_x_button remove_success_button_prompt">x</span>
                      </div>';
            }
    
        unset($_SESSION["crem_data"]);
        unset($_SESSION["crem_form_success"]);

    }




}