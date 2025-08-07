<?php

declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();

    // Sanitize and validate inputs
    $employee_id = trim($_POST["employee_num_n"]);
    $employee_pass = trim($_POST["employee_pass_n"]);

    try {
        require '../dbh.inc.php';        // Database connection
        require 'login_model.inc.php';  // Model for database queries
        require 'login_contr.inc.php';  // Controller for validation

        $wrong_credentials_errors = [];
        $empty_fields_errors = [];


        
        // Validate inputs
        if (empty($employee_id) || empty($employee_pass)) {
            $empty_fields_errors["empty_input"] = "Fill in All Fields!";
        }

        // Fetch user by employee ID
        $result = get_user($pdo, null, $employee_id);



        // Check if the result is valid
        if (!$result || is_employee_id_wrong($result)) {
            $wrong_credentials_errors["login_incorrect"] = "Incorrect Login Info!";
        } elseif (is_employee_pass_wrong($employee_pass, $result["password_"])) {
            $wrong_credentials_errors["login_incorrect"] = "Incorrect Login Info!";
        }



        // Handle errors
        if ($empty_fields_errors) {
            $_SESSION["errors_login_empty"] = $empty_fields_errors;
            header("Location: ../../HRMS_Front_Page/HRMS_Front_Page_HTML/index.php?login=failed");
            exit;
        }

        if ($wrong_credentials_errors) {
            $_SESSION["errors_login_credentials"] = $wrong_credentials_errors;
            header("Location: ../../HRMS_Front_Page/HRMS_Front_Page_HTML/index.php?login=failed");
            exit;
        }





        // Store data in session
        session_regenerate_id(true); // Regenerate session ID for security
        $_SESSION["user_id"] = $result["id"]; // Primary key
        $_SESSION["user_employee_id"] = $result["employee_id"]; // User identifier
        $_SESSION["user_firstname"] = htmlspecialchars($result["first_name"]);
        $_SESSION["role"] = $result["role_"];  // Store the role in session
        $_SESSION["db_profile_pic"] = $result["profile_picture"] ?? null;




        // Redirect based on role, passing only the primary key in the URL
        if ($result["role_"] === 'HRR') {
            header("Location: ../../HR_Modules/HR_HTML/dashboard.php?id=" . urlencode((string)$result["id"]));
            exit;
        } elseif ($result["role_"] === 'Employee') {
            header("Location: ../../Employee_Modules/Employee_Module_HTML/employee_dashboard.php?id=" . urlencode((string)$result["id"]));
            exit;
        } else {
            echo "Invalid role!";
            exit;
        }

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../HRMS_Front_Page/HRMS_Front_Page_HTML/index.php");
    exit;
}
