
<?php 


require_once '../../Includes/dbh.inc.php';
require_once '../../Includes/config_session.inc.php';
require_once '../HR_Includes/Jobseekers_Functions/db_jobseekers_model.inc.php';
require_once '../HR_Includes/Jobseekers_Functions/db_jobseekers_view.inc.php';
require_once '../HR_Includes/Jobseekers_Functions/db_jobseekers_contr.inc.php';



if ($pdo === null) {
    die("Database connection is not established.");
}



if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!isset($_GET["id"]) || empty($_GET["id"])) {
        die("Invalid Jobpost ID! Please Try again.");
    }


    $jobseekers_id = intval($_GET["id"]);

    $query = "SELECT * FROM jobseekers_ WHERE js_id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id" => $jobseekers_id]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    



    if ($row) {
    
        $job_title = htmlspecialchars($row["job_title"]);
        $first_name = htmlspecialchars($row["firstname_"]);
        $last_name = htmlspecialchars($row["lastname_"]);
        $middle_name = htmlspecialchars($row["middlename_"]);
        $email = htmlspecialchars($row["email_"]);
        $phone_number = htmlspecialchars($row["phone_number_"]);
        $cl = htmlspecialchars($row["cover_letter_"]);
        $justification = htmlspecialchars($row["additional_question_"]);
       


    } else {
        die("No job post found with ID: $jobseekers_id");
    }




}



if($_SERVER["REQUEST_METHOD"] === "POST"){

   
    $recruited_success = [];


    if(isset($_POST["js_id_inp"]) && !empty($_POST["js_id_inp"])){
        $jobseekers_id = intval($_POST["js_id_inp"]);



        recruit_jobseekers($pdo, $jobseekers_id);


        $recruited_success []  = "Jobseekers Recruited Successfully"; 
        $_SESSION["recruited_js_success"] =  $recruited_success;

        header("Location: recruitment_dashboard.php?='jobseekers_recruited_succesfully!");
        exit();




    }else{

        die("Invalid JobPost ID!");

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Recruit</title>


    <link rel="stylesheet" href="../HR_CSS/jobposting_validation_recruit.css">
    <link width="20" rel="icon" href="../../HRMS_Images/NodeLab LOGO 2.png" type="image/png">


</head>


    <body>

        <div class="recruit_val_wrapper">

                <div class="template bd_recruit_val_wrapper">

                        <div class="top_left_gradient">


                          


                        </div>

                </div>

                <div class="template fp_recruit_val_wrapper">

                    <div class="container jobssekers_text_div">

                            <img width="60" src="../../HRMS_Images/NodeLab LOGO 1.png">

                            <p id="recrt-text_main_text" id="recrt-text_main_text">Recruit Jobseeker  
                                                
                                <p class="recruit_text recrt-text_js_name"> <?php  echo $first_name ?></p>?
                                
                            </p>
                    
                    </div>





                    
                    <div class="container js_main_data_div">

                            <div class="main_data_divs header_div">

                                <div class="attachment_icon_div">

                                    <img width="40" src="../../HRMS_Images/ATTACHMENT_PNG_2.png">
                                    
                                  

                                </div>

                          
                            </div>

                            <div class="main_data_divs data_div">

                                <div class="lr_data_div left_data_div">


                                    <div class="data_name_box">

                                        <label name="name_label">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>    
                                            
                                            Full Name:
                                    
                                        </label>

                                            <div class="full_name_div">

                                                <span class="data_holder lname_holder">Lastname: <?php echo $last_name ?> </span>
                                                <span class="data_holder fname_holder">Firstname: <?php echo $first_name ?> </span>
                                                <span class="data_holder mname_holder">MiddleName: <?php echo $middle_name ?> </span>
                                                
        
                                            </div>

                                    </div>

                                    
                                    <div class="data_name_box">

                                        <label>
                                            
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>

                                        Contact Information:</label>

                                            <div class="contact_info_div">

                                                <span class="data_holder email_holder">Email: <?php echo $email ?>  </span>
                                                <span class="data_holder pnum_holder">Phone Number: <?php echo $phone_number ?>   </span>

                                            </div>
                                        

                                    </div>
                                 


                                </div>
                                <div class="lr_data_div right_data_div">


                                    <div class="data_name_box cover_letter_div">

                                            <label>
                                                
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z"></path></svg>
                                            
                                            
                                            Personalize Cover Letter:</label>

                                            <div class="cl_div">


                                                 <p class="data_holder cl_holder"> <?php echo $cl ?>  </p>
  

                                            </div>

                                    </div>

                                    
                                    <div class="data_name_box justification_letter_div">

                                            <label>
                                                
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 16C17.6569 16 19 17.3431 19 19C19 20.6569 17.6569 22 16 22C14.3431 22 13 20.6569 13 19C13 17.3431 14.3431 16 16 16ZM6 12C8.20914 12 10 13.7909 10 16C10 18.2091 8.20914 20 6 20C3.79086 20 2 18.2091 2 16C2 13.7909 3.79086 12 6 12ZM14.5 2C17.5376 2 20 4.46243 20 7.5C20 10.5376 17.5376 13 14.5 13C11.4624 13 9 10.5376 9 7.5C9 4.46243 11.4624 2 14.5 2Z"></path></svg>
                                            
                                            Justificaiton:</label>

                                            <div class="jl_div">


                                                <p class="data_holder jl_holder">  <?php echo $justification ?>  </p>


                                            </div>
                                     


                                    </div>
                                        
                                        
                                    
                            
                                </div>

                            </div>

                            <form class="main_data_divs button_div" method="POST">

                                    <input type="hidden" id="recrt_id_holder" name="js_id_inp" value="<?php echo $jobseekers_id ?> ">

                                    <button class="recrt-btn recruit-btn" >Recruit</button>
                                    <a href="../../HR_Modules/HR_HTML/recruitment_dashboard.php" class="recrt-btn discard-btn">Discard</a>

                           
                            </form>


                    </div>
                    


                </div>




        </div>



        
    </body>




</html>