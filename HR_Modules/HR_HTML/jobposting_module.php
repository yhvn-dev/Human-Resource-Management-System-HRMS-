
<?php 

    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';
    require_once '../HR_Includes/Jobpost_Functions/jobpost_model.inc.php';
    require_once '../HR_Includes/Jobpost_Functions/jobpost_contr.inc.php';
    require_once '../../Includes/Login_Functions/login_view.inc.php';

    require_once '../HR_Includes/Jobpost_Functions/jobpost_view.inc.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting Module</title>

    <link rel="stylesheet" href="../HR_CSS/jobposting_module.css">

    <!-- TEST LINK -->
    <link rel="stylesheet" href="../HR_Includes/Jobpost_Functions/Jobpost_Images/"> 
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

</head>


        <body id="body">


          
            <div class="jp_db_wrapper">

                    <div class="jp_db_backdrop_wrapper" >
                        
                        
                    </div>

                    <div class="jp_db_frontpage_wrapper">
                        

                        <div class="jp_container jp_logo_div">

                        <a class="logo_link" href="jobposting_module.php">

                            <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="db_logo" width="60">

                                <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                        </a>

                   


                        </div>

                        <div class="jp_container jp_header_div">

                            <div class="jp_left_header">

                                <div class="lh_buttons_div">

                                    <a href="dashboard.php" class="lh_buttons_href" id="jp_dashboard">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                        id="dashboard_button_icon" viewBox="0 0 24 24" fill=""><path d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z"></path></svg>
                                        <span class="jp_button_lbl" id="jp_dashboard_lbl">Dashboard</span>

                                    </a>

                                    <a href="jobposting_module.php" class="lh_buttons_href" id="jp_table">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                        id="table_button_icon"   viewBox="0 0 24 24" fill="currentColor"><path d="M15 21H9V10H15V21ZM17 21V10H22V20C22 20.5523 21.5523 21 21 21H17ZM7 21H3C2.44772 21 2 20.5523 2 20V10H7V21ZM22 8H2V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V8Z"></path></svg>
                                        <span class="jp_button_lbl" id="jp_table_lbl">Joblist</span>

                                    </a>

                                    
                                    <a href="../HR_HTML/jobposting_form.php" class="lh_buttons_href" id="jp_form">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"  
                                        id="form_button_icon"   viewBox="0 0 24 24" fill="currentColor"><path d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM6 7V9H14V7H6ZM6 11V13H14V11H6ZM6 15V17H11V15H6Z"></path></svg>
                                        <span class="jp_button_lbl" id="jp_form_lbl">Jobpost</span>
                                        
                                    </a>
                                
                                </div>
                            
                            </div>

                            
                    
                            <div class="jp_right_header">
                                
                            
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
                        <!-- END OF HEADER DIV -->



                        <!--START OF JP NUMBERS DIV ===========================================================================-->
                        <div class="jp_container jp_numbers_div" id="jp_numbers_div">

                              <div class="bdrop_jp_numbers_div">

                                    <div class="bdrop_jp_numbers_div_sub_div bd_number_card_div_a" id=>

                                        <div class="card_circles bd_number_card_circle_a">

                                        

                                        </div>


                                        <div class="card_circles bd_number_card_circle_b">

                                        
                                        
                                        </div>

                                    </div>

                                    <div class="bdrop_jp_numbers_div_sub_div bd_number_card_div_b"></div>
                                    <div class="bdrop_jp_numbers_div_sub_div bd_number_card_div_c"></div>




                                </div> 
 
                            <div class="nc number_card_a">

                                    <div class="nc_text_div nca_txt_div">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"
                                         id="job_posting_button_icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 5V2H10V5H4C3.44772 5 3 5.44772 3 6V14C3 14.5523 3.44772 15 4 15H17.4142L21.7071 10.7071C22.0976 10.3166 22.0976 9.68342 21.7071 9.29289L17.4142 5H12ZM12 17H10V22H12V17Z"></path></svg>
                                        <span>Total Jobpost</span>

                                    </div>

                                    <span class="jp_count_holder">  


                                        <?php     $total_jobposts = paste_total_jobposts_count($pdo );
                                        echo  $total_jobposts;    
                                        ?>


                                    </span>


                            </div>
                            <div class="nc number_card_b">

                                    <div class="nc_text_div ncb_txt_div">

                                        <svg id="published_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM13 9V16H11V9H6L12 3L18 9H13Z"></path></svg> 
                                        <span id="published_text">Published</span>
                                        <span class="published_count_holder" id="published_count_holder">  
                                            
                                            <?php  

                                              $total_published = paste_total_jobposts_count($pdo,"published");
                                                echo $total_published    
                                                
                                            ?>  </span>
                                            
                                    </div>

                            </div>


                            <div class="nc number_card_c">


                                 <div class="nc_text_div ncb_txt_div">

                                    <svg id="draft_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM13 9V16H11V9H6L12 3L18 9H13Z"></path></svg> 
                                    <span id="draft_text">Draft</span>
                                    <span class="draft_count_holder" id="draft_count_holder">  
                                        
                                        <?php  

                                            $total_draft = paste_total_jobposts_count($pdo,"draft");
                                            echo $total_draft   
                                            
                                        ?>  </span>
                                        
                                    </div>


                            </div>


                            

                                  
                               

                        </div>
                        <!--END OF JP NUMBERS DIV ===========================================================================  -->


                        
                        <!--JOB LIST TABLE DIV ===========================================================================  -->
                        <div class="jp_container jp_joblist_table">


                        

                        <!-- JOBLST TABLE'S LABELS AND STUFF -->
                        
                            <div class="jp_container jp_joblist_table_labels_stuff" id="jp_joblist_table_labels_stuff">


                                <div class="tb_lbl_div left_tb_lbl_div">


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

                                </div>


                          


                                <div class="tb_lbl_div right_tb_lbl_div">

                                        <a class="tb_add_jobpost_link" href="jobposting_form.php">

                                              + New Jobpost

                                        </a>


                                        <form action="" class="filter_form" method="POST">

                                            <select class="filter_status select_rj_appr" name="filter_status_inp" id="" onchange="this.form.submit()">

                                                <option value="none" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'none') ? 'selected' : '' ?>>Filter</option>

                                                <option value="draft" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'draft') ? 'selected' : '' ?>>Draft</option>

                                                <option value="published" <?= (isset($_POST['filter_status_inp']) && $_POST['filter_status_inp'] == 'published') ? 'selected' : '' ?>>Publish</option>


                                            </select>

                                        </form>








                                </div>

                                



                            </div>

                        
                           

                

                            <div class="joblist_content_div">

                      

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

                                            <th class="jp_th jp_th_id" id="jp_th_id">ID</th>
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
                                            <?php   check_delete_success() ?>

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
                                                                echo '<tr class="search-result-row" data-id="' . htmlspecialchars($job_a_search['jp_id']) . '"> 
                                                                    <td class="search-result-cell search-result_jp_id">' . htmlspecialchars($job_a_search['jp_id']) . '</td>
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

                                                        <td class="output_jp_tba_data tba_data_jp_id" id="tba_data_jp_id">' . 
                                                         htmlspecialchars($job_a['jp_id']) . 
                                                        '</td>

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

                        </div>
                        <!-- END OF JOB LIST TABLE DIV ===========================================================================  -->

                        

                        








































                        
                        <!--JOB LIST TABLE DIV B ===========================================================================  -->
                        <div class="jp_container jp_joblist_table_b" id="jp_joblist_table_b">

                            <div class="jp_joblist_table_labels_stuff_b">

                                <div class="tb_lbl_div left_tb_lbl_div_b">
                                  
                                    <div class="left_tb_lbl_form_title_div_b">

                                        <span class="form_title jp_table_a_title_b" id="jp_table_a_title_b">Jobpost Table</span>

                                    </div>

                               


                                </div>









                                <div class="tb_lbl_div right_tb_lbl_div_b">

                                 

                                </div>



                            </div>



                            <div class="joblist_content_div_b">

                                <div class="table_div_b">

                                    
                                   <?php 

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

                                        
                                        <tr class="jp_tr_b" id="jp_tr_b" >

                                            <th class="jp_th_b jp_th_b_id" id="jp_th_b_id">ID</th>
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




                                            <?php 
                                        

                                            //SEARCH RESULTS FOR TABLE B
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                if (empty($search_results)) { // Check if search results are empty
                                                    echo '<td colspan="11" class="noresults_td" id="noresults_td_b"><p class="table_noresult">No Results Found</p></td>';
                                                } else {
                                                
                                                        
                                                    usort($search_results, function($a, $b) {
                                                        return $b['jp_id'] - $a['jp_id']; 
                                                    });


                                                        foreach ($search_results as $job_b_search) {
                                                            echo '<tr class="search-result-row_b" id="search_result_row">'; // Add class to the whole row

                                                                echo '<td class="search-result-cell sr_jp"> ' . htmlspecialchars( $job_b_search['jp_id']) . '</td>';
                                                                echo '<td class="search-result-cell sr_salary_range_from "> ' . htmlspecialchars( $job_b_search['salary_range_from']) . '</td>';
                                                                echo '<td class="search-result-cell sr_salary_range_to "> ' . htmlspecialchars( $job_b_search['salary_range_to']) . '</td>';
                                                                echo '<td class="search-result-cell sr_employment_type "> ' . htmlspecialchars( $job_b_search['employment_type']) . '</td>';
                                                                echo '<td class="search-result-cell sr_req_qual "> ' . htmlspecialchars( $job_b_search['req_qual']) . '</td>';
                                                                echo '<td class="search-result-cell sr_pref_qual "> ' . htmlspecialchars( $job_b_search['pref_qual']) . '</td>';
                                                                echo '<td class="search-result-cell sr_appl_deadline"> ' . htmlspecialchars( $job_b_search['appl_deadline']) . '</td>';
                                                                echo '<td class="search-result-cell sr_posting_date "> ' . htmlspecialchars( $job_b_search['posting_date']) . '</td>';
                                                                echo '<td class="search-result-cell sr_contact_information "> ' . htmlspecialchars( $job_b_search['contact_information']) . '</td>';
                                                                echo '<td class="search-result-cell sr_status "> ' . htmlspecialchars( $job_b_search['status']) . '</td>';
                                                                                                                      
                                                            echo '
                                                            
                                                          <td class="tbl-button-action-div_b" id="tbla-button-action-div_b">
                                                                <div class="tbl-b-btn-container_b">


                                                                    <a href="../../HRMS_Front_Page/HRMS_Job_List/Job_List_Front_Page/Job_List_FP_HTML/jobpost_validation.php.php?id=' . $job_b_search['jp_id'] .'" class="button_form  tbl-post-button-form" id="tblb-post-button-form' . $job_b_search['jp_id'] . ' " >
                                                                        
                                                                        <button type="submit" class="tbla-button tbla-post-btn" id="tblb-post-btn" >        

                                                                           Publish
                                                                        
                                                                        </button>
                                                                        
                                                                    </a>


                                                              
                                                                    <a href="jobposting_edit_form.php?id='. $job_b_search['jp_id'] . '" class="button_form tbl-edit-button-form" id="tblb-edit-button-form">
                                                                        
                                                                        <button class="tbla-button tbla-edit-btn" id="tblb-edit-btn">        

                                                                            Edit 

                                                                        </button>

                                                                    </a>
                    
                                                                                                                             
                                                                    <a href="jobposting_delete.php?id='. $job_b_search['jp_id'] . '" class="button_form" id="tbl-delete-button-form">


                                                                        <button type="submit" class="tbla-button tbla-delete-btn" id="tblb-delete-btn">

                                                                            Delete

                                                                        </button>


                                                                    </a>                                 
                                                            


                                                                </div>


                                                            </td>';
                                                            
                                                        echo '</tr>';

                                                        }
                                                    }
                                            }
                                                                                            
                                            
                                        
                                            
                                            usort($jobposts_b, function($a, $b) {
                                                return $b['jp_id'] - $a['jp_id'];  
                                            });            
                                
                                            
                                            if ($jobposts_b && count($jobposts_b) > 0) {

                                         
                                                foreach ($jobposts_b as $job_b) {
                                            
                                                    echo '<tr class="tbb-result-row">';

                                                        echo '<td class="output_jp_tbb_data tbb_data_jp_id"> ' . htmlspecialchars($job_b['jp_id']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_salary_range_from "> ' . htmlspecialchars($job_b['salary_range_from']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_salary_range_to"> ' . htmlspecialchars($job_b['salary_range_to']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_employment_type "> ' . htmlspecialchars($job_b['employment_type']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_req_qual "> ' . htmlspecialchars($job_b['req_qual']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_pref_qual "> ' . htmlspecialchars($job_b['pref_qual']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_appl_deadline "> ' . htmlspecialchars($job_b['appl_deadline']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_posting_date "> ' . htmlspecialchars($job_b['posting_date']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_contact_information "> ' . htmlspecialchars($job_b['contact_information']) . '</td>';
                                                        echo '<td class="output_jp_tbb_data tbb_data_status"> ' . htmlspecialchars( $job_b['status']) . '</td>';

                                                    
                                                        echo '

                                                            <td class="tbl-button-action-div_b" id="tbla-button-action-div_b">
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
                    
                                                                  
                                 
                                                                    <!-- Delete Button -->
                                                                    <a href="jobposting_delete.php?id='. $job_b['jp_id'] .'" class="button_form" id="tbl-delete-button-form">
                                                                        <button type="submit" class="tbla-button tbla-delete-btn" id="tblb-delete-btn">
                                                                             Delete
                                                                        </button>
                                                                    </a>                                 
                                                            


                                                                      </div>


                                                            </td>';
                                                }
                                                
                                            } else {
                                                        echo '<tr><td colspan="7">No job posts found</td>';

                                                    echo '</tr>';
                                            }
                                        
                                            ?>



                                    </table>



                                </div>

                            </div>



                        </div>

                    <!-- END OF JOBPOST LIS TABLE B -->
                    </div>


                    <!-- END OF FRONT PAGE WRAPPER -->
            </div>

         
            <script src="../HR_JS/error_handling.js"></script>
            <script src="../HR_JS/jp_darkmode.js"></script>
            <script src="../HR_JS/script_jobposting_module.js"></script>


        </body>



</html>