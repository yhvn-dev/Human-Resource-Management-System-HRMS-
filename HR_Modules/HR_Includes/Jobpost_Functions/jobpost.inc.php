
<?php


session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $job_title = trim($_POST["jp_inp_job_title"] ?? '');
    $job_description = trim($_POST["jp_inp_job_descripton"] ?? '');
    $field_category = trim($_POST["jp_inp_job_field_category"] ?? '');
    $min_age = (int)trim($_POST["jp_inp_job_min_age"] ?? '');
    $max_age = (int)trim($_POST["jp_inp_job_max_age"] ?? '');
    $job_location = trim($_POST["jp_inp_job_location"] ?? '');
    $salary_range_from = (int)trim($_POST["jp_inp_salary_range_from"] ?? '');
    $salary_range_to = (int)trim($_POST["jp_inp_salary_range_to"] ?? '');
    $employment_type = trim($_POST["jp_inp_employment_type"] ?? '');
    $required_qualifications = trim($_POST["jp_inp_required_qualifications"] ?? '');
    $preferred_qualifications = trim($_POST["jp_inp_preferred_qualifications"] ?? '');
    $application_deadline = trim($_POST["jp_inp_applications_deadline"] ?? '');
    $posting_date = trim($_POST["jp_inp_posting_date"] ?? '');
    $contact_information = trim($_POST["jp_inp_contact_information"] ?? '');
    

  
    try {
        require '../../../Includes/dbh.inc.php';
        require 'jobpost_model.inc.php';
        require 'jobpost_view.inc.php';
        require 'jobpost_contr.inc.php';

        $errors = [];
        $age_comparison_errors = [];
        $salary_range_errors = [];
        $success_message = [];




        // Check if form is empty
        if (is_form_empty(
            $job_title,
            $job_description,
            $field_category,
            $min_age,
            $max_age,
            $job_location,
            $salary_range_from,
            $salary_range_to,
            $employment_type,
            $required_qualifications,
            $preferred_qualifications,
            $application_deadline,
            $posting_date,
            $contact_information
         
        )) {
            $errors["empty_input"] = "Fill in All Fields!";
        }



        
     
     
        $age_errors = validate_age_range($min_age, $max_age);
        $salary_errors = validate_salary_range($salary_range_from, $salary_range_to);
        
      

        if (!empty($age_errors)) {
            $age_comparison_errors ["age"] = implode(", ", $age_errors); // Convert array to string
        }
        if (!empty($salary_errors)) {
            $salary_range_errors ["salary"] = implode(", ", $salary_errors); // Convert array to string
        }
        

        if (!empty($errors)) {
            session_start();

            $_SESSION["salary"] = $salary_range_errors;
            $_SESSION["age"] = $age_comparison_errors;
            $_SESSION["jobpost_form_errors"] = $errors;
            $_SESSION["jobpost_form_data"] = [
                "arr_p_job_title" => $job_title,
                "arr_p_job_description" => $job_description,
                "arr_p_field_category" => $field_category,
                "arr_p_min_age" => $min_age,
                "arr_p_max_age" => $max_age,
                "arr_p_job_location" => $job_location,
                "arr_p_salary_range_from" => $salary_range_from,
                "arr_p_salary_range_to" => $salary_range_to,
                "arr_p_employment_type" => $employment_type,
                "arr_p_required_qualifications" => $required_qualifications,
                "arr_p_preferred_qualifications" => $preferred_qualifications,
                "arr_p_application_deadline" => $application_deadline,
                "arr_p_posting_date" => $posting_date,
                "arr_p_contact_information" => $contact_information
            ];
            header("Location: ../../HR_HTML/jobposting_form.php");
            die();
        }






        create_jobposts(
            $pdo,
            $job_title,
            $job_description,
            $field_category,
            $min_age,
            $max_age,
            $job_location,
            $salary_range_from,
            $salary_range_to,
            $employment_type,
            $required_qualifications,
            $preferred_qualifications,
            $application_deadline,
            $posting_date,
            $contact_information
            
        );

        $success_message[] = "Job post added successfully.";
      

        $_SESSION["jobpost_form_success"] = $success_message;
        header("Location: ../../HR_HTML/jobposting_form.php?=$jobpost_id&status=success");
        die();


    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

    
} else {
    header("Location: ../../HR_HTML/jobposting_form.php");
    die();
}

?>