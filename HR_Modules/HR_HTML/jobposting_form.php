<?php 


require_once '../../Includes/config_session.inc.php';
require_once '../../Includes/Login_Functions/login_view.inc.php';
require_once '../HR_Includes/Jobpost_Functions/jobpost_view.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting From</title>


    <link rel="stylesheet" href="../HR_CSS/jobposting_form.css">  
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

                            
                                <!-- JP DASHBOARD -->
                                <a href="dashboard.php" class="lh_buttons_href" id="jpf_dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                    id="dashboard_button_icon" viewBox="0 0 24 24" fill=""><path d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z"></path></svg>
                                    <span class="jp_button_lbl" id="jpf_dashboard_lbl">Dashboard</span>
                                </a>


                                <!-- JP TABLE -->
                                <a href="jobposting_db.php" class="lh_buttons_href" id="jpf_table">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons" 
                                    id="table_button_icon"   viewBox="0 0 24 24" fill="currentColor"><path d="M15 21H9V10H15V21ZM17 21V10H22V20C22 20.5523 21.5523 21 21 21H17ZM7 21H3C2.44772 21 2 20.5523 2 20V10H7V21ZM22 8H2V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V8Z"></path></svg>
                                    <span class="jp_button_lbl" id="jpf_table_lbl">Joblist</span>
                                </a>

                                
                                <!-- JP FORM -->
                                <a href="jobposting_form.php" class="lh_buttons_href" id="jpf_form">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="sb_button_icons"  
                                    id="form_button_icon"   viewBox="0 0 24 24" fill="currentColor"><path d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM6 7V9H14V7H6ZM6 11V13H14V11H6ZM6 15V17H11V15H6Z"></path></svg>
                                    <span class="jp_button_lbl" id="jpf_form_lbl">Jobpost</span>
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

                     <div class="jpf_container jpf_input_form_div" id="jpf_input_form_div_id">

                                <div class="form_title_div">

                                    <span class="form-title" id="joblistform-lbl">Job Post Form</span>

                                </div>

                                        <form 
                                        action="../HR_Includes/Jobpost_Functions/jobpost.inc.php" 
                                        enctype="multipart/form-data"
                                        class="jp_form"                
                                        method="post">
                                        
                                        <div class="num_validation_div">
                                            <?php 
                                                check_age_errors(); 
                                                check_salary_errors();                                  
                                            ?>
                                        </div>



                                   
                                            




                                            
                                        <?php add_jobpost_input() ?>


                                        <div class="validation_div">


                                        
                                            <?php  

                                                check_jp_form_errors();
                                             
                                          
                                            
                                            ?> 
                                            
                                            

                                        </div>

                                        <div class="jpf_button_div">

                                            <button type="submit" class="buttons" id="jpf_add_button">Add</button>

                                        </div>


                                        </div>



                        
                                        </form>


                            
                                    

                    </div>



                

                </div>
                <!-- END OF FRONT PAGE -->



            </div>
            <!-- j -->

            <script src="../HR_JS/error_handling.js"></script>
            <script src="../HR_JS/jpf_darkmode.js"></script>


        </body>


</html>