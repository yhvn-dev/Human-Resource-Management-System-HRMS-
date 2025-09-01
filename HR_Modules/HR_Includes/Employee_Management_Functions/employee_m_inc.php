<?php



session_start();


require_once '../../../Includes/dbh.inc.php'; 


require_once 'employee_m_module.inc.php';
require_once 'employee_m_contr.inc.php';
require_once 'employee_m_view.inc.php';

require_once '../Jobseekers_Functions/db_jobseekers_model.inc.php';
require_once '../Jobseekers_Functions/db_jobseekers_contr.inc.php';



$jobseekers_id = $_POST["js_id_inp"] ?? $_GET['id'] ?? null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {


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

   
    $errors = [];
    $empl_id_errors = [];


    // Check for empty fields (skip this when only generating the ID)
    if (isset($_POST['generate_id_btn'])) {


        // Skip form validation for empty fields here because we're generating an ID

    } else {


        if (is_crem_form_empty($employee_id,$department, $role, $password)) {
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

        
      
        header("Location: ../../HR_HTML/create_employee_acc.php?id=$jobseekers_id&status=error");
        exit;


    }



    // Attempt to create the employee if no errors





    try {


        $jobseekers_id = (int)$jobseekers_id;

        create_employee($pdo, $employee_id, $first_name, $last_name, $middle_name, $email, $phone_number, $resume_path, $job_title, $department, $role, $password);



        delete_jobseekers($pdo, $jobseekers_id);


        $success_message["crem_form_sucess"] = "Employee Account Created Successfully!";
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
?>
