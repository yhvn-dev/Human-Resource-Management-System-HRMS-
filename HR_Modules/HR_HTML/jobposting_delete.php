<?php 

require_once '../../Includes/dbh.inc.php';
require_once '../../Includes/config_session.inc.php';

require_once '../../Includes/Login_Functions/login_view.inc.php';
require_once '../HR_Includes/Jobpost_Functions/jobpost_view.inc.php';
require_once '../HR_Includes/Jobpost_Functions/jobpost_contr.inc.php';

// Check database connection
if ($pdo === null) {
    die("Database connection is not established.");
}

// Initialize variables with empty values
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

$errors = [];
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

// Check if delete button was clicked and jobpost ID is provided
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['jpf_delete_button']) && isset($_POST['jp_id'])) {
    $jobpost_id = intval($_POST['jp_id']); // Sanitize the ID

    // Delete query
    $query = "DELETE FROM jobposts_ WHERE jp_id = :id";
    $stmt = $pdo->prepare($query);

    try {
        $stmt->execute([':id' => $jobpost_id]);

        if ($stmt->rowCount() > 0) {
        
            $_SESSION['success_delete'] = "Job post deleted successfully.";
            // Redirect to the job posting module
            header("Location: jobposting_db.php");
            exit;
        } else {
            echo "No job post found with the specified ID.";
        }
    } catch (PDOException $e) {
        echo "Error deleting job post: " . $e->getMessage();
    }
}



?>























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jobposts</title>

    <link rel="stylesheet" href="../HR_CSS/jobposting_delete.css">   
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

</head>


        <body>


            <div class="template jpf_wrapper">

                <div class="backdrop jpf_bd_wrapper">



                </div>

                



                <div class="frontpage jpf_fp_wrapper">

                <div class="jpf_container jpf_logo_div" id="jpf_logo_div">

                        <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                        class="logo" id="form_logo" width="60">

                        <span class="logo_text" id="form_nodelab_text">NodeLab</span>


                </div>

                    <div class="jpf_container jpf_header">

                        <div class="jp_left_header">

                            <div class="lh_buttons_div">

                                <a href="dashboard.php" class="lh_buttons_href" id="jpf_dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                    id="dashboard_button_icon" viewBox="0 0 24 24" fill=""><path d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z"></path></svg>
                                    <span class="jp_button_lbl" id="jpf_dashboard_lbl">Dashboard</span>
                                </a>

                                <a href="jobposting_db.php" class="lh_buttons_href" id="jpf_table">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                    id="table_button_icon"   viewBox="0 0 24 24" fill="currentColor"><path d="M15 21H9V10H15V21ZM17 21V10H22V20C22 20.5523 21.5523 21 21 21H17ZM7 21H3C2.44772 21 2 20.5523 2 20V10H7V21ZM22 8H2V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V8Z"></path></svg>
                                    <span class="jp_button_lbl" id="jpf_table_lbl">Joblist</span>
                                </a>

                              
                            </div>
                           
                        </div>

                        
                  
                        <!-- right header -->
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




                        <div class="jpf_container jpf_main_form" id="jpf_main_form_id">


                           

                            <!--INPUT FORM DIV ===========================================================================  -->
                            <div class="jpf_container jpf_input_form_div" id="jpf_input_form_div_id">

                            <div class="form_title_div">

                                <span class="form-title" id="joblistform-lbl">Are You Sure You Want to Delete This Jobpost? </span>

                            </div>

                            <form class="jp_form" method="POST" action="" enctype="multipart/form-data">

                                <div class="edit_jp_form">

                                        <div class="jp_id_holder_main_div">

                                            <div class="EDIT_id_input_holder">

                                                    <input type="hidden"
                                                    name="jp_id"
                                                    class="jp_inp jp_inp_id"
                                                    id="jp_inp_id" 
                                                    value="<?php echo $jobpost_id ?>">

                                            </div>


                                        </div>
                                        

                                    <div class="two_sides_form left_form">


                                        <!-- JOB TITLE -->
                                        <div class="jp_input_box" id="jp_inp_jop_title_div" name="jp_inp_jop_title_div">

                                            <input type="text" value="<?php echo $job_title ?>" class="jp_inp" id="jp_inp_job_title" name="jp_inp_job_title" placeholder=" " >
                                            <label for="jp_inp_job_title" class="jp_inp-lbl" id="jp_inp_job_title-lbl">Job Title</label>

                                        </div>

                                         <!-- JOB DESCRIPTION -->
                                         <div class="jp_input_box" id="jp_inp_job_descripton_div" name="jp_inp_job_descripton_div" >

                                            <textarea type="text" class="jp_inp" id="job_description" name="jp_inp_job_descripton" placeholder=""><?php echo $job_description?></textarea>
                                            <label for="job_descripton" class="jp_inp-lbl" id="jp_inp_job_description-lbl">Job Description</label>

                                        </div>

                                        <!-- JOB FIELD CATEGORY-->
                                        <div class="jp_input_box" id="jp_job_field_category_div" name="jp_job_field_category_div">

                                            <input type="text" value="<?php echo $field_category ?>" class="jp_inp" id="jp_inp_job_field_category" name="jp_inp_job_field_category" placeholder=" ">
                                            <label for="jp_inp_job_field_category" class="jp_inp-lbl" id="jp_job_field_category-lbl">Field Category</label>

                                        </div>


                                        <!-- JOB MINIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_min_age_div" name="jp_job_min_age_div">

                                            <input type="text" value="<?php echo $min_age ?>"  class="jp_inp" id="jp_inp_job_min_age" name="jp_inp_job_min_age" placeholder=" ">
                                            <label for="jp_inp_job_min_age" class="jp_inp-lbl" id="jp_job_min_age-lbl">Minimum Age</label>

                                        </div>
                                    

                                        <!-- JOB MAXIMUM AGE-->
                                        <div class="jp_input_box" id="jp_job_max_age_div" name="jp_job_max_age_div">

                                            <input type="text" value="<?php echo $max_age ?>" class="jp_inp" id="jp_inp_job_max_age" name="jp_inp_job_max_age" placeholder=" ">
                                            <label for="jp_inp_job_max_age" class="jp_inp-lbl" id="jp_job_max_age-lbl">Maximum Age</label>

                                        </div>
                                        <?php  check_age_errors()  ?>

                                        <!-- JOB LOCATION-->
                                        <div class="jp_input_box" id="jp_job_location_div" name="jp_job_location_div">

                                            <input type="text" value="<?php echo $job_location ?>"  class="jp_inp" id="jp_inp_job_location" name="jp_inp_job_location" placeholder=" ">
                                            <label for="jp_inp_job_location" class="jp_inp-lbl" id="jp_job_location-lbl">Job Location</label>

                                        </div>

                                    



                                    </div>

                                    <!-- right form --------------------------------------------------- -->
                                    <div class="two_sides_form right_form">


                                    <div class="both_salary_range_div">

                                            <!-- JOB SALARY RANGE || FROM -->
                                            <div class="jp_input_box" id="jp_salary_range_div_from" name="jp_salary_range_div_from" >

                                                <input type="text"  value="<?php echo $salary_range_from ?>"  class="jp_inp" id="jp_inp_salary_range_from" name="jp_inp_salary_range_from" placeholder=" ">
                                                <label for="jp_inp_salary_range_from" class="jp_inp-lbl" id="jp_salary_range-lbl_from">Salary Range - From: </label>

                                            </div>


                                            <!-- JOB SALARY RANGE || TO -->
                                            <div class="jp_input_box" id="jp_salary_range_div_to" name="jp_salary_range_div_to">

                                                <input type="text" value="<?php echo $salary_range_to ?>"   class="jp_inp" id="jp_inp_salary_range_to" name="jp_inp_salary_range_to" placeholder=" ">
                                                <label for="jp_inp_salary_range_to" class="jp_inp-lbl" id="jp_salary_range-lbl_to">Salary Range - To: </label>

                                            </div>


                                            </div>


                                            <!-- JOB EMPLOYMENT TYPE-->
                                            <div class="jp_input_box" id="jp_employment_type_div" name="jp_employment_type_div">

                                                <input type="text" value="<?php echo $employment_type ?>"   class="jp_inp" id="jp_inp_employment_type" name="jp_inp_employment_type"  placeholder=" ">
                                                <label for="jp_inp_employment_type" class="jp_inp-lbl" id="jp_employment_type-lbl">Employment Type</label>

                                            </div>

                                            <!-- JOB REQUIRED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_required_qualifications_div" name="jp_required_qualifications_div">

                                                <input type="text" value="<?php echo $required_qualifications ?>"  class="jp_inp" id="jp_inp_required_qualifications" name="jp_inp_required_qualifications" placeholder=" ">
                                                <label for="jp_inp_required_qualifications" class="jp_inp-lbl" id="jp_required_qualifications-lbl">Required Qualitifcations</label>

                                            </div>

                                            <!-- JOB PREFERED QUALIFICATIONS-->
                                            <div class="jp_input_box" id="jp_preferred_qualifications_div" name="jp_preferred_qualifications_div">

                                                <input type="text "  value="<?php echo $preferred_qualifications ?>"  class="jp_inp" id="jp_inp_preferred_qualifications" name="jp_inp_preferred_qualifications" placeholder=" ">
                                                <label for="jp_inp_preferred_qualifications" class="jp_inp-lbl" id="jp_preferred_qualifications-lbl">Preferred Qualitifcations</label>

                                            </div>

                                            
                                            <!-- JOB APLLICATION DEADLINE  -->
                                            <div class="jp_input_box" id="jp_applications_deadline_div" name="jp_applications_deadline_div">

                                                <input type="date"  value="<?php echo $application_deadline ?>"  class="jp_inp" id="jp_inp_applications_deadline" name="jp_inp_applications_deadline" placeholder=" ">
                                                <label for="jp_inp_applications_deadline" class="jp_inp-lbl" id="jp_applications_deadline-lbl">Application Deadline</label>

                                            </div>

                                            <!-- JOB POSTING DATE -->
                                            <div class="jp_input_box" id="jp_posting_date_div" name="jp_posting_date_div">

                                                <input type="date" value="<?php echo $posting_date ?>" class="jp_inp" id="jp_inp_posting_date" name="jp_inp_posting_date" placeholder=" ">
                                                <label for="jp_inp_posting_date" class="jp_inp-lbl" id="jp_posting_date-lbl">Posting Date</label>


                                            </div>

                                            <!-- JOB CONTACT INFORMATION-->
                                            <div class="jp_input_box" id="jp_contact_information_div" name="jp_contact_information_div">

                                                <input type="text" value="<?php echo $contact_information ?>"  class="jp_inp" id="jp_inp_contact_information" name="jp_inp_contact_information" placeholder=" ">
                                                <label for="jp_inp_contact_information" class="jp_inp-lbl" id="jp_contact_information-lbl">Contact Information</label>

                                            </div>
                                            
                                           
                                    </div>


                                    <div class="two_sides_form most_right_form">

             
                                    </div>

                                    <div class="validation_div">
                    
                                        
                                    </div>
                                    
                                    <div class="jpf_button_div">

                                        <button type="submit" class="buttons" id="jpf_delete_button" name="jpf_delete_button">Delete</button>
                                        <a href="jobposting_module.php" class="buttons" id="discard_button" >Discard</a>

                                    </div>


                                </div>


                            </form>
                                <!-- END OF ADD FORM -->







<!--   ====================================================== -->
<!-- EDIT FORM ====================================================== ======================================================-->
<!-- ====================================================== -->


                        </div>


                </div>
                <!-- END OF FRONT PAGE -->



            </div>

            <script src="../HR_JS/error_handling.js"></script>
            <script src="../HR_JS/jpf_edit_darkmode.js"></script>


        </body>


</html>