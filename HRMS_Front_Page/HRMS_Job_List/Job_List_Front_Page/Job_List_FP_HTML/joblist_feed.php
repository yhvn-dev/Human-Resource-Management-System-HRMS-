
<?php


require_once '../../../../Includes/dbh.inc.php'; 
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_model.inc.php';
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_contr.inc.php';
require_once '../../../../HR_Modules/HR_Includes/Jobpost_Functions/jobpost_view.inc.php';


require_once '../../Job_List_Includes/jobpost_apply_view.inc.php';

if ($pdo === null) {
    die("Database connection is not established.");
}


$query = "SELECT * FROM jobposts_ WHERE status = 'published' ORDER BY posting_date DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();

$jobposts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feed</title>

    <link rel="stylesheet" href="../Job_List_FP_CSS/joblist_feed.css">
    <link width="20" rel="icon" href="../../../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">
    
</head>

    


        <body class="body" id="body">
            
            <div class="jlp_main_wrapper">

                <!-- FRONT PAGE BD WRAPPER -->
                <div class="jlp_bd_wrapper">

                   


                </div>

                <!-- FRONT PAGE WRAPPER -->
                <div class="jlp_fp_wrapper">

                    <div class="container header" id="header_id">

                        <div class="logo_div">
                            
                            <a id="jpfeed_logo"  href="joblist_feed.php">

                            <img src="../../../../HRMS_Images/NodeLab LOGO 1.png"
                                    class="logo" id="header_logo" width="60">
          

                            </a>
                         
                        </div>


                <?php 

                    $search_feed_results = []; 

                    if ($_SERVER['REQUEST_METHOD'] === "POST") {
                        // Sanitize the input from the user
                        $feed_search = htmlspecialchars(trim($_POST["jpfeed_inp_search"]));


                        // Include the database connection
                        require_once '../../../../Includes/dbh.inc.php'; 

                     
                        if (!isset($pdo)) {
                            die("Database connection is not established.");
                        }

                        try {

                        
                            $query = "SELECT * FROM jobposts_ WHERE job_title LIKE :job_title_search";
                            $stmt = $pdo->prepare($query);

                            // Add wildcards to the search term for partial matching
                            $feed_search = "%" .  $feed_search  . "%";
                            $stmt->bindParam(":job_title_search",   $feed_search );
                        

                            $stmt->execute(); // Execute the query

                          
                            $search_feed_results  = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    
                            $stmt = null;
                        } catch (PDOException $e) {
                            die("Query Failed: " . $e->getMessage());
                        }

                            
                        
                    }


                    ?>

                        <div class="jp_search_div">


                            <form class="jpfeed_search" id="jpfeed_search_form" method="POST">

                                <input type="text"  class="jpfeed_inp_search" id="jpfeed_inp_search" name="jpfeed_inp_search" placeholder="">
                                <label for="jpfeed_inp_search" class="jpfeed_search_lbl" id="jpfeed_search_lbl">Search by <span class="hl_text jp_tb_search_lbl" id="hl_job_title">Job Title </span></label>

                                <button id="jp_tb_search-btn">

                                            <svg class="search_button_icon"  xmlns="http://www.w3.org/2000/svg" id="search-btn-svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"></path></svg>
                                </button>



                            </form>

                          

                        

                        </div>

                    
                
                        <div class="header_div">


                                <div class="h_button_div" id="h_button_div">

                                
                                    <a href="../../../HRMS_Front_Page_HTML/index.php" class="h_b_link h_button_links_home_btn" id="home-link">Home</a>
                                 
                                   

                                 

                                </div>

                        </div>

                    </div>

                

            

                    <div class="container feed_wrapper">


                        

                     


                        <div class="feed_container aside aside_left" id="aside_left">


                        </div>

                        <div class="feed_container main_feed" id="main_feed">




                            <div class="mf_con scroll_div">
                            
                                <div class="table_div">


                                


                                        <table class="jpfeed_table">    
                                            
                                            <tr>

                                                <th class="jp_th jp_th_id" id="jp_th_id" style="display:none">ID</th>
                                               
                                            </tr>


                                            <?php 


                                            // OUTPUT SEARCH RESULT

                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                if (empty($search_feed_results)) {
                                                 
                                                    echo '<div class="no_sr_div">
                                                    
                                                        <p class="no_sr_text">No Result Found!</p>
                                                    
                                                    
                                                    </div>';
  
                                                } else {
                                                 
                                    
                                                    // Loop through sorted results
                                                    foreach ($search_feed_results as $jobpost_search) {
                                                        

                                                        echo "
                                                    <tr class='jobpost_tr_div'>

                                                    
                                                        <td class='result_jobpost' id='result_jobpost'>
                                                            <div class='jp_div rsjp_header_div' id='rsjp_header_div'>

                                                                     <img src='../../../../HRMS_Images/NodeLab LOGO 1.png'
                                                                    class='logo' id='td_logo' width='60'>
        
                                                            </div>
                                                            <div class='jp_div rsjp_tag_div'>
                                                                <div class='text_div text_a_div'>
                                                                    <span class='text text_a'>We Are</span>
                                                                </div>
                                                                <div class='text_b_main_div'>
                                                                    <div class='text_div text_b_div'>
                                                                        <span class='text text_b'>HIRING!</span> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='jp_div rsjp_skills_req_div'>
                                                                <div class='jobtitle_div'>      
                                                                    <div class='dec_check_div'>
                                                                        <svg class='jpfeed_check_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'><path d='M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z'></path></svg>
                                                                    </div>
                                                                    <span class='output_job_title'>" . htmlspecialchars($jobpost_search["job_title"]) . "</span>
                                                                </div>
                                                                <div class='qualifications_div'>
                                                                    <div class='qual_div req_qual_div'>
                                                                        <label for='inp_req_qual_holder' class='req_qual_label'>Required Qualifications</label>
                                                                        <input type='text' class='inp_holder req_qual_holder' id='inp_req_qual_holder' value='" . htmlspecialchars($jobpost_search["req_qual"]) . "' disabled />
                                                                    </div>
                                                                    <div class='qual_div pref_qual_div'>
                                                                        <label for='inp_pref_qual_holder' class='pref_qual_label'>Preferred Qualifications</label>
                                                                        <input type='text' class='inp_holder pref_qual_holder' id='inp_pref_qual_holder' value='". htmlspecialchars($jobpost_search["pref_qual"]) . "' disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='rsjp_apply_button_div'>
                                                                <a href='#' class='apply_button'>
                                                                    <svg class='svg_apply_arrow_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'><path d='M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z'></path></svg>
                                                                    <span>Apply Now</span>
                                                                </a> 
                                                            </div>
                                                            <div class='jp_div rsjp_footer_div' id='rsjp_footer_div'>
                                                                <div class='ftr_div contact_num_div'>
                                                                    <span>Contact Us: ". htmlspecialchars($jobpost_search["contact_information"]) . "</span>
                                                                </div>
                                                                <div class='ftr_div date_posted_div'>
                                                                    <span class='date_post_holder'>Date Posted: ". htmlspecialchars($jobpost_search["posting_date"]) . "</span>
                                                                </div>
                                                            </div>
                                                            <div class='jp_div rsjp_image_vector_div'>
                                                                <div class='job_category_holder_div'>
                                                                    <span class='job_category_holder'>". htmlspecialchars($jobpost_search["field_category"]) . "</span>   
                                                                </div>

                                                                
                                                                <div class='dec arc_a'>


                                                                </div>


                                                            </div>
                                                        </td>
                                                    </tr>";
                                                }
                                            } 

                                        }






                                        
                                            if ($jobposts) {


                                                foreach ($jobposts as $jobpost) {
                                                
                                                    $job_title = htmlspecialchars($jobpost['job_title']);
                                                    $field_category = htmlspecialchars($jobpost['field_category']);
                                                    $required_qualifications = htmlspecialchars($jobpost['req_qual']);
                                                    $preferred_qualifications = htmlspecialchars($jobpost['pref_qual']);
                                                    $posting_date = htmlspecialchars($jobpost['posting_date']);
                                                    $contact_information = htmlspecialchars($jobpost['contact_information']);
                                                    $jobpost['jp_id'];
                                                    
                                                
                                                    echo "
                                                    <tr class='jobpost_tr_div'>
                                                        <td class='result_jobpost' id='result_jobpost'>
                                                            <div class='jp_div rsjp_header_div' id='rsjp_header_div'>
                                                                    <img src='../../../../HRMS_Images/NodeLab LOGO 1.png'
                                                                    class='logo' id='td_logo' width='60'>
                                                            </div>

                                                            <div class='jp_div rsjp_tag_div'>
                                                                <div class='text_div text_a_div'>
                                                                    <span class='text text_a'>We Are</span>
                                                                </div>
                                                                <div class='text_b_main_div'>
                                                                    <div class='text_div text_b_div'>
                                                                        <span class='text text_b'>HIRING!</span> 
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='jp_div rsjp_skills_req_div'>

                                                                <div class='jobtitle_div'>      
                                                                    <div class='dec_check_div'>
                                                                        <svg class='jpfeed_check_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'><path d='M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z'></path></svg>
                                                                    </div>
                                                                    <span class='output_job_title'>{$job_title}</span>
                                                                </div>

                                                                <div class='qualifications_div'>
                                                                    <div class='qual_div req_qual_div'>
                                                                        <label for='inp_req_qual_holder' class='req_qual_label'>Required Qualifications</label>
                                                                        <input type='text' class='inp_holder req_qual_holder' id='inp_req_qual_holder' value='{$required_qualifications}' disabled />
                                                                    </div>
                                                                    <div class='qual_div pref_qual_div'>
                                                                        <label for='inp_pref_qual_holder' class='pref_qual_label'>Preferred Qualifications</label>
                                                                        <input type='text' class='inp_holder pref_qual_holder' id='inp_pref_qual_holder' value='{$preferred_qualifications}' disabled />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='rsjp_apply_button_div'>
                                                                <a href='jobpost_apply_form.php?id=" .  $jobpost['jp_id'] . "' class='apply_button'>
                                                                    <svg class='svg_apply_arrow_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'><path d='M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z'></path></svg>
                                                                    <span>Apply Now</span>
                                                                </a> 
                                                            </div>
                                                            <div class='jp_div rsjp_footer_div' id='rsjp_footer_div'>
                                                                <div class='ftr_div contact_num_div'>
                                                                    <span>Contact Us: {$contact_information}</span>
                                                                </div>
                                                                <div class='ftr_div date_posted_div'>
                                                                    <span class='date_post_holder'>Date Posted: {$posting_date}</span>
                                                                </div>
                                                            </div>
                                                            <div class='jp_div rsjp_image_vector_div'>
                                                                <div class='job_category_holder_div'>
                                                                    <span class='job_category_holder'>{$field_category}</span>   
                                                                </div>

                                                                
                                                                <div class='dec arc_a'>


                                                                </div>


                                                            </div>
                                                        </td>
                                                    </tr>";
                                                }
                                            } else {
                                                echo "<p>No published job posts found.</p>";
                                            }
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            ?>
                                                                
                                                                            
                                                        
                                                        
                                             

                                        
                                                                                                
                                         
                                            
                                    
                                 

                            
                                                                <?php   check_post_success() ?>


                                            


                                        </table>



                                </div>
                            
                            </div>

                        </div>

                        <div class="feed_container aside aside_right"  id="aside_right">

                         

                            <div class="darkmode_div" id="darkmode_div">

                                        <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">


                                        </div>

                            </div>


                        </div>


                    </div>

          
                
                </div>

                            


                
            </div>


            <script src="../Job_List_FP_JS/jpl_feed_darkmode.js"></script>

        
        </body>



</html>