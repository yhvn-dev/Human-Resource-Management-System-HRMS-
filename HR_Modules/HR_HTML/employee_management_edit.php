

<?php

require_once '../../Includes/dbh.inc.php';
require_once '../../Includes/config_session.inc.php';

// DB JOBSEEKERS FUNCTIONS
require_once '../../Includes/Login_Functions/login_view.inc.php';

// EMPLOYEE MANAGEMENT FUNCTIONS
require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_module.inc.php';
require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_view.inc.php';
require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_contr.inc.php';

// Initialize variables
$employee_id = "";
$first_name = "";
$last_name = "";
$middle_name = "";
$email = "";
$phone_number = "";
$job_title = "";
$department  = "";
$role = "";
$password = "";


$emp_id = intval($_GET["id"] ?? $_POST["id"] ?? 0);


// Fetch employee data for editing
$row = [];

if ($emp_id > 0) {

    $query = "SELECT * FROM employees_ WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id" => $emp_id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($row) {

     
        $employee_id = $row['employee_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $middle_name = $row['middle_name'];
        $email = $row['email_'];
        $phone_number = $row['phone_number_'];
        $job_title = $row['job_title'];
        $department = $row['department_'];
        $role = $row['role_'];
        $password = $row['password_'];

    } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
        die("No Employee Found with ID: $emp_id");
    }

}

// Handle form submission


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Shared field assignments
    $employee_id = trim($_POST["employee_id_inp"] ?? $employee_id);
    $first_name = trim($_POST["first_name_inp"] ?? $first_name);
    $last_name = trim($_POST["last_name_inp"] ?? $last_name);
    $middle_name = trim($_POST["middle_name_inp"] ?? $middle_name);
    $email = trim($_POST["email_inp"] ?? $email);
    $phone_number = trim($_POST["phone_number_inp"] ?? $phone_number);
    $job_title = trim($_POST["job_title_inp"] ?? $job_title);
    $department = trim($_POST["department_inp"] ?? $department);
    $role = trim($_POST["roles_inp"] ?? $role);
    $password = trim($_POST["password_inp"] ?? $password);

    // Handle Generate ID button click
    if (isset($_POST['generate_id_btn']) && !empty($department)) {

        try {
            $department_prefix = strtoupper(substr($department, 0, 3)); // First 3 letters
            $query = $pdo->prepare("SELECT MAX(CAST(SUBSTRING(employee_id, LENGTH(:prefix) + 1) AS UNSIGNED)) AS max_id
                FROM employees_
                WHERE employee_id LIKE :prefix_pattern");
            $query->execute([
                'prefix' => $department_prefix,
                'prefix_pattern' => $department_prefix . '%',
            ]);

            $max_id = $query->fetchColumn();
            $new_id_number = $max_id ? $max_id + 1 : 1;
            $employee_id = $department_prefix . str_pad($new_id_number, 4, '0', STR_PAD_LEFT);
            $_SESSION['generated_employee_id'] = $employee_id;

            header("Location: employee_management_edit.php?id=$emp_id&status=id_generated");
            exit;
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    }




        
    // Handle editing the employee
    if (isset($_POST['edit_emp_acc'])) {
        $errors = [];



        // Validate required fields
        if (empty($employee_id)) $errors[] = "Employee ID is required.";
        if (empty($first_name)) $errors[] = "First name is required.";
        if (empty($last_name)) $errors[] = "Last name is required.";
        if (empty($email)) $errors[] = "Email is required.";
        if (empty($job_title)) $errors[] = "Job Title is required.";
        if (empty($department)) $errors[] = "Department is required.";
        if (empty($role)) $errors[] = "Role is required.";





        // Validate email format
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please provide a valid email address.";
        }



        // Validate employee ID uniqueness
        if (!empty($row) && $employee_id !== $row['employee_id'] && is_employee_id_exist($pdo, $employee_id)) {
            $errors[] = "Employee ID already exists. Generate a new one.";
        }


        


        // Check for errors
        if (!empty($errors)) {
            $_SESSION['update_errors'] = $errors;
            $_SESSION['update_data'] = $_POST;
            header("Location: employee_management_edit.php?id=$emp_id&status=error");
            exit;
        }




        // Update if no errors
        try {
            $query = "UPDATE employees_ SET 
                employee_id = :employee_id, 
                first_name = :first_name, 
                last_name = :last_name, 
                middle_name = :middle_name, 
                email_ = :email, 
                phone_number_ = :phone_number, 
                job_title = :job_title, 
                department_ = :department, 
                role_ = :role, 
                password_ = :password 
                WHERE id = :id";

            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':employee_id' => $employee_id,
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':middle_name' => $middle_name,
                ':email' => $email,
                ':phone_number' => $phone_number,
                ':job_title' => $job_title,
                ':department' => $department,
                ':role' => $role,
                ':password' => $password,
                ':id' => $emp_id,
            ]);

            $_SESSION['update_success'] = "Employee record updated successfully!";
            header("Location: employee_management_db.php?&status=success");
            exit;

        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
            
        }
    }


}


?>




<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <title>Create Employee Account</title>


    <link rel="stylesheet" href="../HR_CSS/employee_management_edit.css">
   
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">


</head>


        <body>
        
            <div class="cremacc_wrapper" id="cremacc_wrapper">

                
                    <div class="backdrop bd_cremacc" id="cremacc_bd_id">



                    </div>




                    
                    <div class="template fp_wrapper">

                  

                 
                         <a href="create_employee_acc.php" class="container logo_div ">

                                <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="cremacc_logo" width="60">

                                <p>NodeLab</p>
                              

                        </a>
    

                
                                













                                <!-- HEADER ======================================================================================-->
                                <div class="container cremacc_header" id="cremacc_header_id">

      
                                    <!-- right header div -->
                                    <div class="header_div" id="right_header_div">


                                            <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png">

                                            <div class="right_h_contents" id="hd_role_div">

                                                <span id="hd_role_type"></span>
                                                
                                            </div>
                                        
                                            <p class="right_h_contents " id="user_greetings"> <span id="hr_name" name="hr_name"></span></p>


                                            <div class="darkmode_div" id="darkmode_div">

                                                <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                                                </div>
            
                                            </div>

                                    </div>

                                </div>
                                <!-- END OF HEADER -->




                        <div class="container main_prompt_con">

                                <p>Edit Employee Account   
                                                            
                                    <span class="title_con_text js_fname_holder">  </span>
                          
                                </p>

                        </div>


                        


                        <!-- CREATE ACC CONTAINER =================================================================================== -->
                        <div class="container create_acc_container" id="cremacc_create_acc_form_id">


                            <div class="create_acc_divs create_acc_header">

                                
                                <span>Edit Employee Account</span>

                            </div>

                            <form action="" class="create_acc_divs create_acc_section" method="POST">


                                    <div class="create_acc_subdivs validation_div_a">

                                    <?php output_edit_emp_id() ?>
                                

                                    </div>


                                        <div class="create_acc_form"> 



                                         
                          <div class="left_right_div left_create_div">
                                


                                <!-- EMPLOYEE ID -->
                                <div class="create_emp_acc_input_box employee_id_input_box">

                                    <input type="text" class="employee_id_inp_class"  value="<?php  echo   $employee_id ?>" name="employee_id_inp" placeholder="">
                                    <label class="crem_lbl">Employee ID</label>
                                    <button type="submit" id="generate_btn" name="generate_id_btn">
                                    
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.6144 17.7956 11.492 15.7854C12.2731 13.9966 13.6789 12.5726 15.4325 11.7942L17.8482 10.7219C18.6162 10.381 18.6162 9.26368 17.8482 8.92277L15.5079 7.88394C13.7092 7.08552 12.2782 5.60881 11.5105 3.75894L10.6215 1.61673C10.2916.821765 9.19319.821767 8.8633 1.61673L7.97427 3.75892C7.20657 5.60881 5.77553 7.08552 3.97685 7.88394L1.63658 8.92277C.868537 9.26368.868536 10.381 1.63658 10.7219L4.0523 11.7942C5.80589 12.5726 7.21171 13.9966 7.99275 15.7854L8.8704 17.7956C9.20776 18.5682 10.277 18.5682 10.6144 17.7956ZM19.4014 22.6899 19.6482 22.1242C20.0882 21.1156 20.8807 20.3125 21.8695 19.8732L22.6299 19.5353C23.0412 19.3526 23.0412 18.7549 22.6299 18.5722L21.9121 18.2532C20.8978 17.8026 20.0911 16.9698 19.6586 15.9269L19.4052 15.3156C19.2285 14.8896 18.6395 14.8896 18.4628 15.3156L18.2094 15.9269C17.777 16.9698 16.9703 17.8026 15.956 18.2532L15.2381 18.5722C14.8269 18.7549 14.8269 19.3526 15.2381 19.5353L15.9985 19.8732C16.9874 20.3125 17.7798 21.1156 18.2198 22.1242L18.4667 22.6899C18.6473 23.104 19.2207 23.104 19.4014 22.6899Z"></path></svg>
                                    
                                    <span> Generate </span></button>
                                
                                </div>

                                <!--FIRST NAME  -->
                                <div class="create_emp_acc_input_box first_name_input_box">

                                    <input type="text" class="first_name_inp_class" value="<?php echo $first_name ?>" name="first_name_inp" placeholder="">
                                    <label class="crem_lbl">First Name</label>

                             
                                </div>

                                <!-- LAST NAME -->
                                <div class="create_emp_acc_input_box last_name_input_box">

                                    <input type="text"  class="lastname_name_inp_class" value="<?php echo $last_name ?>"   name="last_name_inp" placeholder="">
                                    <label class="crem_lbl">Last Name</label>

                                    
                                </div>

                                <!-- MIDDLE INPUT -->
                                <div class="create_emp_acc_input_box middle_input_box">

                                    <input type="text"  class="middle_name_inp_class" value="<?php echo $middle_name ?>"   name="middle_name_inp" placeholder="">
                                    <label class="crem_lbl">Middle Name<label>

                                </div>

                                     <!-- EMAIL -->
                                <div class="create_emp_acc_input_box email_input_box">

                                    <input type="text" class="email_inp_class"  value="<?php echo $email ?>"   name="email_inp" placeholder="">
                                    <label class="crem_lbl" >Email</label>

                                </div>

                        </div>



                        <div class="left_right_div right_create_div">

                                     <!-- PHONE NUMBER -->
                                    <div class="create_emp_acc_input_box phone_number_input_box">

                                        <input type="text"  class="phone_number_inp_class" value="<?php echo $phone_number ?>" name="phone_number_inp" placeholder="">
                                        <label class="crem_lbl" >Phone Number</label>

                                    </div>

                            
                                


                                            <!-- JOB TITLE -->
                                    <div class="create_emp_acc_input_box job_title_input_box">

                                        <input type="text" class="job_title_inp_class" value="<?php echo $job_title ?>" name="job_title_inp" placeholder="">
                                        <label class="crem_lbl" >Job Title</label>

                                    </div>

                                        <!-- DEPARTMENT -->
                                    <div class="create_emp_acc_input_box department_input_box">

                                        <input type="text" class="department_inp_class" value="<?php echo $department ?>" name="department_inp" placeholder="">
                                        <label class="crem_lbl">Department</label>

                                    </div>

                                        <!-- ROLE  -->
                                        <div class="create_emp_acc_input_box role_input_box">

                                            <select class="select_input select_role_inp_class" name="roles_inp">
                                                <option value="Employee" <?php echo ($role === 'Employee' ? 'selected' : ''); ?>>Employee</option>
                                                <option value="HRR" <?php echo ($role === 'HRR' ? 'selected' : ''); ?>>HRR</option>
                                            </select>

                                        

                                        </div>

                                            <!-- PASSWORD-->
                                        <div class="create_emp_acc_input_box password_box">

                                            <input type="text" class="department_inp_class" value="<?php echo $password ?>"   name="password_inp" placeholder="">
                                            <label class="crem_lbl">Password</label>

                                        </div>

                                 </div>   


                                        </div>

                            
                                    
                                    <div class="create_acc_subdivs  validation_div_b">


                                    <?php  check_editem_for_errors()  ?>

                                        <input type="hidden" id="recruited_id_holder" name="js_id_inp" value="<?php echo $emp_id ?> ">

                                             
                                    </div>
                                    
                                    <div class="button_div"  method="POST">

                                        <button type="submit" class="crem_buttons" name="edit_emp_acc" id="edit_emp_acc">Edit</button>
                                        <a href="employee_management_db.php"  class="crem_buttons"  id="discard_crem">Discard</a>

                                    </div>


                            </form>



                        </div>
                        <!-- END MAIN CONTENTS ==================================================================================== -->







                        <!-- END OF ASIDE -->







                    </div>

    
            



            </div>
            <!-- END OF DB WRAPPER -->

            <script src="../../HR_Modules/HR_JS/create_employee_error_handling.js"></script>
         
      
            
        </body>



</html>