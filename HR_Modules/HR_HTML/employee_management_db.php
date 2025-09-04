<?php

    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';

    require_once '../../Includes/Login_Functions/login_view.inc.php';

    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_module.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_contr.inc.php';

?>




<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <title>Dashboard</title>


    <link rel="stylesheet" href="../HR_CSS/employee_management_db.css">
  
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">


</head>


        <body>
        
            <div class="emdb_wrapper" id="emdb_wrapper">

                
                    <div class="backdrop bd_emdb" id="emdb_bd_id">

                          

                    </div>

                    
                    <div class="template fp_wrapper">



                            <a href="dashboard.php" class="container header_logo" id="db_header_logo_div_id">

                                <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="db_logo" width="60">

                                <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                            </a>


                            <div class="container main_prompt_con">

                                <span class="title_con_text text_a">Employees</span>  
                                                        
                                <span class="title_con_text text_b"> Manage Employees </span>



                                </div>



                                <!-- SIDEBAR_______________________________________________________________________ -->
                                <div class="container sidebar" id="db_sidebar_id">


                                    <div class="sidebar_divs sidebar_buttons_div">

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


                                        
                                          <!-- maange employee # -->
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





                                    <div class="sidebar_divs history_and_fired_nav">

                                        <div class="status_history_platform">


                                            <!-- status history_ button  -->
                                                <a class="sbuttons_div-href"  id="status_history-btn-href" >

                                                    <div class="sbuttons_div" id="status_history_emp-btn">


                                                        <div class="btn_content_div btn_icon_div" id="btn_icon_jp_div">

                                                            <svg id="status_history_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.298 22 8.69525 21.5748 7.29229 20.8248L2 22L3.17629 16.7097C2.42562 15.3063 2 13.7028 2 12C2 6.47715 6.47715 2 12 2ZM13 7H11V14H17V12H13V7Z"></path></svg>             


                                                        </div>

                                                    
                                                        <div class="btn_content_div btn_lbl_div" id="btn_lbl_jp_div">

                                                            <span class="sidebar-lbtn" id="status_history_emp-lbtn">Status History</span>

                                                        </div>


                                                        
                                                    </div>

                                                </a>


                                        </div>





                                              <!-- delete _emp  button  -->
                                        <a class="sbuttons_div-href" id="delete_emp-btn-href" >

                                            <div class="sbuttons_div" id="delete_emp-btn">


                                                <div class="btn_content_div btn_icon_div" id="btn_icon_jp_div">

                                                    <svg id="trash_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM9 11V17H11V11H9ZM13 11V17H15V11H13ZM9 4V6H15V4H9Z"></path></svg>

                                                </div>
                                                <div class="btn_content_div btn_lbl_div" id="btn_lbl_jp_div">

                                                    <span class="sidebar-lbtn" id="delete_emp-lbtn">Delete Employees</span>

                                                </div>


                                                
                                            </div>

                                        </a>


                                  



                                    </div>

                                    

           




                                    
                                </div> 
                                <!-- ENDS OF SIDEBAR  ======================================================================================- -->











                                <!-- HEADER ======================================================================================-->
                                <div class="container emdb_header" id="emdb_header_id">

                             

                                    <!-- right header div -->
                                    <div class="header_div" id="right_header_div">


                                            <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png">

                                            <div class="right_h_contents " id="hd_role_div">

                                                <span id="hd_role_type"><?php output_role()?></span>
                                                
                                            </div>
                                        
                                            <p class="right_h_contents " id="user_greetings"> <span id="hr_name" name="hr_name"><?php output_username() ?></span></p>
              
                                                <div class="darkmode_div" id="darkmode_div">

                                                    <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">
                                                        
                                                    </div>
                        
                                                </div>

                                    </div>

                                </div>
                                <!-- END OF HEADER -->





                        


                        <div class="container number_content_a" id="number_content_a">


                        
                            <div class="nc_contents" id="employee_number">
                                


                            
                                <div class="nc_lbl_div en_lbl_div">

                                    <svg id="nc_employee_button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svgi>

                                    <span>Total Employees</span>

                                </div>
                                

                                <span id="emp_count_holder">
  
                                    <?php
                            
                                     $total_employees = get_employee_count($pdo );
                                     echo $total_employees;    
                                    ?>

                                </span>   
                                    

                            </div>
                                   

                        </div>


                        
                            <?php
                                $job_title_with_most_active = get_job_title_with_most_active_employees($pdo, 'Active');                 
                            ?>

                        <div class="container number_content_b" id="number_content_b">

                        
                            <div class="nc_contents" id="job_title_number">
   
                                  

                                <div class="nc_lbl_div job_lbl_div">

                                    <svg id="job_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM17 13V10H15V13H9V10H7V13H4V19H20V13H17ZM9 3V5H15V3H9Z"></path></svg>
                                    <span>Job TItle With Most Active</span>

                                </div>


                                            <?php 


                                    if ($job_title_with_most_active) {
                                        echo '<span class="nc_b_data_text most_active_job">' .htmlspecialchars($job_title_with_most_active['job_title']) . "</span>";
                                    

                                    } else {
                                        echo "<span>No active employees found.</span>";
                                    }


                                        ?>
                                
                              
                            
                          
                            </div>

                            

                            <div class="nc_contents number_active_on_job">


                                    <div class="nc_lbl_div number_active_div">

                                
                                    <svg id="job_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12H15C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12H7Z"></path></svg>
                                            <span>Active Employees</span>

                                    </div>


                                                <?php 


                                        if ($job_title_with_most_active) {
                                            echo '<span class="nc_b_data_text total_of_acitve_on_jobs">' .htmlspecialchars($job_title_with_most_active['total']) . "</span>";


                                        } else {
                                            echo "<span>No active employees found.</span>";
                                        }


                                    ?>


                            </div>


                            
                          
                                   

                        </div>




























                        <?php

                        if ($pdo === null) {
                            die("Database connection is not established.");
                        }

                        $employees =  populate_table_with_employee($pdo,
                                                           $employee_id = "", 
                                                            $first_name = "", 
                                                             $last_name = "",
                                                           $middle_name = "",
                                                             $job_title = "", 
                                                                 $email = "",
                                                          $phone_number = "",
                                                           $hiring_date = "",
                                                                $status = "");
                                                                                                                              
                        ?>



                        <!-- MAIN CONTENTS ==================================================================================== -->
                        <div class="container main_contents" id="emdb_main_contents_id">

                                <div class="mc_div mc_header">

                                    <!-- LEFT -->
                                    <div class="lr_header left_mc_header">

                                        <span class="left_header_title">Employee Table</span>

                                    </div>



                                    <!-- RIGHT -->
                                    <div class="lr_header right_mc_header">

                                                     
                                    <form action="" class="filter_form" method="POST">

                                            <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                                <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                                <option value="active" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'active') ? 'selected' : '' ?>>Active</option>

                                                    <option value="fired" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'fired') ? 'selected' : '' ?>>Fired</option>


                                            </select>

                                    </form>

    
                                <?php

                                    if ($pdo === null) {
                                        die("Database connection is not established.");
                                    }

                                    // Handle the filter input
                                    $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';

                                    // Fetch employees based on filter
                                    if ($filter_status === 'none') {


                                     
                                        $query = "SELECT * FROM employees_";
                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute();
                                    } else {
                                    


                                        $query = "SELECT * FROM employees_ WHERE account_status = :status";
                                        $stmt = $pdo->prepare($query);
                                        $stmt->bindParam(':status', $filter_status, PDO::PARAM_STR);
                                        $stmt->execute();
                                    }

                               
                                    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    ?>






                                    </div>

                                </div>
        
                                <div class="mc_div mc_content_div">

                                    <div class="table_div">

                                        <table class="mc_table">

                                            <tr class="mc_th_tr" id="mc_th_tr">

                                                <th class="mc_th th_employee_id">Employee ID</th>
                                                <th class="mc_th th_firstname">Firstname</th>  
                                                <th class="mc_th th_lastname">Lastname</th>  
                                                <th class="mc_th th_applied_job">Job Title</th>
                                                <th class="mc_th th_email">Email</th>
                                                <th class="mc_th th_phone_num">Phone Number</th>      
                                            
                                                <th class="mc_th th_department">Department</th>
                                                <th class="mc_th th_status">Status</th>
                                                <th class="mc_th th_action">Action</th>

                                            </tr>

                                                <div class="validation_div">

                                                     <?php check_editem_for_errors()?>
                                                    <?php employee_prompt_success()?>
                                                

                                                </div>
                                                

                                                 <?php
                                                    if ($employees && count($employees) > 0) {
                                                        foreach($employees as $emp) {
                                                        echo ' 
                                                        <tr class="mc_data_tr" id="mc_data_tr">

                                                        
                                                        
                                                            <td class="mc_td td_output_emp_employee_id">'.htmlspecialchars($emp["employee_id"]).'</td>
                                                            <td class="mc_td td_output_emp_firstname">'.htmlspecialchars($emp["first_name"]).'</td>
                                                            <td class="mc_td td_output_emp_lastname">'.htmlspecialchars($emp["last_name"]).'</td>
                                                            <td class="mc_td td_output_emp_job_title">'.htmlspecialchars($emp["job_title"]).'</td>
                                                            <td class="mc_td td_output_emp_email">'.htmlspecialchars($emp["email_"]).'</td>
                                                            <td class="mc_td td_output_emp_phone_num">'.htmlspecialchars($emp["phone_number_"]).'</td>  
                                                        
                                                            
                                                                <td class="mc_td td_output_emp_department">'.htmlspecialchars($emp["department_"]).'</td>          
                                                            <td class="mc_td td_output_emp_status">

                                                                <div class="status_div" id="mc_status_div">


                                                                    '.htmlspecialchars($emp["account_status"]).'
                                                                    
                                                                    ';
                        
                                                                    if ($emp["account_status"] === "Active") {
                                                                        echo '<div class="status-indicator active-status"></div>';
                                                                    }
                                                                    
                                                                    if ($emp["account_status"] === "Fired") {
                                                                        echo '<div class="status-indicator fired-status"></div>';
                                                                    }


                                                                    
                                                                echo '   
                                                                
                                                                </div>
                                                                

                                                        
                                                            </td>

                                                            <td class="mc_td td_output_emp_action">

                                                                <div class="tb_button_div">
                                                                    <a class="tb_button fire-btn" href="employee_management_fire.php?id='.$emp["id"].'">Fire</a>                 
                                                                    <a class="tb_button edit-btn" href="employee_management_edit.php?id='.$emp["id"].'">Edit</a>                                                    
                                                                </div>

                                                            </td>

                                                        </tr>';
                                                        }
                                                    } else {
                                                        echo '<tr><td colspan="9">No job posts found</td></tr>';
                                                    }
                                                    ?>
                                                                                                
                                        

                                        </table>


                                    </div>
                                    

                                </div>
                                

                        </div>
                        <!-- END MAIN CONTENTS ==================================================================================== -->

                        



                        <!-- STATUS HISTORY =================== =================== =================== ===================  -->
                        <div class="container status_history_div">


                            <div class="stat_history_div sth_header">

                                                        
                                        <div class="lr_header left_st_header">

                                            <span class="left_header_title">Status History Table</span>

                                        </div>


                                        <!-- RIGHT -->
                                        <div class="lr_header right_st_header">

                                                        
                                            <form action="" class="filter_form" method="POST">

                                                <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                                    <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                                    <option value="active" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'active') ? 'selected' : '' ?>>Active</option>

                                                    <option value="fired" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'fired') ? 'selected' : '' ?>>Fired</option>

                                                  

                                                </select>

                                            </form>


                                        </div>

                            
                            </div>





                            

                            <div class="stat_history_div sth_main_content">


                                    <div class="sth_table_div"> 

                                             
                                        <table class="sth_table">

                                            <tr class="sth_th_tr" id="sth_th_tr">

                                                <th class="sth_th th_employee_id">Employee ID</th>
                                                <th class="sth_th th_firstname">Firstname</th>  
                                                <th class="sth_th th_lastname">Lastname</th>  
                                                <th class="sth_th th_applied_job">Job Title</th>
                                                <th class="sth_th th_hiring_date">Hiring Date</th>
                                                <th class="sth_th th_firing_date">Firing Date</th>
                                                <th class="sth_th th_status">Status</th>
                                             

                                            </tr>

                                            <div class="validation_div">

                                            <?php employee_prompt_success()?>
                                            

                                            </div>
                                            
                                                    

                                                <?php

                                            usort($employees, function($a, $b) {
                                                return $b['id'] - $a['id'];  
                                            });



                                                if ($employees && count($employees) > 0) {
                                                    foreach($employees as $emp) {
                                                        echo ' 
                                                        <tr class="sth_data_tr" id="sth_data_tr">
                                                        
                                                            <td class="sth_td sth_td_output_emp_employee_id">'.htmlspecialchars($emp["employee_id"]).'</td>
                                                            <td class="sth_td sth_tdtd_output_emp_firstname">'.htmlspecialchars($emp["first_name"]).'</td>
                                                            <td class="sth_td sth_tdtd_output_emp_lastname">'.htmlspecialchars($emp["last_name"]).'</td>
                                                            <td class="sth_td sth_tdtd_output_emp_job_title">'.htmlspecialchars($emp["job_title"]).'</td>
                                                            <td class="sth_td sth_td_output_emp_hiring_date">'.htmlspecialchars($emp["submission_date"]).'</td>
                                                            <td class="sth_td sth_td_output_emp_firing_date">'.htmlspecialchars($emp["firing_date"]).'</td>
                                                            <td class="sth_td sth_td_output_emp_status">

                                                                <div class="status_div" id="sth_status_div">


                                                                    <span>'.htmlspecialchars($emp["account_status"]).'</span>
                                                                    
                                                                    ';

                                                                    if ($emp["account_status"] === "Active") {
                                                                        echo '<div class="status-indicator active-status"></div>';
                                                                    }
                                                                    
                                                                    if ($emp["account_status"] === "Fired") {
                                                                        echo '<div class="status-indicator fired-status"></div>';
                                                                    }


                                                                    
                                                                echo '   
                                                                
                                                                </div>
                                                                

                                                        
                                                            </td>

                                                
                                                        </tr>';
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="9">No job posts found</td></tr>';
                                                }
                                                ?> 
                                                                                            


                                            </table>





                                    </div>




                            </div>


        

                        </div>
                        <!-- END OF STATUS HISTORY =================== =================== =================== ===================  -->












                        <?php  
                        
                            $fired_employees = populate_table_with_fired_employees($pdo,  
                            $employee_id = "", 
                             $first_name = "", 
                              $last_name = "",
                              $job_title = "", 
                            $hiring_date  = "",
                            $firing_date  = "",
                                 $status  = "" );
                        
                        
                        ?>




                     <!-- DELETE FIRED =================== =================== =================== ===================  -->
                        <div class="container delete_fired_employees_table">

                                <div class="dlf_div dlf_header">

                                    <div class="lr_header left_dlf_header">

                                        <span class="left_header_title">Delete Fired Employees</span>

                                    </div>


                                    <!-- RIGHT -->
                                    <div class="lr_header right_dlf_header">

                                                
                                      
                                    
                                    </div>


                                </div>

                                <div class="dlf_div dlf_main_contents">


                                     <div class="dlf_table_div">

                                        <table class="dlf_table">

                                            <tr class="dlf_th_tr" id="dlf_th_tr">

                                                <th class="dlf_th th_employee_id">Employee ID</th>
                                                <th class="dlf_th th_firstname">Firstname</th>  
                                                <th class="dlf_th th_lastname">Lastname</th>  
                                                <th class="dlf_th th_applied_job">Job Title</th>
                                                <th class="dlf_th th_hiring_date">Hiring Date</th>
                                                <th class="dlf_th th_firing_date">Firing Date</th>
                                                <th class="dlf_th th_status">Status</th>
                                                <th class="dlf_th th_action">Action</th>
                                            

                                            </tr>

                                            <div class="validation_div">

                                            <?php employee_prompt_success()?>


                                            </div>


                                                <?php
                                                if ($fired_employees && count(   $fired_employees) > 0) {
                                                    foreach($fired_employees as $f_emp) {
                                                        echo ' 
                                                        <tr class="dlf_data_tr" id="dlf_data_tr">
                                                        
                                                            <td class="dlf_td dlf_td_output_emp_employee_id">'.htmlspecialchars($f_emp["employee_id"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_firstname">'.htmlspecialchars($f_emp["first_name"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_lastname">'.htmlspecialchars($f_emp["last_name"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_job_title">'.htmlspecialchars($f_emp["job_title"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_hiring_date">'.htmlspecialchars($f_emp["submission_date"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_hiring_date">'.htmlspecialchars($f_emp["firing_date"]).'</td>
                                                            <td class="dlf_td dlf_td_output_emp_status">

                                                                <div class="status_div" id="dlf_status_div">

                                                                    <span>'.htmlspecialchars($f_emp["account_status"]).'</span>
                                                                    
                                                                    ';
      
                                                                    if ($f_emp["account_status"] === "Fired") {
                                                                        echo '<div class="status-indicator fired-status"></div>';
                                                                    }


                                                                    
                                                                echo '   
                                                                
                                                                </div>
                                                                

                                
                                                            </td>

                                                            <td class="dlf_td  dlf_output_emp_action">

                                                                <div class="tb_button_div" id="dlf_button_div">

                                                                    <a href="employee_management_delete.php?id='.$f_emp["id"].'" class="tb_button delete-emp-btn">Delete</a>
                                                                    
                                                                                                                        
                                                                </div>
                                                                
                                                            </td>

                                                
                                                        </tr>';

                                                        
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="9">No Employee found</td></tr>';
                                                }
                                                ?>

                                                                                            
                                            </table>



                                     </div>


                                </div>










                        </div>

                         <!-- DELETE FIRED  =================== =================== =================== ===================  -->











                        <div class="container aside">   


                       
                        <div class="aside_nc_contents" id="active_emp">
                                
                                   <div class="active_icon"></div> <span>Active</span> <span id="active_emp_holder"> <?php  

                                     $active_employees = get_employee_count($pdo,'active' );
                                     echo  $active_employees  ?></span>
                            
                        </div>
    
    
                                
                            <div class="aside_nc_contents" id="fired_emp">
                                    
    
            
                                        <div class="fired_icon"></div> <span>Fired</span> <span id="fired_emp_holder"> <?php  

                                        $fired_employees = get_employee_count($pdo,'fired' );
                                        echo  $fired_employees  ?></span>
                                                                        
                                                
    
                                </div>
                                       

                        </div>



                        <!-- END OF ASIDE -->


                   






                    </div>

    
            



            </div>
            <!-- END OF DB WRAPPER -->

        <script src="../HR_JS/employee_management_script.js"></script>
        <script src="../HR_JS/create_employee_error_handling.js"></script>
        <script src="../HR_JS/jp_darkmode.js"></script>
                                            
      
         
            
        </body>



</html>