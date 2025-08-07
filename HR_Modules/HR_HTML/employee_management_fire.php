

<?php 


require_once '../../Includes/dbh.inc.php';
require_once '../../Includes/config_session.inc.php';

require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_module.inc.php';
require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_view.inc.php';
require_once '../../HR_Modules/HR_Includes/Employee_Management_Functions/employee_m_contr.inc.php';



if ($pdo === null) {
    die("Database connection is not established.");
}


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        die("Invalid Employee_ID ! Please Try again.");
    }


    
    $id = intval($_GET["id"]);

    $query = "SELECT * FROM employees_ WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id" => $id]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    


    if ($row) {
    
        $employee_id = htmlspecialchars($row["employee_id"]);
        $first_name = htmlspecialchars($row["first_name"]);
        $last_name = htmlspecialchars($row["last_name"]);
        $middle_name = htmlspecialchars($row["middle_name"]);
        $email = htmlspecialchars($row["email_"]);
        $phone_number = htmlspecialchars($row["phone_number_"]);
        $job_title = htmlspecialchars($row["job_title"]);
        $department = htmlspecialchars($row["department_"]);
        $role = htmlspecialchars($row["role_"]);
        $submission_date = htmlspecialchars($row["submission_date"]);
     
     

    } else {
        die("No job post found with ID: $id");
    }


}




if($_SERVER["REQUEST_METHOD"] === "POST"){

    $fire_success = [];

    if(isset($_POST["emp_prim_id_holder"]) && !empty($_POST["emp_prim_id_holder"])){

        $id = intval($_POST["emp_prim_id_holder"]);


        fire_employee( $pdo, $id);

        $fire_success[] = "Employee Fired Successfully!";
        $_SESSION["fire_js_success"] =  $fire_success;
        

        header("Location: employee_management_db.php?='employee_fired_succesfully!");
        exit();


    }else{

        die("Invalid Employee ID!");

    }

}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire</title>

    <link rel="stylesheet"  href="../HR_CSS/employee_management_fire.css">
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">

    
</head>




<body>

<div class="fire_val_wrapper">

        <div class="template bd_fire_val_wrapper">

                

        </div>

        <div class="template fp_fire_val_wrapper">

            <div class="container jobssekers_text_div">

                    <img width="60" src="../../HRMS_Images/NodeLab LOGO 1.png">

                    <p id="fire-text_main_text" id="fire-text_main_text">Fire Employee
                                        
                        <p class="fire_text fire-text_js_name"> <?php  echo $employee_id  ?> </p> ?
                        
                    </p>
            
            </div>





            
            <orm class="container js_main_data_div">

                    <div class="main_data_divs header_div">

                        <div class="attachment_icon_div">

                            <img width="40" src="../../HRMS_Images/ATTACHMENT_PNG_2.png">
                            
                          

                        </div>

                  
                    </div>







                    <div class="main_data_divs data_div">


                        <div class="lr_data_div left_data_div">


                            <div class="data_name_box">

                            <label name="emp_job_id">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM4 15V19H20V15H4ZM11 11V13H13V11H11ZM9 3V5H15V3H9Z"></path></svg>
                                    Job Title              

                            </label>

                                <div class="full_name_div">

                                    <span class="data_holder employee_id_holder">Employee ID: <?php echo  $employee_id ?> </span>
                                    <span class="data_holder job_title_holder">Job Title:  <?php echo $job_title?>   </span>
                                
                                      
                                </div>

                            </div>

                          
    
                                <div class="data_name_box">

                                    <label name="name_label">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>    
                                        
                                        Full Name:

                                    </label>

                                        <div class="full_name_div">

                                            <span class="data_holder lname_holder">Lastname:  <?php  echo $last_name?> </span>
                                            <span class="data_holder fname_holder">Firstname:  <?php  echo $first_name?>  </span>
                                            <span class="data_holder mname_holder">Middlename:  <?php  echo $middle_name?>  </span>
                                            
                                                

                                        </div>

                                </div>

                                    <div class="data_name_box">


                                        <label>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>
        
                                            Contact Information:</label>
        
                                            <div class="contact_info_div">
        
                                                <span class="data_holder email_holder">Email:  <?php  echo $email ?>    </span>
                                                <span class="data_holder pnum_holder">Phone Number:  <?php  echo $phone_number ?>   </span>
        
                                            </div>


                                    </div>
                              



                        </div>


                        <div class="lr_data_div right_data_div">


                          <div class="data_name_box department_role">

                                            <label>
                                                
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 10C14.2091 10 16 8.20914 16 6 16 3.79086 14.2091 2 12 2 9.79086 2 8 3.79086 8 6 8 8.20914 9.79086 10 12 10ZM5.5 13C6.88071 13 8 11.8807 8 10.5 8 9.11929 6.88071 8 5.5 8 4.11929 8 3 9.11929 3 10.5 3 11.8807 4.11929 13 5.5 13ZM21 10.5C21 11.8807 19.8807 13 18.5 13 17.1193 13 16 11.8807 16 10.5 16 9.11929 17.1193 8 18.5 8 19.8807 8 21 9.11929 21 10.5ZM12 11C14.7614 11 17 13.2386 17 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5 15.9999C5 15.307 5.10067 14.6376 5.28818 14.0056L5.11864 14.0204C3.36503 14.2104 2 15.6958 2 17.4999V21.9999H5V15.9999ZM22 21.9999V17.4999C22 15.6378 20.5459 14.1153 18.7118 14.0056 18.8993 14.6376 19 15.307 19 15.9999V21.9999H22Z"></path></svg>
                                               
                                                Groups:</label>

                                            <div class="dept_role_div">

                                                 <p class="data_holder dept_holder">Department: <?php echo  $department?>  </p>
                                                 <p class="data_holder role_holder">Role: <?php echo  $role?>   </p>
  
                                            </div>

                          </div>


                            <div class="data_name_box created_at">

                                    <label>
                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z"></path></svg>
                                    
                                        Created At:</label>

                                    <div class="create_div">

                                        <p class="data_holder create_at_holder"> <?php echo  $submission_date ?>   </p>

                                    </div>

                            </div>


                        </div>

              




                       
                    </div>

                    <!-- END OF DATA DIV -->

                    <form class="button_form" method="POST">

                        <div class="id_holder_div">
                            <input type="hidden" value="<?php echo $id ?>"  class="id_holder" name="emp_prim_id_holder">
                        </div>

                        <div class="button_div">

                            <button class="fire_emp_btn"  id="fire_button">Fire</button>
                            <a href="employee_management_db.php" class="fire_emp_btn"  id="discard-btn">Discard</a>


                        </div>

                    

                    </form>


                 


            </div>
            


        </div>




</div>


   <script src=""></script>


</body>





</html>