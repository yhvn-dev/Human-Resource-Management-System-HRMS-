

<?php

    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';

    // DB JOBSEEKERS FUNCTIONS
    require_once '../../Includes/Login_Functions/login_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_model.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_contr.inc.php';

    // EMPLOYEE MANAGEMENT FUNCTIONS
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_module.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_contr.inc.php';
        
    $first_name = "";
    $last_name = "";
    $middle_name =  "";
    $email =  "";
    $phone_number =  "";
    $resume_path =  "";
    $job_title = " ";
    $field_category = " ";


    $jobseekers_id = intval($_GET["id"]);


    if ($pdo === null) {
        die("Database connection is not established.");
    }
    
    
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if (!isset($_GET["id"]) || empty($_GET["id"])) {
            die("Invalid Jobpost ID! Please Try again.");
        }
    
        $jobseekers_id = intval($_GET["id"]);
    
        $query = "SELECT * FROM jobseekers_ WHERE js_id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([":id" => $jobseekers_id]);
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
      
            $first_name = $row['firstname_'];
    
        } else {
            die("No job post found with ID: $jobseekrs_id");
        }
    
        $_SESSION["crem_data"] = [
            "arr_p_employee_id" => htmlspecialchars($row["employee_id_"] ?? ""),
            "arr_p_firstname" => htmlspecialchars($row["firstname_"] ?? ""),
            "arr_p_lastname" => htmlspecialchars($row["lastname_"] ?? ""),
            "arr_p_middlename" => htmlspecialchars($row["middlename_"] ?? ""),
            "arr_p_email" => htmlspecialchars($row["email_"] ?? ""),
            "arr_p_phone_number" => htmlspecialchars($row["phone_number_"] ?? ""),
            "arr_p_resume_path" => htmlspecialchars($row["resume_path_"] ?? ""),
            "arr_p_job_title" => htmlspecialchars($row["job_title"] ?? ""),
            "arr_p_department" => htmlspecialchars($row["department_"] ?? ""),
            "arr_p_role" => htmlspecialchars($row["role_"] ?? "")
        ];





    } else {
        die("No job post found with ID: $jobseekers_id");
    }
    


    
?>


<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <title>Create Employee Account</title>


    <link rel="stylesheet" href="../HR_CSS/create_employee_acc.css">
    <link rel="stylesheet" href="../HR_CSS/dashboard_responsive.css">
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">


</head>


        <body>
        
            <div class="cremacc_wrapper" id="cremacc_wrapper">

                
                    <div class="backdrop bd_cremacc" id="cremacc_bd_id">

                            <!-- <div class="bd_numbers_content_b">

                                <div class="bd_numbers_content_div bd_approve_js_div">

                                      

                                </div>

                                <div class="bd_numbers_content_div bd_reject_js_div">

                                  

                                </div>
                                

                            </div>


                            

                            <div class="bd_aside_div bd_gradient_div">

                                 


                            </div> -->

                    </div>



                    
                    <div class="template fp_wrapper">

                  

                 
                         <a href="create_employee_acc.php" class="container logo_div ">

                                <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="cremacc_logo" width="60">

                                <p>NodeLab</p>
                              

                        </a>
    

                
                                <!-- SIDEBAR_______________________________________________________________________ -->
                                <div class="container sidebar" id="db_sidebar_id">


                                    <div class="sidebar_buttons_div">

                                        <!-- dashboard # -->
                                        <a class="sbuttons_div-href" id="dashboard-btn-href" href="dashboard.php">

                                            <div class="sbuttons_div" id="dashboard-btn">


                                                <div class="btn_content_div btn_icon_div" id="btn_icon_dasboard_div">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                                    id="dashboard_button_icon" viewBox="0 0 24 24" fill=""><path d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z"></path></svg>

                                                </div>

                                                <div class="btn_content_div btn_lbl_div" id="btn_lbl_dashboard_div">

                                                    <span class="sidebar-lbtn" id="dashboard-lbtn">Dashboard</span>

                                                </div>
                                            
                                        

                                            </div>

                                        </a>
                                    
                                    
                                        <!-- recruitment # -->
                                        <a  href="../HR_HTML/recruitment_dashboard.php" class="sbuttons_div-href" id="recruitment-btn-href" href="recruitment_module.php">


                                            <div class="sbuttons_div" id="recruitment-btn">

                                                <div class="btn_content_div btn_icon_div" id="btn_icon_req_div">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                                    id="recruit_person_button_icon" viewBox="0 0 24 24" fill="currentColor"><path d="M14 14.252V22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"></path></svg>

                                                </div>
                                                <div class="btn_content_div btn_lbl_div" id="btn_lbl_req_div">

                                                    <span class="sidebar-lbtn" id="recruitment-lbtn">Recruitment</span>


                                                </div>

                                            

                                            </div>

                                        </a>
                                            

                                        <!-- job posting # -->
                                        <a class="sbuttons_div-href" id="jobposting-btn-href" href="jobposting_db.php">

                                            <div class="sbuttons_div" id="jobposting-btn">


                                                <div class="btn_content_div btn_icon_div" id="btn_icon_jp_div">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"
                                                    id="job_posting_button_icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 5V2H10V5H4C3.44772 5 3 5.44772 3 6V14C3 14.5523 3.44772 15 4 15H17.4142L21.7071 10.7071C22.0976 10.3166 22.0976 9.68342 21.7071 9.29289L17.4142 5H12ZM12 17H10V22H12V17Z"></path></svg>

                                                </div>
                                                <div class="btn_content_div btn_lbl_div" id="btn_lbl_jp_div">

                                                    <span class="sidebar-lbtn" id="jobposting-lbtn">Jobposting</span>

                                                </div>

                                
                                                
                                            </div>

                                        </a>




          
                                        <!-- job posting # -->
                                        <a class="sbuttons_div-href" id="create_emp-btn-href" href="create_employee_acc.php">

                                            <div class="sbuttons_div" id="create_emp-btn">

                                                    <div class="btn_content_div btn_icon_div" id="btn_icon_jp_div">

                                                        <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"
                                                        id="job_posting_button_icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 5V2H10V5H4C3.44772 5 3 5.44772 3 6V14C3 14.5523 3.44772 15 4 15H17.4142L21.7071 10.7071C22.0976 10.3166 22.0976 9.68342 21.7071 9.29289L17.4142 5H12ZM12 17H10V22H12V17Z"></path></svg>

                                                    </div>
                                                    
                                                    <div class="btn_content_div btn_lbl_div" id="btn_lbl_jp_div">

                                                        <span class="sidebar-lbtn" id="create_emp-lbtn">Account</span>

                                                    </div>
                                                
                                            </div>

                                        </a>



                                             
                                    </div>

                                    
                                </div> 
                                <!-- ENDS OF SIDEBAR  ======================================================================================- -->















                                <!-- HEADER ======================================================================================-->
                                <div class="container cremacc_header" id="cremacc_header_id">

      
                                    <!-- right header div -->
                                    <div class="header_div" id="right_header_div">


                                            <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png">

                                            <div class="right_h_contents" id="hd_role_div">

                                                <span id="hd_role_type"><?php output_role() ?></span>
                                                
                                            </div>
                                        
                                            <p class="right_h_contents " id="user_greetings"> <span id="hr_name" name="hr_name"><?php output_username() ?></span></p>


                                            <div class="darkmode_div" id="darkmode_div">

                                                <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                                                </div>
            
                                            </div>

                                    </div>

                                </div>
                                <!-- END OF HEADER -->



                        <div class="container main_prompt_con">

                                <p>Create an Account for   
                                                            
                                    <span class="title_con_text js_fname_holder"> <?php echo $first_name  ?> </span>
                          
                                </p>

                        </div>




                        


                        <!-- CREATE ACC CONTAINER =================================================================================== -->
                        <div class="container create_acc_container" id="cremacc_create_acc_form_id">


                            <div class="create_acc_divs create_acc_header">

                                
                                <span>Create Employee Account</span>

                            </div>

                            <form action="../HR_Includes/Employee_Management_Functions/employee_m_inc.php" class="create_acc_divs create_acc_section" method="POST">


                                    <div class="create_acc_subdivs validation_div_a">

                                    <?php  output_employee_id() ?>

                                    </div>


                                        <div class="create_acc_form"> 



                                            <?php crem_input() ?>



                                        </div>

                            
                                    
                                    <div class="create_acc_subdivs  validation_div_b">

                                        <input type="hidden" id="recruited_id_holder" name="js_id_inp" value="<?php echo $jobseekers_id ?> ">


                                        <?php  check_crem_for_errors() ?>
                                     

                                    </div>
                                    
                                    <div class="button_div"  method="POST">

                                        <button type="submit" class="crem_buttons" name="create_emp_acc" id="create_emp_acc">Create</button>
                                        <a href="recruitment_dashboard.php"  class="crem_buttons"  id="discard_crem">Discard</a>

                                    </div>


                            </form>



                        </div>
                        <!-- END MAIN CONTENTS ==================================================================================== -->







                        <div class="container aside" id="cremacc_aside_id">   



                        </div>
                        <!-- END OF ASIDE -->







                    </div>

    
            



            </div>
            <!-- END OF DB WRAPPER -->

            <script src="../../HR_Modules/HR_JS/create_employee_error_handling.js"></script>
         
      
            
        </body>



</html>