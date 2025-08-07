<?php

    require_once '../../Includes/dbh.inc.php';
    require_once '../../Includes/config_session.inc.php';

    require_once '../../Includes/Login_Functions/login_view.inc.php';
    require_once '../Employee_Includes/employee_model.inc.php';
    require_once '../Employee_Includes/employee_view.inc.php';
    require_once '../Employee_Includes/employee_contr.inc.php';





// Initialize variables
$employee_id = "";
$first_name = "";
$last_name = "";
$middle_name = "";
$email = "";
$phone_number = "";
$job_title = "";
$department  = "";
$role = "";
$password = "";



$id  = intval($_GET["id"] ?? $_POST["id"] ?? 0);

$row = [];

if ($id > 0) {

    $query = "SELECT * FROM employees_ WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id" => $id ]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
     
        $employee_id = $row['employee_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $middle_name = $row['middle_name'];
        $email = $row['email_'];
        $phone_number = $row['phone_number_'];
        $job_title = $row['job_title'];
        $department = $row['department_'];
        $role = $row['role_'];
        $password = $row['password_'];

    } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
        die("No Employee Found with ID: $id ");
    }

}









// Handle form submission


   
?>


<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <title>Node Lab</title>


    <link rel="stylesheet" href="../Employee_Module_CSS/employee_dashboard.css">
  
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

  

</head>


        <body>
        
            <div class="db_wrapper" id="db_wrapper">

                
                    <div class="backdrop bd_db" id="db_bd_id">

                          

                    </div>

                    
                    <div class="template fp_wrapper">



                         <a href="employee_edit.php?id=<?php echo $id; ?>" class="container header_logo" id="db_header_logo_div_id">

                                <img src="../../HRMS_Images/NodeLab LOGO 1.png"
                                class="logo" id="db_logo" width="60">

                                <span class="logo_text" id="db_nodelab_text">NodeLab</span>

                            </a>




                                <div class="container main_prompt_con">

                                    <span class="title_con_text text_a"> <?php echo  $role ?>  </span>  

                                    <span class="title_con_text text_b"> <?php echo $employee_id ?> </span>
                                                            
                                    <span class="title_con_text text_c"> <?php  echo  $job_title ?> </span>



                                </div>




                                            <!-- SIDEBAR_______________________________________________________________________ -->
                                            <div class="container sidebar" id="db_sidebar_id">


                                                <div class="sidebar_buttons_div">



                                                <!-- <a  href="employee_edit.php"class="sbuttons_div-href" id="edit-btn-href">
                                    
                                                                                                                        
                                                            <div class="sbuttons_div"  id="edit-btn">

                                                                    <div class="btn_content_div btn_icon_div" id="btn_icon_edit_div">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9.24264 18.9967H21V20.9967H3V16.754L12.8995 6.85453L17.1421 11.0972L9.24264 18.9967ZM14.3137 5.44032L16.435 3.319C16.8256 2.92848 17.4587 2.92848 17.8492 3.319L20.6777 6.14743C21.0682 6.53795 21.0682 7.17112 20.6777 7.56164L18.5563 9.68296L14.3137 5.44032Z"></path></svg>

                                                                    </div>
                                                                    <div class="btn_content_div btn_lbl_div" id="btn_lbl_edit_div">

                                                                        <button class="sidebar-lbtn edit-form-btn" id="edit-lbtn">Edit</button>

                                                                    </div>

                                                            </div>


                                                </a> -->

                                       
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


                                    <a ><img class="right_h_contents profile_pic" id="right_header_profile" src="../../HRMS_Images/PAPER_VECTOR_A.png"></a>
                                            

                                            <div class="right_h_contents " id="hd_role_div">

                                                <span id="hd_role_type"><?php output_role()?></span>
                                                
                                            </div>
                                        
                                            <a class="right_h_contents " id="user_greetings">Hi, <span id="hr_name" name="hr_name"><?php output_username() ?></span></a>


                                            <!-- <div class="darkmode_div" id="darkmode_div">

                                                <div class="sun_moon_toggle_button"  id="sun_moon_toggle_button">

                                                </div>
            
                                            </div> -->

                                    </div>




                                </div>
                                <!-- END OF HEADER -->




                        

                                
                        <div class="container backdrop_profie_overview">

                    

                        </div>


                        
                        <div class="container profile_overview">

                            <div class="pfp_div pfp_overview_header">

                                <div class="pfp_txt_div_to profile_text_div_a">

                                        <span>User Info</span>

                                </div>      
                                
                                <div class="pfp_txt_div_top profile_text_div_b">

                                

                                </div>    
                                  
                                <div class="pfp_txt_div_top profile_text_div_c">

                                

                                </div>     

                                <div class="pfp_logo_div">

                                        <img src="../../HRMS_Images/NodeLab LOGO 1.png" width="50">

                                </div>
 





                            </div>       
                            
                            <div class="pfp_div pfp_overview_main_content">


                                    <div class="data_box full_name_data_box">
                                    
                                        <label>Full Name:</label>

                                        <div class="full_name_div">
                                                   
                                                    <span class="name_txt lname"><?php echo $last_name ?></span>    
                                                    <span class="name_txt fname"><?php echo $first_name ?></span>    
                                                    <span class="name_txt mname"><?php echo $middle_name?></span>

                                        </div>


                                    </div>


                                    
                                    <div class="data_box contact_data_box">
                                    
                                        <label>Contact Information: </label>

                                        <div class="contact_info_div">
                                                   
                                                    <span class="name_txt email"><?php echo $email?></span>    
                                                    <span class="name_txt pnum"><?php echo $phone_number ?></span>    
                                                  

                                        </div>


                                    </div>

                                     
                                    <div class="data_box department_data_box">
                                    
                                            <span><?php echo $department?></span>


                                    </div>

                                    
                                    <div class="circ_design circ_a"></div>
                                    <div class="circ_design circ_b"></div>

                                                                        

                            </div>



                        </div>











                      




                        <!-- EMPLOYEE TABLE  ==================================================================================== -->
                        <div class="container employee_table">


                                     <div class="emp_tb_div emp_table_header">

                                            <div class="lr_header left_header">

                                                <span id="colleauges_text">   Colleagues</span>
                                            
                                            </div>
                                            <div class="lr_header right_header">

                                                <img src="../../HRMS_Images/NodeLab LOGO 1.png" width="60">
                                                              
                                            </div>



                                     </div>





                                                                <?php 
                                                                
                                                                
                                                                
                                                           $colleagues  =  get_colleagues($pdo,
                                                                    $first_name = "", 
                                                                    $last_name = "",
                                                                    $middle_name = "",
                                                                    $job_title = "", 
                                                                    $department = "",
                                                                    $status = "")
                                                                   
                                                                
                                                                ?>




                                     <!-- MAIN CONTENTSS -->

                                     <div class="emp_tb_div emp_table_main_contents">

                                                    <div class="emp_table_div">

                                                                <table class="emp_table">

                                                                    <tr class="emp_th_tr">

                                                                        <th class="emp_th">

                                                                            header

                                                                        </th>


                                                                    </tr>


                                                                    <?php 
                                                                            usort($colleagues, function($a, $b) {
                                                                                return $b['id'] - $a['id'];  
                                                                            });

                                                                            if ($colleagues && count($colleagues) > 0) {
                                                                                foreach ($colleagues as $clg) {
                                                                                    echo '
                                                                                    <tr class="emp_tr_td">
                                                                                        <td class="emp_data_td">

                                                                                            <div class="td_emp_data_box td_emp_data_box_firstname"> 
                                                                                                <span class="tb_data_holder fname_holder"><label>Firstname: </label>' . htmlspecialchars($clg["first_name"]) . '</span>
                                                                                            </div>

                                                                                            <div class="td_emp_data_box td_emp_data_box_lastname">
                                                                                                <span class="tb_data_holder lname_holder"><label>Lastname: </label>' . htmlspecialchars($clg["last_name"]) . '</span>
                                                                                            </div>

                                                                                            <div class="td_emp_data_box td_emp_data_box_middlename">
                                                                                                <span class="tb_data_holder mname_holder"><label>Middlename: </label>' . htmlspecialchars($clg["middle_name"]) . '</span>
                                                                                            </div>

                                                                                            <div class="td_emp_data_box td_emp_data_box_job_title">
                                                                                                <span class="tb_data_holder job_title"><label>Job Title: </label>' . htmlspecialchars($clg["job_title"]) . '</span>
                                                                                            </div>

                                                                                            <div class="td_emp_data_box td_emp_data_box_department">
                                                                                                <span class="tb_data_holder department"><label>Department: </label>' . htmlspecialchars($clg["department_"]) . '</span>
                                                                                            </div>

                                                                                            <div class="td_emp_data_box td_emp_data_box_account_status">
                                                                                                <span class="tb_data_holder acc_status"><label>Status: </label>' . htmlspecialchars($clg["account_status"]) . '</span>';

                                                                                                if ($clg["account_status"] === "Active") {
                                                                                                    echo '<div class="status-indicator active-status"></div>';
                                                                                                }
                                                                                                echo '
                                                                                            </div>

                                                                                        </td>
                                                                                    </tr>';
                                                                                }
                                                                            } else {
                                                                                echo '<tr><td colspan="7">No colleagues found</td></tr>';
                                                                            }
                                                                            ?>

                                                                    


                                                                </table>


                                                    </div>

                                     </div>


                        </div>

                  








                        <!-- MAIN CONTENTS ==================================================================================== -->
                        <div class="container main_contents" id="db_main_contents_id">


            




                        


                        </div>
                        <!-- END MAIN CONTENTS ==================================================================================== -->





                   






                    </div>

    
            



            </div>
            <!-- END OF DB WRAPPER -->

                                            
            <script src="../HR_JS/db_darkmode.js"></script>
            <script src="../HR_JS/db_interaction_script.js"></script>
            <script src="../HR_JS/db_error_handling.js"></script>
         
            
        </body>



</html>