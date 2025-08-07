
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> @font-face {
        font-family: 'Roboto';
        src: url('../config_session.inc.php');
    }</style>

</head>
    <body>
        
    </body>
</html>

<?php




if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $firstname = trim($_POST["sn_firstname_inp"] ?? '');
    $lastname = trim($_POST["sn_lastname_inp"] ?? '');
    $password = trim($_POST["sn_password_inp"] ?? '');
    $email = trim($_POST["sn_email_inp"] ?? '');



    try {


        require_once '../dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_view.inc.php';
        require_once 'signup_contr.inc.php';

        $errors = [];

        if (is_input_empty($firstname, $lastname, $password, $email)) {
            $errors["empty_input"] = "Fill in All Fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid Email Used!";
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }


        if ($errors) {
    
            session_start();
            $_SESSION["errors_signup"] = $errors;
            $_SESSION["signup_data"] = [
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
            ];


            header("Location: ../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/joblist.php");
            exit;

        }


        create_user($pdo, $firstname, $lastname, $password, $email);


        header("Location: ../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/joblist.php?signup=success");
        exit;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }


    

} else {

    header("Location: ../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/joblist.php");
    exit;

    
}