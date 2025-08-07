<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php">
</head>
        <body>

                    <!-- LEFT FORM -->

                            <!-- JOB TITLE -->
                            <div class="jp_input_box" id="jp_inp_jop_title_div" name="jp_inp_jop_title_div">

                                <input type="text" class="jp_inp" id="jp_inp_job_title" name="jp_inp_job_title" placeholder=" ">
                                <label for="jp_inp_job_title" class="jp_inp-lbl" id="jp_inp_job_title-lbl">Job Title</label>

                            </div>

                            
                            <!-- JOB DESCRIPTION -->
                            <div class="jp_input_box" id="jp_inp_job_descripton_div" name="jp_inp_job_descripton_div">

                                <input type="text" class="jp_inp" id="jp_inp_job_descripton" name="jp_inp_job_descripton" placeholder=" ">
                                <label for="jp_inp_job_descripton" class="jp_inp-lbl" id="jp_inp_job_description-lbl">Job Description</label>

                            </div>

                            <!-- JOB FIELD CATEGORY-->
                            <div class="jp_input_box" id="jp_job_field_category_div" name="jp_job_field_category_div">
                                
                                <input type="text" class="jp_inp" id="jp_job_field_category" name="jp_job_field_category" placeholder=" ">
                                <label for="jp_job_field_category" class="jp_inp-lbl" id="jp_job_field_category-lbl">Field Category</label>

                            </div>


                            <!-- JOB MINIMUM AGE-->
                            <div class="jp_input_box" id="jp_job_min_age_div" name="jp_job_min_age_div">

                                <input type="text" class="jp_inp" id="jp_job_min_age" name="jp_job_min_age" placeholder=" ">
                                <label for="jp_job_min_age" class="jp_inp-lbl" id="jp_job_min_age-lbl">Minimum Age</label>

                            </div>


                            <!-- JOB MAXIMUM AGE-->
                            <div class="jp_input_box" id="jp_job_max_age_div" name="jp_job_max_age_div">

                                <input type="text" class="jp_inp" id="jp_job_max_age" name="jp_job_max_age" placeholder=" ">
                                <label for="jp_job_max_age" class="jp_inp-lbl" id="jp_job_max_age-lbl">Minimum Age</label>

                            </div>



                            <!-- JOB LOCATION-->
                            <div class="jp_input_box" id="jp_job_location_div" name="jp_job_location_div">

                                <input type="text" class="jp_inp" id="jp_job_location" name="jp_job_location" placeholder=" ">
                                <label for="jp_job_location" class="jp_inp-lbl" id="jp_job_location-lbl">Job Location</label>

                            </div>


                            <!-- JOB EMPLOYMENT TYPE-->
                            <div class="jp_input_box" id="jp_employment_type_div" name="jp_employment_type_div">

                                <input type="text" class="jp_inp" id="jp_employment_type" name="jp_employment_type" placeholder=" ">
                                <label for="jp_employment_type" class="jp_inp-lbl" id="jp_employment_type-lbl">Employment Type</label>

                            </div>



                    <!-- RIGHT FORM -->


                      
                                    
                                <!-- JOB SALARY RANGE-->
                                <div class="jp_input_box" id="jp_salary_range_div" name="jp_salary_range_div">

                                    <input type="text" class="jp_inp" id="jp_salary_range" name="jp_salary_range" placeholder=" ">
                                    <label for="jp_salary_range" class="jp_inp-lbl" id="jp_salary_range-lbl">Salary Range</label>

                                </div>

                                <!-- JOB REQUIRED QUALIFICATIONS-->
                                <div class="jp_input_box" id="jp_required_qualifications_div" name="jp_required_qualifications_div">

                                    <input type="text" class="jp_inp" id="jp_required_qualifications" name="jp_required_qualifications" placeholder=" ">
                                    <label for="jp_required_qualifications" class="jp_inp-lbl" id="jp_required_qualifications-lbl">Required Qualitifcations</label>

                                </div>

                                <!-- JOB PREFERED QUALIFICATIONS-->
                                <div class="jp_input_box" id="jp_preferred_qualifications_div" name="jp_preferred_qualifications_div">
                                    
                                    <input type="text" class="jp_inp" id="jp_preferred_qualifications" name="jp_preferred_qualifications" placeholder=" ">
                                    <label for="jp_preferred_qualifications" class="jp_inp-lbl" id="jp_preferred_qualifications-lbl">Preferred Qualitifcations</label>

                                </div>

                                <!-- JOB APLLICATION DEADLINE -->
                                <div class="jp_input_box" id="jp_applications_deadline_div" name="jp_applications_deadline_div">

                                    <input type="text" class="jp_inp" id="jp_applications_deadline" name="jp_applications_deadline" placeholder=" ">
                                    <label for="jp_applications_deadline" class="jp_inp-lbl" id="jp_applications_deadline-lbl">Application Deadline</label>

                                </div>

                                <!-- JOB POSTING DATE -->
                                <div class="jp_input_box" id="jp_posting_date_div" name="jp_posting_date_div">

                                    <input type="text" class="jp_inp" id="jp_posting_date" name="jp_posting_date" placeholder=" ">
                                    <label for="jp_posting_date" class="jp_inp-lbl" id="jp_posting_date-lbl">Posting Date</label>

                                </div>

                                <!-- JOB CONTACT INFORMATION-->
                                <div class="jp_input_box" id="jp_contact_information_div" name="jp_contact_information_div">

                                    <input type="text" class="jp_inp" id="jp_contact_information" name="jp_contact_information" placeholder=" ">
                                    <label for="jp_contact_information" class="jp_inp-lbl" id="jp_contact_information-lbl">Contact Information</label>

                                </div>

                                
                            <div class="jp_button_form_div">
                            
                                <!-- <button class="jp_form_buttons" id="edit_jobpost">Edit</button> -->
                                <button class="jp_form_buttons" id="add_jobpost">Add</button>
                                <!-- <button class="jp_form_buttons" id="delete_jobpost">Delete</button> -->

                            </div>

                  
                            <?php add_jobpost_input() ?>


        </body>
</html>

























































<div class="left_right_div left_create_div">



    <!-- EMPLOYEE ID -->
    <div class="create_emp_acc_input_box employee_id_input_box">

        <input type="text" class="employee_id_inp_class" value="NL" name="employee_id_inp" placeholder="">
        <label class="crem_lbl">Employee ID</label>
    
    </div>

    <!--FIRST NAME  -->
    <div class="create_emp_acc_input_box first_name_input_box">

        <input type="text" value="<?php echo $first_name ?>" class="first_name_inp_class" name="first_name_inp" placeholder="">
        <label class="crem_lbl">First Name</label>

 
    </div>

    <!-- LAST NAME -->
    <div class="create_emp_acc_input_box last_name_input_box">

        <input type="text" value="<?php echo $last_name ?>" class="lastname_name_inp_class" name="last_name_inp" placeholder="">
        <label class="crem_lbl">Last Name</label>

        
    </div>

    <!-- MIDDLE INPUT -->
    <div class="create_emp_acc_input_box middle_input_box">

        <input type="text" value=" <?php echo $middle_name ?>" class="middle_name_inp_class" name="middle_name_inp" placeholder="">
        <label class="crem_lbl">Middle Name<label>

    </div>

         <!-- EMAIL -->
    <div class="create_emp_acc_input_box email_input_box">

        <input type="text" value="<?php echo $email?>" class="email_inp_class"  name="email_inp" placeholder="">
        <label class="crem_lbl" >Email</label>

    </div>

</div>



<div class="left_right_div right_create_div">

         <!-- PHONE NUMBER -->
        <div class="create_emp_acc_input_box phone_number_input_box">

            <input type="text" value="<?php echo $phone_number ?>"  class="phone_number_inp_class"  name="phone_number_inp" placeholder="">
            <label class="crem_lbl" >Phone Number</label>

        </div>


        <!-- RESUME PATH -->
        <div class="create_emp_acc_input_box resume_path_input_box">

            <input type="text" value="<?php echo $resume_path?>" class="resume_path_inp_class"  name="resume_path_inp" placeholder="">
            <label class="crem_lbl">Resume</label>

        </div>      


                <!-- JOB TITLE -->
        <div class="create_emp_acc_input_box job_title_input_box">

            <input type="text" value="<?php echo $job_title ?>"  class="job_title_inp_class" name="job_title_inp" placeholder="">
            <label class="crem_lbl" >Job Title</label>

        </div>

            <!-- DEPARTMENT -->
        <div class="create_emp_acc_input_box department_input_box">

            <input type="text" class="department_inp_class" name="department_inp" placeholder="">
            <label class="crem_lbl">Department</label>

        </div>

            <!-- ROLE  -->
        <div class="create_emp_acc_input_box role_input_box">

            <select class="select_input select_role_inp_class" placeholder="">

                <option value="Select Role" class="select_role_options"
                name="select_inp" >Select Role</option>

                <option value="Employee"  class="select_role_options" 
                name="employee_inp">Employee</option>

                <option value="HRR"  class="select_role_options" 
                name="hrr_inp" >HRR</option>     

            </select>
          
        </div>

            <!-- PASSWORD-->
        <div class="create_emp_acc_input_box password_box">

            <input type="password" class="department_inp_class" name="password_inp" placeholder="">
            <label class="crem_lbl">Password</label>

        </div>

            <!-- ACCOUNT STATUS -->
       


</div>




<form action="" class="filter_form" method="POST">

<select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

    <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

    <option value="draft" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'draft') ? 'selected' : '' ?>>Draft</option>

    <option value="published" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'published') ? 'selected' : '' ?>>Publish</option>


</select>

</form>



 
$filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';



if ($filter_status !== 'none') {
                                            $jobseekers = array_filter($jobseekers, function($js) use ($filter_status) {
                                                return isset($js['status']) && strtolower(trim($js['status'])) === strtolower(trim($filter_status));
                                            });
                                        }







session_start();

// Include the database connection
require_once '../../../Includes/dbh.inc.php';  // This already provides $pdo

require_once 'employee_m_module.inc.php';
require_once 'employee_m_contr.inc.php';
require_once 'employee_m_view.inc.php';

$jobseekers_id = $_POST["js_id_inp"] ?? $_GET['id'] ?? null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {



    
    // If the 'Generate ID' button is clicked
    if (isset($_POST['generate_id_btn'])) {
        $department = trim($_POST['department_inp'] ?? '');

        // Check if the department field is not empty
        if (!empty($department)) {
            try {
                // Generate department prefix (first 3 letters of the department)
                $department_prefix = strtoupper(substr($department, 0, 3)); // First 3 letters
    
                // Fetch the maximum ID for the department from the database
                $query = $pdo->prepare("SELECT MAX(CAST(SUBSTRING(employee_id, LENGTH(:prefix) + 1) AS UNSIGNED)) AS max_id
                    FROM employees_
                    WHERE employee_id LIKE :prefix_pattern");
    
                $query->execute([
                    'prefix' => $department_prefix,
                    'prefix_pattern' => $department_prefix . '%',
                ]);
    
                $max_id = $query->fetchColumn();
                $new_id_number = $max_id ? $max_id + 1 : 1;
                $generated_id = $department_prefix . str_pad($new_id_number, 4, '0', STR_PAD_LEFT); // Generate new ID
    
                // Store the generated ID in the session
                $_SESSION['generated_employee_id'] = $generated_id;

            } catch (PDOException $e) {
                die("Database Error: " . $e->getMessage());
            }
        } else {

            // Set error message if department is empty
            $_SESSION['required_department_error'] = "Department is required to generate an ID.";
        }
       

        header("Location: ../../HR_HTML/create_employee_acc.php?id=$jobseekers_id&status=error");
        exit;
    }



    // Proceed with other form processing (creating employee record)
    $employee_id = trim($_POST["employee_id_inp"] ?? '');
    $first_name = trim($_POST["first_name_inp"] ?? '');
    $last_name = trim($_POST["last_name_inp"] ?? '');
    $middle_name = trim($_POST["middle_name_inp"] ?? '');
    $email = trim($_POST["email_inp"] ?? '');
    $phone_number = trim($_POST["phone_number_inp"] ?? '');
    $resume_path = trim($_POST['resume_path_inp'] ?? '');
    $job_title = trim($_POST['job_title_inp'] ?? '');
    $department = trim($_POST['department_inp'] ?? '');
    $role = trim($_POST['roles_inp'] ?? '');
    $password = trim($_POST['password_inp'] ?? '');

    if (empty($jobseekers_id)) {
        $errors['jobseeker_details_missing'] = "Job Seeker's details are missing.";
        $_SESSION["crem_errors"] = $errors;
        header("Location: ../../HR_HTML/create_employee_acc.php?id=$jobseekers_id&status=error");
        exit;
    }


    // Initialize errors array
    $errors = [];
    $empl_id_errors = [];


    // Check for empty fields (skip this when only generating the ID)
    if (isset($_POST['generate_id_btn'])) {


        // Skip form validation for empty fields here because we're generating an ID



    } else {


        if (is_crem_form_empty($employee_id, $first_name, $last_name, $email, $resume_path, $job_title, $department, $role, $password)) {
            $errors["empty_fields"] = "Fill In All Fields";
        }


        
        // Check if Employee ID exists
        if (is_employee_id_exist($pdo, $employee_id)) {
            $empl_id_errors["empl_id_exist"] = "Employee ID Already Exists, Use A New ID";
        }
    }



    // Merge errors if anyZ
    if (!empty($empl_id_errors)) {
        $errors = array_merge($errors, $empl_id_errors);
    }
    


    // If there are errors, redirect back with errors
    if (!empty($errors)) {
        
        $_SESSION["empl_id_exist"] = $empl_id_errors;
        $_SESSION["empty_fields"] = $errors;
        $_SESSION["crem_data"] = [
            "arr_p_employee_id" => $generated_id,
            "arr_p_firstname" => $first_name,
            "arr_p_lastname" => $last_name,
            "arr_p_middlename" => $middle_name,
            "arr_p_email" => $email,
            "arr_p_phone_number" => $phone_number,
            "arr_p_resume_path" => $resume_path,
            "arr_p_job_title" => $job_title,
            "arr_p_department" => $department,
            "arr_p_role" => $role,
            "arr_p_password" => $password,
            "arr_p_id" => $jobseekers_id
        ];

        
        // Redirect back with errors
        header("Location: ../../HR_HTML/create_employee_acc.php?id=$jobseekers_id&status=error");
        exit;
    }

    // Attempt to create the employee if no errors
    try {
        $jobseekers_id = (int)$jobseekers_id;

        create_employee($pdo, $employee_id, $first_name, $last_name, $middle_name, $email, $phone_number, $resume_path, $job_title, $department, $role, $password);

        $success_message["cren_form_sucess"] = "Employee Account Created Successfully!";
        $_SESSION["crem_form_success"] = $success_message;
        header("Location: ../../HR_HTML/recruitment_dashboard.php?id=$jobseekers_id&status=success");
        exit;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    if ($jobseekers_id === null) {
        header("Location: ../../HR_HTML/dashboard.php");
        exit;
    }
}






