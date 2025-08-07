

<?php


session_start();


// Retrieve the id (previously jobpost_id) from the POST data or URL (if it's not POST)
$jobpost_id = $_POST["apply_form_id_holder"] ?? $_GET['id'] ?? null;



if ($_SERVER["REQUEST_METHOD"] === "POST") {
  

    $firstname = trim($_POST["af_firstname_inpn"] ?? '');
    $lastname = trim($_POST["af_lastname_inpn"] ?? '');
    $middlename = trim($_POST["af_middlename_inpn"] ?? '');
    $email = trim($_POST["af_email_inpn"] ?? '');
    $phone_number = trim($_POST["af_phone_num_inpn"] ?? '');
    $resume = $_FILES['af_resume_inpn'] ?? null;
    $cover_letter = trim($_POST["af_cl_inpn"] ?? '');
    $additional_question = trim($_POST["af_questions_inpn"] ?? '');
    $jobpost_id = $_POST['apply_form_id_holder'] ?? $_GET['id'] ?? null;
    $job_title = $_POST['apply_form_job_title_holder'] ?? $_GET['job_title'] ?? null;


    // var_dump($jobpost_id, $job_title);

    




    require_once '../../../Includes/dbh.inc.php';
        // require_once '../../../Includes/config_session.inc.php';
        // require_once '../../../Includes/config_session.inc.php';
    require_once 'jobpost_apply_model.inc.php';
    require_once 'jobpost_apply_contr.inc.php';
    require_once 'jobpost_apply_view.inc.php';



   
    $errors = [];
    $success = [];
   


    if (empty($jobpost_id) || empty($job_title)) {
       
        $errors['job_details_missing'] = "Job post details are missing.";
        $_SESSION["apply_errors"] = $errors;
        header("Location: ../../HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_apply_form.php?id=$jobpost_id&status=error");
        exit;
    }

        if(is_fname_empty($firstname)){
            $errors["firstname_empty"] = "First name is Required";
        }

        if(is_lname_empty($lastname)){
            $errors["lastname_empty"] = "Last name is Required";
        }
        if(is_email_registered($pdo,$email)){
            $errors["lastname_empty"] = "Email Already Exist, Use a new Email";
        }

        is_email_valid($email, $errors);


        if(is_phone_number_empty($phone_number)){
            $errors["pnum_empty"] = "Phonenumber is Required";
        }


        if(is_resume_valid($resume)){
            $errors['resume_error'] = "Resume file is Required.";
        }



        function handle_resume_upload($resume) {
            if (empty($resume) || $resume['error'] !== UPLOAD_ERR_OK) {
                return false;
            }
        
            $upload_dir = 'doc_file_directory/';
            $filename = basename($resume['name']); // Get only the file name
            $resume_path = $upload_dir . $filename; // Full path where the file will be stored
        
            if (move_uploaded_file($resume['tmp_name'], $resume_path)) {
                // Now return just the filename (without the directory)
                return $filename; // Only the file name (not the full path)
            }
            return false;
        }




   
    if (!empty($errors)) {
       
        $_SESSION["apply_errors"] = $errors;
        $_SESSION["apply_data"] = [
            "arr_p_firstname" => $firstname,
            "arr_p_lastname" => $lastname,
            "arr_p_middlename" => $middlename,
            "arr_p_email" => $email,
            "arr_p_phone_number" => $phone_number,
            "arr_p_resume_path" => $resume['name'] ?? '',
            "arr_p_cover_letter" => $cover_letter,
            "arr_p_additional_question" => $additional_question,
            "id" => $jobpost_id 
        ];
        header("Location: ../../HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_apply_form.php?id=$jobpost_id&status=error");
        exit;
    }

    // Handle Resume Upload
    $resume_path = handle_resume_upload($resume);

    if ($resume_path === false) {
        $errors['resume_upload'] = "Resume upload failed!";
        $_SESSION["apply_errors"] = $errors;
        header("Location: ../../HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_apply_form.php?id=$jobpost_id&status=error");
        exit;
    }




    // Create User in the database
    try {
        $jobpost_id = (int)$jobpost_id;

        // Call the function
        create_jobseekers(
            $pdo, 
            $firstname, 
            $lastname, 
            $middlename, 
            $email, 
            $phone_number, 
            $resume_path, 
            $cover_letter, 
            $additional_question,
            $jobpost_id,
            $job_title
        );

        $success = "Application Submitted Successfully! Wait for The Update" ;
        $_SESSION["apply_form_success"] =  $success;
        header("Location: ../../HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_apply_form.php?id=$jobpost_id&status=success");
        exit;




    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }




} else {


    // If the request method is not POST, just keep the id from the URL
    if ($jobpost_id  === null) {
        // Handle error if no id is found in the URL or POST
        header("Location: ../../HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/joblist_feed.php");
        exit;


    }
}






?>

