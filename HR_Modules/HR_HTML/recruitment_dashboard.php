


<?php
    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';
    
    require_once '../../Includes/Login_Functions/login_view.inc.php';

    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_model.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_contr.inc.php';

   
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_module.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_contr.inc.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recruitment</title>

    <link rel="stylesheet" href="../HR_CSS/recruitment_dashboard.css">
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

</head>


        <body>

            <div class="main_recq_wrapper">

                <div class="template bd_recq_wrapper">

                        
                </div>
                

                <div class="template fp_recq_wrapper">

                    <!-- LOGO DIV ================================================================================ -->




                      <a  href="recruitment_dashboard.php" style="text-decoration:none" class="container logo_div">


                             <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="db_logo" width="60">

                                <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                      </a>





                      <!-- END OF LOGO DIV ==================================================================== -->


                        <div class="container main_prompt_con">

                            <span class="title_con_text text_a">Recruitment</span>  
                                                    
                            <span class="title_con_text text_b"> Manage Jobseekers </span>


                        </div>






                                    


                <div class="container header">


                <div class="header_div" id="right_header_div">

                    <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png">

                    <div class="right_h_contents " id="hd_role_div">

                            <span id="hd_role_type"><?php
                            
                            
                            output_role()
                            
                            ?></span>
                            
                    </div>

                    <p class="right_h_contents " id="user_greetings"><span id="hr_name" name="hr_name"><?php 
                    
                    output_username() 
                    
                    ?></span></p>

                    <div class="darkmode_div" id="darkmode_div">

                        <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                        </div>

                    </div>

                </div>




                </div>


















                        <!--  SIDEBAR ==================================================================== -->


                        <div class="container sidebar">
                            
                                                        
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
                                <a  href="../HR_HTML/recruitment_dashboard.php" class="sbuttons_div-href" id="recruitment-btn-href" >


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

                                  <!-- EMPLOYEES # -->
                                  <a class="sbuttons_div-href" id="employee-btn-href" href="employee_management_db.php">

                                    <div class="sbuttons_div" id="jobposting-btn">


                                        <div class="btn_content_div btn_icon_div" id="btn_icon_jp_div">
                                        <svg id="employee_button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svgi>

                                        </div>
                                        <div class="btn_content_div btn_lbl_div" id="btn_lbl_jp_div">

                                            <span class="sidebar-lbtn" id="employee-lbtn">Employees</span>

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



                                
                                        



                                </div>


                        
                        </div>







                      <!-- END OF SIDEBAR ==================================================================== -->

                      <div class="container number_div">

                            <div class="nc_contents" id="employee_number">
                                
                                <div class="nc_lbl_div en_lbl_div">

                                    <span>Employees</span>

                                </div>
                                     
                            <span>

                                <?php
                            
                            $total_employees = get_employee_count($pdo );
                            echo $total_employees;    
                            ?>

                            </span>   
                                    

                            </div>


                            <div class="nc_contents" id="jobseekers_number">
                                
                                <div class="nc_lbl_div jsn_lbl_div">

                                    <span>Total Jobseekers</span>

                                </div>

                                <span>

                                    <?php   
                                        $total_jobseekers = paste_jobseekers_count($pdo);

                                        echo $total_jobseekers;      

                                    ?>

                                </span>   
                                     

                            </div>

                            
                            <div class="nc_contents" id="rjct_appr_number">



                                 <div class="rjct_appr_subdiv approved_js_div">
                                    <span id="appr_text">Approve</span>

                                    <span id="appr_js_num_holder"> 
                                        <?php 
                                        
                                        $approved_jobseekers = count_jobseekers($pdo, 'approved');
                                        echo $approved_jobseekers;
                                        
                                        ?>  
                                    </span>

                                </div>         
                                
                                <div class="rjct_appr_subdiv reject_js_div">


                                        <span id="rjct_text">Rejected</spanid>

                                        <span id="rjct_js_num_holder">  
                                            <?php 
                                                        $approved_jobseekers = count_jobseekers($pdo, 'rejected');
                                                        echo $approved_jobseekers;          
                                            ?>  
                                        </span>

                                </div>
                                
                                    

                            </div>

                    

                      </div>


                      <!-- MAIN CONTENTS  -->
                      <div class="container main_contents">


                            <div class="mc_div mc_header">

                                <div class="mcd_div mcdiv_left">

                                    <span class="mc_header_text" id="mc_header_jstbl_txt">Jobseekers Table</span>

                                </div>




                                <?php  if(isset($_POST))?>


                                <div class="mcd_div mcdiv_right">


                                    <form action="" class="filter_form" method="POST">

                                            <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                                <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                                <option value="recruited" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'recruited') ? 'selected' : '' ?>>Recruited</option>

                                                <option value="approved" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'approved') ? 'selected' : '' ?>>Approved</option>

                                                <option value="employee" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'employee') ? 'selected' : '' ?>>Employee</option>

                                            </select>

                                    </form>



                                </div>

                            </div>


                                <div class="mc_div mc_content_div">


                                    <div class="mc_table_div">



                                         <!-- GET JOBSEEKERS OVERVIEW -->

                                                                        <?php
                                        if ($pdo === null) {
                                            die("Database connection is not established.");
                                        }



                                        


                                        // Get the filter status from the POST data
                                        $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';

                                   
                                        $query = "SELECT * FROM jobseekers_";

                                        // If a status is selected, add a WHERE condition to the query
                                        if ($filter_status != 'none') {
                                            $query .= " WHERE status = :status";
                                        }

                                        // Prepare and execute the query
                                        $stmt = $pdo->prepare($query);
                                        if ($filter_status != 'none') {
                                            $stmt->bindParam(':status', $filter_status, PDO::PARAM_STR);
                                        }
                                        $stmt->execute();

                                        // Fetch all jobseekers data
                                        $jobseekers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                
                                        ?>


                                     


                                        <table class="db_js_table">
                                            <tr class="mc_th_tr" id="mc_th_tr">
                                                <th class="mc_th th_firstname">Firstname</th>
                                                <th class="mc_th th_lastname">Lastname</th>
                                                <th class="mc_th th_applied_job">Applied Job</th>
                                                <th class="mc_th th_email">Email</th>
                                                <th class="mc_th th_phone_num">Phone Number</th>
                                                <th class="mc_th th_resume">Resume</th>
                                                <th class="mc_th th_recruitment_date">Recruitment Date</th>
                                                <th class="mc_th th_status">Status</th>
                                                <th class="mc_th th_action">Action</th>
                                            </tr>

                                            <!-- FILTER  -->


                                            
                                            <?php
                                            usort( $jobseekers, function ($a, $b) {
                                                return $b['js_id'] - $a['js_id'];
                                            });



                                            if ( $jobseekers && count( $jobseekers) > 0)  {
                                                foreach ( $jobseekers as $js) {
                                                    echo '
                                                        <tr class="mc_data_tr">
                                                            <td class="mc_tb_data td_output_js_firstname">' . htmlspecialchars($js["firstname_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_lastname">' . htmlspecialchars($js["lastname_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_job_title">' . htmlspecialchars($js["job_title"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_email">' . htmlspecialchars($js["email_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_phone_num">' . htmlspecialchars($js["phone_number_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_resume">' . htmlspecialchars($js["resume_path_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_recruitment_date">' . htmlspecialchars($js["recruitment_date"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_status">' . htmlspecialchars($js["status"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_action">
                                                                <div class="tb_button_div">
                                                                    ' . ($js["status"] === "Approved" ? '<a href="jobseekers_validation_recruit.php?id=' . $js["js_id"] . '" class="mc_tb_btn recruit-button">Recruit</a> ' : '') . '
                                                                    <a href="jobseekers_validation_reject.php?id=' . $js["js_id"] . '" class="mc_tb_btn reject-button">Reject</a>
                                                                    ' . ($js["status"] === "Recruited" ? '<a href="create_employee_acc.php?id=' . $js["js_id"] . '" class="mc_tb_btn create-account-button">Create</a> ' : '') . '
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            } else {
                                                echo '<tr class="no_jobpost_found_tr">
                                                    <td class="no_jobpost_found" colspan="9">No jobseekers found</td>
                                                </tr>';
                                            }
                                            ?>






                                                                <?php   $approved_and_recruited_js = populate_table_with_approved_jobseekers(
                                                                            $pdo,
                                                                            $jobseekes_id = 0,
                                                                        $firstname = "",
                                                                        $lastname = "",
                                                                        $job_title = "",
                                                                            $email = "",
                                                                    $phone_number = "",
                                                                        $resume = "",
                                                                        $status = "");
                                                                        
                                                                        
                                                                        ?>



                                            <?php
                                            usort( $approved_and_recruited_js, function ($a, $b) {
                                                return $b['js_id'] - $a['js_id'];
                                            });

                                            if ( $approved_and_recruited_js && count( $approved_and_recruited_js) > 0 )  {
                                                foreach ( $approved_and_recruited_js as $js) {
                                                    echo '
                                                        <tr class="mc_data_tr">
                                                            <td class="mc_tb_data td_output_js_firstname">' . htmlspecialchars($js["firstname_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_lastname">' . htmlspecialchars($js["lastname_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_job_title">' . htmlspecialchars($js["job_title"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_email">' . htmlspecialchars($js["email_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_phone_num">' . htmlspecialchars($js["phone_number_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_resume">' . htmlspecialchars($js["resume_path_"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_recruitment_date">' . htmlspecialchars($js["recruitment_date"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_status">' . htmlspecialchars($js["status"]) . '</td>
                                                            <td class="mc_tb_data td_output_js_action">
                                                                <div class="tb_button_div">
                                                                    ' . ($js["status"] === "Approved" ? '<a href="jobseekers_validation_recruit.php?id=' . $js["js_id"] . '" class="mc_tb_btn recruit-button">Recruit</a> ' : '') . '
                                                                    <a href="jobseekers_validation_reject.php?id=' . $js["js_id"] . '" class="mc_tb_btn reject-button">Reject</a>
                                                                    ' . ($js["status"] === "Recruited" ? '<a href="create_employee_acc.php?id=' . $js["js_id"] . '" class="mc_tb_btn create-account-button">Create</a> ' : '') . '
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            } else {
                                                echo '<tr class="no_jobpost_found_tr">
                                                    <td class="no_jobpost_found" colspan="9">No jobseekers found</td>
                                                </tr>';
                                            }
                                            ?>




                                                                                </table>                                                            
                                                            


                                        </div>


                                </div>


                            </div>
                            <!-- END OF   <!-- MAIN CONTENTS  -->


                            <div class="aside_div">



                            </div>



                </div>


            </div>
            

                <script src="../HR_JS/db_recruitment_error_handling.js"></script>
                <script src="../HR_JS/recruitment_db_darkmode.js"></script>




        </body>



</html>