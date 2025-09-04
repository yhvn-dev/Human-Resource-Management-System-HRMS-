<?php
    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';

    require_once '../../Includes/Login_Functions/login_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_model.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobseekers_Functions/db_jobseekers_contr.inc.php';


    require_once '../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_model.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_view.inc.php';
    require_once '../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_contr.inc.php';

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


    <link rel="stylesheet" href="../HR_CSS/dashboard.css">
  
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

  

</head>


        <body id="">
        
            <div class="db_wrapper" id="db_wrapper">

                
                    <div class="backdrop bd_db" id="db_bd_id">

                      

                    </div>

                    
                    <div class="template fp_wrapper">



                            <a href="dashboard.php" class="container header_logo" id="db_header_logo_div_id">

                                <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="db_logo" width="60">

                                <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                            </a>



                          <div class="container main_prompt_con">

                                <span class="title_con_text text_a">Dashboard</span>  
                                                        
                                <span class="title_con_text text_b"> Manage Jobseekers </span>

                         

                            </div>





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



                                        
                                     
                                        

                                        


                                            <form action="../../Includes/logout.inc.php" method="post" class="sbuttons_div-href" id="logout-btn-href">

                                                    
                                                <div class="sbuttons_div"  id="logout-btn">

                                                    <div class="btn_content_div btn_icon_div" id="btn_icon_logout_div">
                                    
                                                        <button class="sidebar-lbtn logout-form-btn"><svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                                        id="logout_button_icon"  viewBox="0 0 24 24" fill="currentColor"><path d="M5 11H13V13H5V16L0 12L5 8V11ZM3.99927 18H6.70835C8.11862 19.2447 9.97111 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.97111 4 8.11862 4.75527 6.70835 6H3.99927C5.82368 3.57111 8.72836 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C8.72836 22 5.82368 20.4289 3.99927 18Z"></path></svg></button> 

                                                    </div>
                                                    <div class="btn_content_div btn_lbl_div" id="btn_lbl_logout_div">

                                                        <button class="sidebar-lbtn logout-form-btn" id="logout-lbtn">Log out</button>

                                                    </div>

                                                </div>



                                            </form>

                                        



                                    </div>

                                    
                                </div> 
                                <!-- ENDS OF SIDEBAR  ======================================================================================- -->











                                <!-- HEADER ======================================================================================-->
                                <div class="container db_header" id="db_header_id">


                                    <!-- right header div -->
                                    <div class="header_div" id="right_header_div">



                                            <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png">

                                            <div class="right_h_contents " id="hd_role_div">

                                                <span id="hd_role_type"><?php output_role()?></span>
                                                
                                            </div>
                                        
                                            <p class="right_h_contents " id="user_greetings">Hi, <span id="hr_name" name="hr_name"><?php output_username() ?></span></p>


                                            <div class="darkmode_div" id="darkmode_div">

                                                <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                                                </div>
            
                                            </div>

                                    </div>

                                </div>
                                <!-- END OF HEADER -->



                                














                        <!-- NUMBER CONTENTS ==================================================================================== -->
                        <div class="container numbers_contents" id="db_numbers_contents_id">

                        <div class="nc_contents" id="employee_number">
                            
                            <div class="nc_lbl_div en_lbl_div">

                                <svg id="nc_employee_button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svgi>

                                <span>Employees</span>

                            </div>
                            

                            <span>
                                <?php
                        
                                 $total_employees = get_employee_count($pdo );
                                 echo $total_employees;    
                                 ?>

                            </span>   
                                

                        </div>




                        <div class="nc_contents" id="jobpost_number">
                            
                            <div class="nc_lbl_div jn_lbl_div">

                            <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"
                            id="nc_job_posting_button_icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 5V2H10V5H4C3.44772 5 3 5.44772 3 6V14C3 14.5523 3.44772 15 4 15H17.4142L21.7071 10.7071C22.0976 10.3166 22.0976 9.68342 21.7071 9.29289L17.4142 5H12ZM12 17H10V22H12V17Z"></path></svg>
                                <span>Total Jobpost</span>

                            </div>

                                <span>

                                <?php 
                                        $total_jobpost = paste_total_jobposts_count($pdo);

                                        echo $total_jobpost;
                                    
                                        // $published_jobposts = paste_total_jobposts_count($pdo, 'published');
                                        // echo "Published JP $published_jobposts ";
                                                                
                                ?>



                                </span>

                        </div>



                        <div class="nc_contents" id="jobseekers_number">
                            
                            <div class="nc_lbl_div jsn_lbl_div">

                            <svg id="nc_jobseekers_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 2L21 7V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918C3 2.44405 3.44495 2 3.9934 2H16ZM13.529 14.4464L15.7395 16.6569L17.1537 15.2426L14.9432 13.0322C15.8492 11.4983 15.6432 9.48951 14.3252 8.17157C12.7631 6.60948 10.2305 6.60948 8.66839 8.17157C7.1063 9.73367 7.1063 12.2663 8.66839 13.8284C9.98633 15.1464 11.9951 15.3524 13.529 14.4464ZM12.911 12.4142C12.13 13.1953 10.8637 13.1953 10.0826 12.4142C9.30156 11.6332 9.30156 10.3668 10.0826 9.58579C10.8637 8.80474 12.13 8.80474 12.911 9.58579C13.6921 10.3668 13.6921 11.6332 12.911 12.4142Z"></path></svg>
                                <span>Total Jobseekers</span>
                            </div>

                                <span>
                                        
                                    <?php   
                                            $total_jobseekers = paste_jobseekers_count($pdo);
                                            echo $total_jobseekers;      
                                    ?>
                                    
                                </span>
                        

                        </div>







                        </div>
                        <!-- END OF NUMBER CONTENTS ==================================================================================== -->


                        <div class="container number_contents_b">
                                                            
                            <div class="ncb_div fdiv approved_jobseekers" id="approved_jobseekers">


                                <div class="appr_text_div">

                                    <span class="appr_text" id="appr_text">   

                                        <svg id="appr_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2 8.99997H5V21H2C1.44772 21 1 20.5523 1 20V9.99997C1 9.44769 1.44772 8.99997 2 8.99997ZM7.29289 7.70708L13.6934 1.30661C13.8693 1.13066 14.1479 1.11087 14.3469 1.26016L15.1995 1.8996C15.6842 2.26312 15.9026 2.88253 15.7531 3.46966L14.5998 7.99997H21C22.1046 7.99997 23 8.8954 23 9.99997V12.1043C23 12.3656 22.9488 12.6243 22.8494 12.8658L19.755 20.3807C19.6007 20.7554 19.2355 21 18.8303 21H8C7.44772 21 7 20.5523 7 20V8.41419C7 8.14897 7.10536 7.89462 7.29289 7.70708Z"></path></svg>
                                        Approved 

                                    </span>
                                                                                
                            

                                    <span id="approve_js_count_holder">
                                        <?php       
                                            $approved_jobseekers = count_jobseekers($pdo, 'approved');
                                            echo $approved_jobseekers;                                
                                        ?>  
                                    </span>


                                </div>
                            
                                    

                                                

                                    

                            </div>

                        <div class="ncb_div fdiv rejected_jobseekers">       


                            <div class="rjct_text_div">

                                    <span class="rjct_text" id="rjct_text">

                                        <svg id="rjct_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 15H19V3H22C22.5523 3 23 3.44772 23 4V14C23 14.5523 22.5523 15 22 15ZM16.7071 16.2929L10.3066 22.6934C10.1307 22.8693 9.85214 22.8891 9.65308 22.7398L8.8005 22.1004C8.3158 21.7369 8.09739 21.1174 8.24686 20.5303L9.40017 16H3C1.89543 16 1 15.1046 1 14V11.8957C1 11.6344 1.05118 11.3757 1.15064 11.1342L4.24501 3.61925C4.3993 3.24455 4.76447 3 5.16969 3H16C16.5523 3 17 3.44772 17 4V15.5858C17 15.851 16.8946 16.1054 16.7071 16.2929Z"></path></svg>

                                        Rejected
                                    </span>

                                    <span id="rejected_js_count_holder">
                                        <?php 
                                        
                                            $rejected_jobseekers = count_jobseekers($pdo, 'rejected');
                                            echo $rejected_jobseekers; 
                                                                                        
                                        ?>  
                                    </span>
                                        


                            </div>


                        </div> 



                        </div>





                                         <?php 

                                            if ($pdo === null) {
                                                die("Database connection is not established.");
                                            }
                                                    

                                            $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';

                                                $jobseekers = populate_table_with_jobseekers_overview($pdo,
                                                $jobseekers_id = 0,
                                                $firstname = '',
                                                $lastname = '',
                                                $job_title = '',
                                                $email = '',
                                                $phone_number = '',
                                                $resume = '',
                                                $status = '');


                                                if ($filter_status !== 'none') {
                                                    $jobseekers = array_filter($jobseekers, function($js) use ($filter_status) {
                                                        return isset($js['status']) && strtolower(trim($js['status'])) === strtolower(trim($filter_status));
                                                    });
                                                }


                                            ?>






                        <!-- MAIN CONTENTS ==================================================================================== -->
                        <div class="container main_contents" id="db_main_contents_id">

                            <div class="mc_div mc_header">

                                <div class="mcd_div mcdiv_left">

                                    <span class="mc_header_text" id="mc_header_jstbl_txt">Jobseekers Table</span>
                                        <?php 

                                                $search_results = [];
                                                $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';
                                                $hr_search = isset($_POST["db_inp_search"]) ? htmlspecialchars(trim($_POST["db_inp_search"])) : ''; 

                                                
                                                require_once '../../Includes/dbh.inc.php';

                                                if (!isset($pdo)) {
                                                    die("Database connection is not established.");
                                                }

                                                try {
                                                


                                                    $query = "SELECT * FROM jobseekers_ WHERE 1=1";


                                                    if (!empty($hr_search)) {
                                                        $query .= " AND job_title LIKE :job_title";
                                                    }

                                                    // Add filter condition
                                                    if ($filter_status !== 'none') {
                                                        $query .= " AND status = :status_filter";
                                                    }

                                                    $stmt = $pdo->prepare($query);

                                                    // Bind parameters dynamically
                                                    if (!empty($hr_search)) {
                                                        $hr_search = "%" . $hr_search . "%";
                                                        $stmt->bindParam(":job_title", $hr_search);
                                                    }
                                                    
                                                    
                                                    if ($filter_status !== 'none') {
                                                        $stmt->bindParam(":status_filter", $filter_status);
                                                    }

                                                    $stmt->execute();
                                                    $search_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                    $stmt = null;

                                                } catch (PDOException $e) {
                                                    die("Query Failed: " . $e->getMessage());
                                                }

                                                ?>

                                        <form class="db_table_search" id="db_table_search_form_a" method="POST">
                                            <input type="text"  class="db_tb_inp_search" id="db_inp_search_a" name="db_inp_search" placeholder="">
                                            <label for="db_inp_search_a" class="db_tb_search_lbl" id="db_tp_search_lbl_a">Search by <span class="hl_text db_tb_search_lbl" id="hl_field_category">Applied Job</span></label>
                                                <button type="submit" class="search-btn" id="db_tb_search-btn">                                                            
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="search-btn-svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"></path></svg>                                       
                                                </button>
                                        </form>
                                    </div>
                                        
                                        <div class="mcd_div mcdiv_right">


                                      
                                    <form action="" class="filter_form" method="POST">

                                        <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                            <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                            <option value="pending" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'pending') ? 'selected' : '' ?>>Pending</option>

                                            <option value="approved" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'approved') ? 'selected' : '' ?>>Approved</option>

                                            <option value="rejected" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'rejected') ? 'selected' : '' ?>>Rejected</option>
                                        </select>

                                    </form>

                                       

                                        </div>

                            </div>


                            <div class="mc_div mc_content_div">

                        

                                    <div class="mc_table_div">
                                        

                                        <!-- GET JOBSEEKERS OVERVIEW ============================================-->

      

                                        <table class="db_js_table">

                                            <?php   check_crem_for_errors()   ?>

                                            <?php  
                                                prompt_appprove_js_status_success()   
                                            ?>
                                            <?php
                                            
                                                prompt_reject_js_status_success()

                                            ?>

                                            <?php

                                                prompt_delete_js_status_success()
                                            
                                            
                                            ?>


                                            


                                            <tr class="mc_th_tr" id="mc_th_tr">


                                                <th class="mc_th th_firstname">Firstname</th>
                                                <th class="mc_th th_lastname">Lastname</th>  
                                                <th class="mc_th th_applied_job">Applied Job</th>
                                                <th class="mc_th th_email">Email</th>
                                                <th class="mc_th th_phone_num">Phone Number</th>
                                                <th class="mc_th th_resume">Resume</th>        
                                                <th class="mc_th th_status">Status</th>
                                                <th class="mc_th th_action">Action</th>
                                            
                                            </tr>

                                            <?php 

                                                $display_jobseekers = [];
                                                            
                                                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                                                        $display_jobseekers = $search_results;
                                                    }else{
                                                        $display_jobseekers = $jobseekers;
                                                    }
                    
                                                    usort($display_jobseekers, function($a,$b){
                                                        return $b['js_id'] - $a['js_id'];
                                                    });

                                                ?>


                                                <!-- SEARCH RESUTS =================================== -->

                                            <?php  

                                                if(count($display_jobseekers) > 0){

                                                    // Loop through sorted results
                                                    foreach ($display_jobseekers as $js_result) {                                                    
                                                        echo '                                                      
                                                        <tr class="search_mc_data_tr">
                                                        
                                                            <td class="search_mc_tb_data search_td_output_js_firstname"> ' . htmlspecialchars($js_result["firstname_"])  . ' </td>
                                                            <td class="search_mc_tb_data search_td_output_js_lastname">' . htmlspecialchars($js_result["lastname_"])  . ' </td>
                                                            <td class="search_mc_tb_data search_td_output_js_job_title">' . htmlspecialchars($js_result["job_title"])  . '</td>
                                                            <td class="search_mc_tb_data search_td_output_js_email">' . htmlspecialchars($js_result["email_"])  . '</td>
                                                            <td class="search_mc_tb_data search_td_output_js_phone_num">' . htmlspecialchars($js_result["phone_number_"]) . '</td>
                                                            <td class="search_mc_tb_data search_td_output_js_resume">
                                                                <a  href="http://localhost/HRM_System/HRMS_Front_Page/HRMS_Job_List/Job_List_Includes/doc_file_directory/' . htmlspecialchars($js_result["resume_path_"]) . '" class="resume-link">
                                                                ' . htmlspecialchars($js_result["resume_path_"]) . '
                                                                </a>
                                                            </td>                                                      
                                                            <td class="search_mc_tb_data search_td_output_js_status">' . htmlspecialchars($js_result["status"]) . '</td>
                                                            <td class="search_mc_tb_data search_td_output_js_action">
                                                                <div class="tb_button_div">
                                                                        <a href="jobseekers_validation_approve.php?id='.$js_result["js_id"].'" class="mc_tb_btn approve-button">Approve</a>
                                                                        <a href="jobseekers_validation_reject.php?id='.$js_result["js_id"].'" class="mc_tb_btn reject-button">Reject</a>
                                                                </div>  
                                                            </td>          
                                                    </tr>
                                                    ';                         
                                                     }

                                                }else{
                                                    echo 
                                                    ' tr>
                                                        <td colspan="10" class="noresults_td" id="noresults_td">
                                                            <p class="table_noresult">No Results Found</p>
                                                        </td>
                                                    </tr>';
                                                }                
                                                ?>
                                        </table>                                                            
                                                        


                                    </div>



                        
                            </div>







                        </div>
                        <!-- END MAIN CONTENTS ==================================================================================== -->



                        <div class="container aside" id="db_aside_id">   


                            <div class="aside_div vector_div">

                                    <div class="vd vd_a">

                                        <span>CHOOSE</span>
                                    
                                    </div>

                                    <div class="vd vd_b">

                                         <span>NodeLab</span>
                                         
                                    </div>

                                    <div class="vd vd_c">


                                    </div>


                                    <img  id="aside_vector"  src="../../HRMS_Images/FP_VECTOR_B.png">
                                                                        
                            </div>




                        <div class="aside_div status_history">


                            <span id="status_history_button"> 
                                    
                                    <svg id="status_history_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.298 22 8.69525 21.5748 7.29229 20.8248L2 22L3.17629 16.7097C2.42562 15.3063 2 13.7028 2 12C2 6.47715 6.47715 2 12 2ZM13 7H11V14H17V12H13V7Z"></path></svg>             

                                    <p id="status_history_text">View Status History
                                        
                                  
                                    
                                    </p>

                                
                            
                            </span>

                  
                        







                            <div class="aside_main_content_div">

                                        
                            <div class="aside_mc_table_div">



                                    <!-- GET JOBSEEKERS STATUS DATE -->


                           
                                    <table class="aside_js_table">

                                    

                                        <tr class="mc_th_tr" id="mc_th_tr">


                                            <th class="mc_th th_firstname">Firstname</th>
                                            <th class="mc_th th_lastname">Lastname</th>  
                                            <th class="mc_th th_applied_job">Applied Job</th>
                                            <th class="mc_th th_submission_date">Submission Date</th>
                                            <th class="mc_th th_approval_date">Approve Date</th>
                                            <th class="mc_th th_rejection_date">Rejection Date</th>
  
                                            <th class="mc_th th_status">Status</th>
                                            <th class="mc_th th_action">Action</th>
                                   
                                        
                                        </tr>




                                        <?php 

                                        usort(   $jobseekers, function($a, $b) {
                                            return $b['js_id'] - $a['js_id'];  
                                        });  

                                        
                                        if($jobseekers && count($jobseekers) > 0){

                                            foreach($jobseekers as $js){

                                                echo '
                                                        
                                                    <tr class="mc_data_tr">

                                                        <td class="aside_tb_data td_output_js_firstname"> ' . htmlspecialchars($js["firstname_"])  . ' </td>
                                                        <td class="aside_tb_data td_output_js_lastname">' . htmlspecialchars($js["lastname_"])  . ' </td>
                                                        <td class="aside_tb_data td_output_js_job_title">' . htmlspecialchars($js["job_title"])  . '</td>
                                                       
                                                        <td class="aside_tb_data td_output_submission_date">' . htmlspecialchars($js["created_at"]) . '</td>
                                                        <td class="aside_tb_data td_output_approval_date">' . htmlspecialchars($js["approval_date"]) . '</td>
                                                
                                                        <td class="aside_tb_data td_output_rejection_date">' . htmlspecialchars($js["rejection_date"]) . '</td>
                                                        <td class="aside_tb_data td_output_js_status">' . htmlspecialchars($js["status"]) . '</td>
                                                        <td class="mc_tb_data td_output_js_action">
                                                            <div class="tb_button_div">                                                                                                   
                   
                                                               ' . ($js["status"] === "Rejected" ? '<a href="jobseekers_validation_delete.php?id=' . $js["js_id"] . '" class="mc_tb_btn delete-button">Delete</a> ' : '') . '

                                                            </div>
                                                        </td>
                                                    
                                                        

                                                </tr>

                                                ';

                                                
                                            }

                                        }else{
                                            echo '<tr><td colspan="7">No job posts found</td>';
                                        }

                                        
                                        ?>
                                                                        


                                    </table>                                                            
                                                    


                                    </div>



                            </div>


                            

                        </div>





                        </div>
                        <!-- END OF ASIDE -->


                   






                    </div>

    
            



            </div>
            <!-- END OF DB WRAPPER -->

                                            
            <script src="../HR_JS/db_darkmode.js"></script>
            <script src="../HR_JS/db_interaction_script.js"></script>
            <script src="../HR_JS/db_error_handling.js"></script>
            
            
        </body>



</html>