
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpost Dashboard</title>

    <link rel="stylesheet" href="../HR_CSS/jobposting_db.css">

</head>
        <body>


            <div class="jp_wrapper">

                <a href="" class="container logo_frame">

                    <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                        class="logo" id="db_logo" width="60">

                    <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                </a>

                <div class="container sidebar">
                    
                    <div class="sidebar_buttons_div">

                        <!-- DASHBOARD # -->
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
                    
                    
                        <!-- RECRUITMENT # -->
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


                        <!-- JOB POSTING # -->
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



                <!-- CONTAINER HEADER -->
                <div class="container header">

                    <div class="header_parts left_header">
                    </div>

                    <div class="header_parts right_header">

                        <img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/FEMALE_VECTOR_A_WHITE.png">
                
                        <div class="right_h_contents " id="hd_role_div">
                            <span id="hd_role_type"><?php output_role()?></span>        
                        </div>
                    
                        <p class="right_h_contents " id="user_greetings"><span id="hr_name" name="hr_name"><?php output_username()?></span></p>

                        <div class="darkmode_div" id="darkmode_div">

                            <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">
                            </div>

                                
                        </div>
              
                    </div>
    
                </div>





                <!-- CONTAINER JP NUMBER FRAME -->
                <div class="container jp_number_frame">

                    <ul class="nc number_card">a</ul>
                    <ul class="nc number_card">b</ul>
                    <ul class="nc number_card total_jobpost">
                        
                        <ol class="total_boxes label_box">
                                <svg id="draft_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM13 9V16H11V9H6L12 3L18 9H13Z"></path></svg> 
                                <span id="draft_text">Draft</span>
                        </ol>
                        
                        <div class="total_boxes nc_text_div total_jobpost_txt_div">

                            <span class="draft_count_holder" id="draft_count_holder">  
                                <?php  
                                    $total_draft = paste_total_jobposts_count($pdo,"draft");
                                    echo $total_draft   
                                ?>  
                            </span>
                                
                        </div>



                    </ul>

                </div>








                <!-- CONTAINER TABLE A WORKSPACE -->
                <div class="container table_a_workspace" id="table_a_workspace">
                                
                
                    <div class="jp_container jp_joblist_table_labels_stuff" id="jp_joblist_table_labels_stuff">


                        <section class="tb_lbl_div left_tb_lbl_div">

                            <div class="left_tb_lbl_form_title_div">
                                    <span class="form_title jp_table_a_title" id="jp_table_a_title">Jobpost Table</span>
                            </div>       
                                   
                            <?php 

                                $search_results = [];
                                $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';
                                $hr_search = isset($_POST["jp_inp_search"]) ? htmlspecialchars(trim($_POST["jp_inp_search"])) : ''; 

                                // Include the database connection
                                require_once '../../Includes/dbh.inc.php';

                                if (!isset($pdo)) {
                                    die("Database connection is not established.");
                                }

                                try {
                                    
                                    $query = "SELECT * FROM jobposts_ WHERE 1=1";


                                    if (!empty($hr_search)) {
                                        $query .= " AND field_category LIKE :field_category_search";
                                    }

                                    // Add filter condition
                                    if ($filter_status !== 'none') {
                                        $query .= " AND status = :status_filter";
                                    }

                                    $stmt = $pdo->prepare($query);

                                    // Bind parameters dynamically
                                    if (!empty($hr_search)) {
                                        $hr_search = "%" . $hr_search . "%";
                                        $stmt->bindParam(":field_category_search", $hr_search);
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

                            <form class="jp_table_search" id="jp_table_search_form_a" method="POST">

                                <input type="text"  class="jp_tb_inp_search" id="jp_inp_search_a" name="jp_inp_search" placeholder="">
                                <label for="jp_inp_search_a" class="jp_tb_search_lbl" id="jp_tp_search_lbl_a">Search by <span class="hl_text jp_tb_search_lbl" id="hl_field_category">Field Category </span></label>

                                <button type="submit" class="search-btn" id="jp_tb_search-btn">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" id="search-btn-svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"></path></svg>
                                
                                </button>

                            </form>

                        </section>


                          


                                <div class="tb_lbl_div right_tb_lbl_div">

                                        <!-- add -->
                                        <a class="right_tb_box tb_add_jobpost_link" href="jobposting_form.php">
                                              + New Jobpost
                                        </a>

                                        <!-- filter -->
                                        <form action="" class="right_tb_box filter_form" method="POST">

                                            <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                                <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                                <option value="draft" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'draft') ? 'selected' : '' ?>>Draft</option>

                                                <option value="published" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'published') ? 'selected' : '' ?>>Publish</option>

                                            </select>

                                        </form>

                                        <!-- switch -->
                                        <div class="right_tb_box table_switch_frame">
                                            
                                            <button class="table_switch" id="table-a-switch"><</button>
                                            <button class="table_switch" id="table-b-switch">></button>

                                        </div>

                                </div>

                                
                            </div>

                        
                           

            
                            <div class="joblist_content_div" id="table_a_cd">
                      

                                <div class="table_div">

                        
                                   <?php 

                            
                                    if ($pdo === null) {
                                        die("Database connection is not established.");
                                    }
                                                                    
                                        $jobposts_a =  get_jobposts_a(
                                            $pdo, 
                                     $jobpost_id = 0,
                                      $job_title = '', 
                                $job_description = '', 
                                 $field_category = '', 
                                        $min_age = 0, 
                                        $max_age = 0, 
                                   $job_location = '',
                                                 $status = '',
                                        ); 
                                  
                                    ?>
                                                                    
                                    <table class="jp_table">

                                        <tr class="jp_tr" id="jp_tr"> 

                                 
                                            <th class="jp_th jp_th_job_title" id="jp_th_job_title">Job Title</th>
                                            <th class="jp_th jp_th_job_description" id="jp_th_job_description">Job Description</th>
                                            <th class="jp_th jp_th_field_category" id="jp_th_field_category">Field Category</th>
                                            <th class="jp_th jp_th_min_age" id="jp_th_min_age">Min Age</th>
                                            <th class="jp_th jp_th_max_age" id="jp_th_max_age">Max Age</th>
                                            <th class="jp_th jp_th_job_location" id="jp_th_job_location">Job Location</th>
                                            <th class="jp_th jp_th_status" id="jp_th_status">Status</th>
                                            <th class="jp_th jp_th_action" id="jp_th_action">Action</th>
                                        
                                        </tr>     
                                        
                                        <div class="validation_div">

                                            <?php check_jp_form_errors() ?>
                                            <?php check_delete_success() ?>

                                        </div>


                                                <?php

                                                  
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        if (empty($search_results)) {
                                                            echo '<td colspan="9" class="noresults_td" id="noresults_td_a">
                                                                    <p class="table_noresult">No Results Found</p>
                                                                </td>';
                                                        } else {
                                                         
                                                            usort($search_results, function($a, $b) {
                                                                return $b['jp_id'] - $a['jp_id']; 
                                                            });

                                                            // Loop through sorted results
                                                            foreach ($search_results as $job_a_search) {
                                                                echo '

                                                                    <td class="search-result-cell search-result_job_title">' . htmlspecialchars($job_a_search['job_title']) . '</td>
                                                                    <td class="search-result-cell search-result_job_description ">' . htmlspecialchars($job_a_search['job_description']) . '</td>
                                                                    <td class="search-result-cell search-result_field_category ">' . htmlspecialchars($job_a_search['field_category']) . '</td>
                                                                    <td class="search-result-cell search-result_min_age ">' . htmlspecialchars($job_a_search['min_age']) . '</td>
                                                                    <td class="search-result-cell search-result_max_age ">' . htmlspecialchars($job_a_search['max_age']) . '</td>
                                                                    <td class="search-result-cell search-result_job_location">' . htmlspecialchars($job_a_search['job_location']) . '</td>
                                                                    <td class="search-result-cell search-result_status">' . htmlspecialchars($job_a_search['status']) . '</td>
                                                                    <td class="tbl-button-action-div" id="tbla-button-action-div">
                                                                        <div class="tbl-a-btn-container">
                                                                        
                                                                            <!-- Post Button -->

                                                                            <a href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php?id='. $job_a_search['jp_id'] .'" class="button_form  tbl-post-button-form" id="tbl-post-button-form' . $job_a_search['jp_id'] . 'class="button_form" id="tbl-post-button-form">
                                                                                <button type="submit" class="tbla-button tbla-post-btn" id="tbla-search-post-btn">
                                                                                    Publish
                                                                                </button>
                                                                            </a>

                                                                            <!-- Edit Button -->
                                                                            <a href="jobposting_edit_form.php?id='.$job_a_search['jp_id'].'" class="button_form tbl-edit-button-form" id="tbl-edit-button-form">
                                                                                <button class="tbla-button tbla-edit-btn" id="tbl-edit-btn">
                                                                                   
                                                                                        Edit
                                                                                    
                                                                                </button>
                                                                            </a>

                                                                            <!-- Delete Button -->
                                                                            <a href="jobposting_delete.php?id=' . $job_a_search['jp_id'] . '" class="button_form" id="tbl-delete-button-form">
                                                                                <button type="submit" class="tbla-button tbla-delete-btn" id="tbla-delete-btn">
                                                                                   Delete
                                                                                </button>
                                                                            </a>

                                                                        </div>
                                                                    </td>

                                                                </tr>';
                                                            }
                                                        }
                                                    }

                                            
                                            // OUTPUT JOB POSTS
                                         
                                            usort($jobposts_a, function($a, $b) {
                                                return $b['jp_id'] - $a['jp_id'];  
                                            });  


                                            if ($jobposts_a && count($jobposts_a) > 0) {
                                              
                                                foreach ($jobposts_a as $job_a) {

                                                
                                                    echo '<tr class="tba_output_jp_tr" id="tba_output_jp_tr">

                                                      
                                                        <td class="output_jp_tba_data tba_data_job_title editable" id="tba_data_job_title">' .
                                                         htmlspecialchars($job_a['job_title']) .
                                                        '</td>

                                                        <td class="output_jp_tba_data tba_data_job_description editable" id="tba_data_job_description">' .
                                                         htmlspecialchars($job_a['job_description']) .
                                                        '</td>

                                                        <td class="output_jp_tba_data tba_data_field_category editable" id="tba_data_field_category">' .
                                                        htmlspecialchars($job_a['field_category']) . 
                                                        '</td>

                                                        <td class="output_jp_tba_data tba_data_min_age editable" id="tba_data_min_age">' .
                                                        htmlspecialchars($job_a['min_age']) .
                                                        '</td>

                                                        <td class="output_jp_tba_data tba_data_max_age editable" id="tba_data_max_age">' .
                                                        htmlspecialchars($job_a['max_age']) . 
                                                        '</td>

                                                        <td class="output_jp_tba_data tba_data_job_location editable" id="tba_data_job_location">' .
                                                        htmlspecialchars($job_a['job_location'])  .
                                                        '</td> 

                                                        <td class="output_jp_tba_data tba_data_status"> ' . 
                                                        htmlspecialchars( $job_a['status']) .
                                                        '</td> 
                                                        
                                                    

                                                         <td class="tbl-button-action-div" id="tbla-button-action-div">

                                                            <div class="tbl-a-btn-container">

                                                                <a href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php?id='.$job_a['jp_id'] .'" class="button_form  tbl-post-button-form" id="tbl-post-button-form' . $job_a['jp_id'] . ' " >
                                                                    
                                                                    <button type="submit" class="tbla-button tbla-post-btn" id="tbl-post-btn" >        

                                                                        Publish
                                                                    
                                                                    </button>
                                                                    
                                                                </a>
                                    
                                                                <a href="jobposting_edit_form.php?id='. $job_a['jp_id'] . '" class="button_form tbl-edit-button-form">
                                                                    <button class="tbla-button tbla-edit-btn" id="tbl-edit-btn">
                                                                        Edit
                                                                    </button>
                                                                </a>

                                                                
                                                                <a href="jobposting_delete.php?id='. $job_a['jp_id'] .' " class="button_form tbl-delete-button-form" id="tbl-delete-button-form ' . $job_a['jp_id'] . ' " >
                                                                    
                                                                    <button type="submit" class="tbla-button tbla-delete-btn" id="tbl-delete-btn" >        

                                                                    Delete

                                                                    </button>
                                                                
                                                                </a>

                                                                
                                                            </div>

                                                           

                                                         </td>';

                                            
                                                }
                                            } else {
                                                        echo '<tr><td colspan="9">No job posts found</td>';

                                                    echo '</tr>';
                                            }
                                            
                                                                      
                                        ?>        

                                    </table>

                                </div>

                            </div>
                            <!-- END OF TABLE A CONTENT DIV -->

                        




                            <!-- TABLE B CONTENT  -->
                            <div class="table_b_content_div" id="table_b_cd">

                                 <div class="table_div">

                        
                                   <?php 

                            
                                    if ($pdo === null) {
                                        die("Database connection is not established.");
                                    }
                                        if ($pdo === null) {
                                        die("Database connection is not established.");
                                    }
                                          
                                         $jobposts_b =   populate_with_jobposts_b(
                                    $pdo, 
                             $jobpost_id = 0,
                      $salary_range_from = 0,
                        $salary_range_to = 0,
                        $employment_type = '',
                $required_qualifications = '',
               $preferred_qualifications = '',
                   $application_deadline = '',
                           $posting_date = '',
                    $contact_information = ''
                                        ); 
                                  
                                    ?>
                                                                    
                                    <table class="jp_table_b">

                                        <tr class="jp_tr" id="jp_tr"> 

                                            <th class="jp_th_b jp_th_b_salary_range_from" id="jp_th_b_salary_range_from">Salary Range From</th>
                                            <th class="jp_th_b jp_th_b_salary_range_to" id="jp_th_b_salary_range_to">Salary Range To</th>
                                            <th class="jp_th_b jp_th_b_employment" id="jp_th_b_employment">Employment Type</th>
                                            <th class="jp_th_b jp_th_b_req_qual" id="jp_th_b_req_qual">Required Qualifications</th>
                                            <th class="jp_th_b jp_th_b_pref_qual" id="jp_th_b_pref_qual">Preferred Qualificaitons</th>
                                            <th class="jp_th_b jp_th_b_app_deadline" id="jp_th_b_app_deadline">Application Deadline</th>
                                            <th class="jp_th_b jp_th_b_posting_date" id="jp_th_b_posting_date">Posting Date</th>
                                            <th class="jp_th_b jp_th_b_contact_information" id="jp_th_b_contact_information">Contact Information</th>
                                            <th class="jp_th_b jp_th_b_status" id="jp_th_b_status">Status</th>                                          
                                            <th class="jp_th_b jp_th_b_action" id="jp_th_b_action">Action</th>
                                        
                                        </tr>     
                                        
                                        <div class="validation_div">

                                            <?php check_jp_form_errors() ?>
                                            <?php check_delete_success() ?>

                                        </div>

                                        <?php   

                                          if (empty($search_results)) {
                                                echo '<tr><td colspan="10" class="noresults_td" id="noresults_td_b">
                                                        <p class="table_noresult">No Results Found</p>
                                                    </td></tr>';
                                            } else {
                                                usort($search_results, function($a, $b) {
                                                    return $b['jp_id'] - $a['jp_id'];
                                                });

                                            foreach ($search_results as $job) {

                                                echo '<tr class="search-result-row_b">';
                                                echo '<td>' . htmlspecialchars($job['salary_range_from']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['salary_range_to']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['employment_type']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['req_qual']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['pref_qual']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['appl_deadline']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['posting_date']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['contact_information']) . '</td>';
                                                echo '<td>' . htmlspecialchars($job['status']) . '</td>';

                                                echo '<td class="tbl-button-action-div_b">

                                                    <div class="tbl-b-btn-container_b">

                                                        <a href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php?id='.$job['jp_id'] .'" class="button_form  tbl-post-button-form" id="tblb-post-button-form' . $job['jp_id'] . ' " >
                                                            <button type="submit" class="tbla-button tbla-post-btn" id="tblb-post-btn" >        
                                                                Publish                                                           
                                                            </button>                                                 
                                                        </a>

                                                        
                                                        <a href="jobposting_edit_form.php?id='. $job['jp_id'] .'" class="button_form tbl-edit-button-form" id="tblb-edit-button-form">
                                                            <button class="tbla-button tbla-edit-btn" id="tblb-edit-btn">        
                                                                Edit
                                                            </button>
                                                        </a>
            
                                    
                                                        <a href="jobposting_delete.php?id='. $job['jp_id'] .'" class="button_form" id="tbl-delete-button-form">
                                                            <button type="submit" class="tbla-button tbla-delete-btn" id="tblb-delete-btn">
                                                                Delete
                                                            </button>
                                                        </a>       
                                                        
                                                    </div>
                                                    
                                                    </td>';


                                                echo '</tr>';
                                                }
                                        }
                                        ?>

                                        <?php

                                            usort($jobposts_b, function($a, $b) {
                                            return $b['jp_id'] - $a['jp_id'];  
                                            });

                                        ?>

                                        <tbody id="job-table-body">

                                        
                                        <?php 
                                 
                                            if ($jobposts_b && count($jobposts_b) > 0) {
                                      
                                                foreach ($jobposts_b as $job_b) {
                                                    
                                                    echo '<tr class="tbb-result-row">';

                                                        echo '<td class="output_jp_tbb_data tbb_data_salary_range_from "> ' . htmlspecialchars($job_b['salary_range_from']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_salary_range_to"> ' . htmlspecialchars($job_b['salary_range_to']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_employment_type "> ' . htmlspecialchars($job_b['employment_type']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_req_qual "> ' . htmlspecialchars($job_b['req_qual']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_pref_qual "> ' . htmlspecialchars($job_b['pref_qual']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_appl_deadline "> ' . htmlspecialchars($job_b['appl_deadline']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_posting_date "> ' . htmlspecialchars($job_b['posting_date']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_contact_information "> ' . htmlspecialchars($job_b['contact_information']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_status"> ' . htmlspecialchars( $job_b['status']) . '</td>';
                                           
                                                
                                                        echo'   <td class="" id="tbla-button-action-div_b">

                                                        <div class="tbl-b-btn-container_b">

                                                            <a href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php?id='.$job_b['jp_id'] .'" class="button_form  tbl-post-button-form" id="tblb-post-button-form' . $job_b['jp_id'] . ' " >
                                                                <button type="submit" class="tbla-button tbla-post-btn" id="tblb-post-btn" >        
                                                                    Publish                                                           
                                                                </button>
                                                            </a>

                                                            <a href="jobposting_edit_form.php?id='. $job_b['jp_id'] .'" class="button_form tbl-edit-button-form" id="tblb-edit-button-form">                                                            
                                                                <button class="tbla-button tbla-edit-btn" id="tblb-edit-btn">        
                                                                    Edit
                                                                </button>
                                                            </a>
            
                                                            <a href="jobposting_delete.php?id='. $job_b['jp_id'] .'" class="button_form" id="tbl-delete-button-form">
                                                                <button type="submit" class="tbla-button tbla-delete-btn" id="tblb-delete-btn">
                                                                    Delete
                                                                </button>
                                                            </a>                                 

                                                        </div>


                                                        </td>';

                                                       
                                                    echo  '</tr>';
                                                }
                                                
                                            } else {
                                                  echo '<tr><td colspan="7">No job posts found</td>';
                                            echo '</tr>';
                                            }
                                        
                                        ?>

                                     </tbody>


                                                                                                     
                                    </table>



                                </div>
                                                
                            </div>
                            

                            
                        </div>
                        <!-- END OF JOB LIST TABLE DIV ==========================================================  -->





                
                </div>








            
                
            </div>



            
        </body>


        <script src="../HR_JS/jp_darkmode.js"></script>
        <script src="../HR_JS/jp_functions.js"></script>
</html>
