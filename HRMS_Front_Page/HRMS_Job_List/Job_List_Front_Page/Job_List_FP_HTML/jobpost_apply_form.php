
<?php 


require_once '../../../../Includes/dbh.inc.php';  
require_once '../../../../Includes/config_session.inc.php';

require_once '../../Job_List_Includes/jobpost_apply_view.inc.php';




if ($pdo === null) {
    die("Database connection is not established.");
}


$job_title = '';
$job_description = '';
$field_category = '';
$employment_type = '';
$required_qualifications = '';
$preferred_qualifications = '';
$application_deadline = '';
$posting_date = '';
$contact_information = '';
$job_location = '';



$min_age = 0;
$max_age = 0;
$salary_range_from = 0;
$salary_range_to = 0;


$empty_fields_errors = [];
$success_message = [];
$age_comparison_errors = [];


// Handle GET request (fetch data)
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("Invalid job post ID. Please go back and try again.");
    }

    $jobpost_id = intval($_GET['id']); // Sanitize the ID

  
    $query = "SELECT * FROM jobposts_ WHERE jp_id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':id' => $jobpost_id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
      
        $job_title = $row['job_title'];
        $job_description = $row['job_description'];
        $field_category = $row['field_category'];
        $min_age = $row['min_age'];
        $max_age = $row['max_age'];
        $job_location = $row['job_location'];
        $salary_range_from = $row['salary_range_from'];
        $salary_range_to = $row['salary_range_to'];
        $employment_type = $row['employment_type'];
        $required_qualifications = $row['req_qual'];
        $preferred_qualifications = $row['pref_qual'];
        $application_deadline = $row['appl_deadline'];
        $posting_date = $row['posting_date'];
        $contact_information = $row['contact_information'];

    } else {
        die("No job post found with ID: $jobpost_id");
    }


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apply Form</title>

    <link rel="stylesheet"  href="../Job_List_FP_CSS/jobpost_apply_form.css">
    <link width="20" rel="icon" href="../../../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">
 


</head>


            <body id="body">
                
                <div class="jp_apply_form_wrapper">

                    <div class="template bd_jp_apply_form_wrapper " id="bd_jp_apply_form_wrapper">

                        
                        


                    </div>

                    <div class="template fp_jp_apply_form_wrapper">


                        <!--HEADER-->
                        <div class="container header">

                            <div class="logo_div">
                                
                        
                                <a id="jpapply_logo"  class="h_button_link"  href="jobpost_apply_form.php?id=<?php echo $jobpost_id ?>">

                                    <img src="../../../../HRMS_Images/NodeLab LOGO 1.png"
                                    class="logo" id="header_logo" width="60">

                                </a>
                            
                            </div>

            
                            <div class="h_button_div">

                  


                                <a href="../../../HRMS_Front_Page_HTML/index.php" class="h_button_links_home_btn" id="home-link">Home</a>
                                <a class="h_button_link"    id="jpfeed_link"  href="joblist_feed.php">Feed</a>

                                
                                <div class="darkmode_div" id="darkmode_div">

                                    <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                                    

                                    </div>

                                </div>
                            

                            </div>





                        </div>



                        <!-- FP WRAPPER -->
                        <div class="container fp_wrapper">

                            <div class="main_apply_div">

                                    <div class="data_divs jpdata_div_header">
                                                
                                        <div class="header_subdiv jp_data_header">
                                            
                                             

                                        </div>


                                        <div class="header_subdiv  jp_form_header">

                                            <p>Fill In All The Fields to Apply as a 
                                                
                                                <span class="job_title_hl"><?php echo $job_title?> </span>

                                            </p>

                                        </div>

                                    </div>
                                    
                    
                    
                                    <div class="left_right_divs data_divs main_file">

                                        <!-- job title -->
                                        <div class="jb_data_box job_title_div">

                                            <label id="job_title_lbl">Job Title:</label>
                                            <p class="jobpost_data_text job-title-holder"> <?php echo $job_title ?></p>

                                        </div>

                                        <!-- job Description -->
                                        <div class="jb_data_box job_description_div">

                                            <label id="job_description_lbl">Job Description:</label>
                                    
                                            <p class="jobpost_data_text job-description-holder">

                                                    <?php echo $job_description ?>
                                            </p>
                                            
                                        </div>
 
                                        <!-- job field Category -->
                                        <div class="jb_data_box job_field_category_div">

                                            <label id="field_category_lbl">Field Category:<label>
                                            <p class="jobpost_data_text field-category-holder"><?php echo $field_category ?></p>
                                        
                                        </div>

                                        <!-- age Requirements -->
                                        <div class="jb_data_box job_age_requirements_div">

                                            <label id="age_req_lbl">Age Requirements:</label>

                                            <div class="x-directiondata-box age_req_div">

                                                <p class="jobpost_data_text job-min-age-holder"><?php echo $min_age ?> Years Old</p>
                                                <p class="jobpost_data_text job-max-age-holder"><?php echo $max_age ?> Years Old </p>

                                            </div>
                                       

                                        </div>

                                        <!-- job Location -->
                                        <div class="jb_data_box job_location_div">

                                            <label id="job_loc_lbl">Job Location:</label>
                                            <p class="jobpost_data_text job-location-holder"><?php echo $job_location ?></p>
                                     
                                        </div>

                                        <!-- salary range  -->
                                        <div class="jb_data_box job_salary_range_div">

                                            <label id="salary_range_lbl">Salary Range:</label>

                                            <div class="x-directiondata-box sl_req_div">
                                                
                                                <p class="jobpost_data_text salary-range-from-holder">From: <?php echo $salary_range_from ?></p>
                                                <p class="jobpost_data_text salary-range-to-holder">To:  <?php echo $salary_range_to    ?>  </p>

                                            </div>


                                        

                                        </div>


                                        <!-- employment type -->
                                        <div class="jb_data_box job_employment_type_div">

                                            <label id="employment_type_lbl">Employment Type:</label>
                                            <p class="jobpost_data_text employment-type-holder"><?php  echo $employment_type ?></p>
                                     

                                        </div>
                                            
                                        <!-- required Qualifications -->
                                        <div class="jb_data_box req_qual_div">

                                            <label id="req_ual_lbl">Required Qualificatons:</label>
                                            <p class="jobpost_data_text req-qual-holder"><?php echo $required_qualifications ?></p>

                                        </div>
                                        
                                        <!-- pref Qualifications -->
                                        <div class="jb_data_box pref_qual_div">

                                            <label id="pref_qual_lbl">Preferred Qualifications:</label>
                                            <p class="jobpost_data_text pref-qual-holder"><?php echo $preferred_qualifications ?></p>

                                        </div>



                                        <div class="x-directiondata-box post_date-deadl">

                                            <!-- posting Date-->
                                            <div class="jb_data_box posting_date_div">

                                                    <label id="posting_lbl">Posting Date</label>
                                                    <p class="jobpost_data_text posting-date-holder"><?php echo $posting_date ?></p>

                                            </div>

                                                <!-- application Deadline -->
                                                <div class="jb_data_box appl_deadl_div">

                                                <label id="appl_deadl_lbl">Application Deadline:</label>
                                                <p class="jobpost_data_text appl-deadl-holder"><?php echo $application_deadline ?></p>

                                            </div>


                                        </div>
                                                    
                                              

                                    

                                                                                <!-- posting Date-->
                                        <div class="jb_data_box contact_information_div">

                                            <label id="contact_info_lbl">Contact Information</label>
                                            <p class="jobpost_data_text contact-information-holder"><?php echo $contact_information ?></p>

                                        </div>




                                    </div>









                           
                                <!-- apply form div -->
                                <div class="left_right_divs apply_div jobpost_apply_form_div">

                                
                                        <?php
          
                                            check_af_form_errors(); 
                                      

                                        ?>
                                
                                    
                                    <form   action="../../Job_List_Includes/jobpost_apply.inc.php" class="apply_form_divs jobseekers_form" enctype="multipart/form-data"  method="POST">

                                        <?php 
                                         apply_inputs();
                                         check_application_success();
                                         
                                        ?>           


                                        


                                         <div class="jps_rows row_6_jps_form">
                                       
                                            <input type="hidden" name="apply_form_job_title_holder" value="<?php echo $job_title; ?>">
                                            <input type="hidden" name="apply_form_id_holder" value="<?php echo $jobpost_id; ?>">

                                            <button id="af_apply_button">Apply</button>


                                        </div>
                        
                                      
                                                
                                    </form>


                                  </div>


                            </div>

                        </div>
                      
                    
                    </div>



                </div>


            <script src="../Job_List_FP_JS/jp_apply_form_darkmode.js"></script>
            <script src="../Job_List_FP_JS/af_error_handling.js"></script>



            </body>



</html>