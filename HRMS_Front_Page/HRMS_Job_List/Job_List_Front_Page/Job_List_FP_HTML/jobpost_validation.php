
<?php 

require_once '../../../../Includes/dbh.inc.php';
require_once '../../../../Includes/config_session.inc.php';
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_model.inc.php';
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_contr.inc.php';
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_view.inc.php';

if ($pdo === null) {
    die("Database connection is not established.");
}

$jobpost_id = 0;
$job_title = '';
$field_category = '';
$required_qualifications = '';
$preferred_qualifications = '';
$posting_date = '';
$contact_information = '';




// Part 1: Get and Display Selected Job Data (GET Request)
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        die("Invalid Jobpost ID! Please Try again.");
    }

    $jobpost_id = intval($_GET["id"]);

    
    $query = "SELECT * FROM jobposts_ WHERE jp_id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id" => $jobpost_id]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        // Assign the fetched data to variables
        $job_title = htmlspecialchars($row['job_title']);
        $field_category = htmlspecialchars($row['field_category']);
        $required_qualifications = htmlspecialchars($row['req_qual']);
        $preferred_qualifications = htmlspecialchars($row['pref_qual']);
        $posting_date = htmlspecialchars($row['posting_date']);
        $contact_information = htmlspecialchars($row['contact_information']);

    } else {
        die("No job post found with ID: $jobpost_id");
    }
}





// Part 2: Update the status to 'published' (POST Request)
if ($_SERVER["REQUEST_METHOD"] === "POST") {


       


        // Ensure the jobpost_id is available and valid
        if (isset($_POST["jobpost_id"]) && !empty($_POST["jobpost_id"])) {
                $jobpost_id = intval($_POST["jobpost_id"]);

        
                $query = "UPDATE jobposts_ SET status = 'published' WHERE jp_id = :id";
                $stmt = $pdo->prepare($query);
                $stmt->execute([":id" => $jobpost_id]);

                
                $success_post_message = [];

                
                $success_post_message = "Jobpost Posted Successfully";
                $_SESSION["post_success"] = $success_post_message;
                
               
                header("Location: joblist_feed.php?=status_success");
                exit();
        } else {
                die("Invalid Job Post ID!");
        }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jobpost</title>


    <link rel="stylesheet" href="../Job_List_FP_CSS/jobpost_validation.css">
    <link width="20" rel="icon" href="../../../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">


</head>




            <body id="body">
                

                    <div class="jpeed_val_wrapper">

                            <div class="bdjpfeed_val_wrapper">

                            


                            </div>


                            <div class="fp_jpfed_val_wrapper">

                          

                                <!-- feed wrapper -->
                                <div class="container val_feed_wrapper">

                                                
                                        <div class="feed_container aside aside_left" id="aside_left">

                                             
                                        </div>


                                                
                                        <form class="main_feed" method="POST">

                                              <div class="jobpost_template">

                                                <div class="jp_div rsjp_header_div" id="rsjp_header_div">

                                                        <div class="header_subdiv feed_id_holder_div">

                                                                <input type="hidden" id="jobpost_id"  name="jobpost_id" value="<?php echo $jobpost_id; ?>">

                                                        </div>

                                                        <div class="header_subdiv jp_logo_div">

                                                        <img src="../../../../HRMS_Images/NodeLab LOGO 1.png"
                                                        class="logo" id="header_logo" width="60">


                                                        </div>

                                                        <div class="header_subdiv back_link_div">

                                                                <a href="../../../../HR_Modules/HR_HTML/jobposting_db.php">x</a>

                                                        </div>


                                                </div>

                                                <div class="jp_div rsjp_tag_div">


                                                        <div class="text_div text_a_div">

                                                                <span class="text text_a">We Are</span>

                                                        </div>

                                                        <div class="text_b_main_div">

                                                                <div class="text_div text_b_div">

                                                                        <span class="text text_b">HIRING!</span> 

                                                                </div>


                                                        </div>

                                                </div>



                                                <div class="jp_div rsjp_skills_req_div">

                                                        <div class="jobtitle_div">      

                                                                <div class="dec_check_div">
                                                                        <svg class="jpfeed_check_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                                                                </div>

                                                                <span class="output_job_title"><?php echo $job_title ?></span>

                                                        </div>



                                                        <div class="qualifications_div">

                                                                <div class="qual_div req_qual_div">

                                                                        <label for="inp_req_qual_holder"  class="req_qual_label">Required Qualifcations </label>
                                                                        <input type="text" 
                                                                        class="inp_holder req_qual_holder"
                                                                        id="inp_req_qual_holder"
                                                                        value="<?php echo $required_qualifications ?>"></input>
                                                                        

                                                                </div>

                                                                <div class="qual_div pref_qual_dicv">
                                                                
                                                                        <label for="inp_pref_qual_holder" class="pref_qual_label">Preffered Qualifications</label>
                                                                        <input type="text" 
                                                                        class="inp_holder pref_qual_holder"
                                                                        id="inp_pref_qual_holder"
                                                                        value="<?php echo $preferred_qualifications ?>"></input>

                                                                </div>


                                                        </div>




                                                </div>

                                                        <div class="rsjp_apply_button_div">

                                                                <a class="apply_button ">

                                                                        <svg class="svg_apply_arrow_icon"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>
                                                                        <span>Apply Now</span>

                                                                </a> 
                                                                                

                                                        </div>

                                                        <div class="jp_div rsjp_footer_div" id="rsjp_footer_div">

                                                                <div class="ftr_div contact_num_div">

                                                                        <span>Contact Us: <?php echo $contact_information ?></span>

                                                                </div>

                                                                <div class="ftr_div jobpost_save_btn_form" method="POST">

                                                                        <button id="post_button">Post</button>
                                                                      
                                                                        
                                                                </div>


                                                                <div class="ftr_div date_posted_div">
                                                                                
                                                                        <span>Date Posted: <?php echo $posting_date ?></span>
   
                                                                </div>

                                                      
                                                        </div>


                                                        <div class="jp_div rsjp_image_vector_div">

                                                                <div class="job_category_holder_div">
                                                                        <span class="job_category_holder"><?php echo $field_category ?></span>
                                                                </div>

                                                                <div class="dec arc_a">


                                                                </div>

                                                        </div>
                                              
                                              </div>
                                                
</form>

                                        <!-- end of main feed -->


                                        <div class="feed_container aside aside_right" id="aside_right">

                                        <div class="darkmode_div" id="darkmode_div">

                                                <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">


                                                </div>

                                        </div>



                                        </div>





                                </div>



                            </div>






                    </div>
                
                    
                    <script src="../Job_List_FP_JS/jpl_validation_darkmode.js"></script>



            </body>




</html>