<?php

function is_fname_empty($firstname){
    if(empty( $firstname)){
      return true;
  } else{
      return false;
  }
}


function is_lname_empty($lastname){
  if(empty( $lastname)){
    return true;
} else{
    return false;
}
}


function is_email_registered(object $pdo , string $email){   
    if(get_email( $pdo, $email)){
      return true;
  }else{
      return false;
  }
}


function is_phone_number_empty($phone_number){

    if(empty( $phone_number)){
      return true;
  } else{
      return false;
  }

}

function is_resume_valid($resume){

     if (empty($resume) || $resume['error'] !== UPLOAD_ERR_OK) {
        return true;
    }else{
        return false;
    }

}


function is_email_valid($email, &$errors) {
    if (empty($email)) {
        $errors["email_invalid"] = "Email Is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email_invalid"] = "Email is in an invalid format!";
    }
}




function create_jobseekers(
    object $pdo,
    string $firstname,
    string $lastname, 
    string $middlename,
    string $email,
    string $phone_number,
    string $resume_path,
    string $cover_letter,
    string $additional_question,
    int $jobpost_id,  
    string $job_title 
) {
   
    return set_jobseekers(
        $pdo, 
        $firstname, 
        $lastname, 
        $middlename, 
        $email, 
        $phone_number, 
        $resume_path, 
        $cover_letter, 
        $additional_question,
        $jobpost_id,  
        $job_title    
    );
}


function popuplate_table_with_jobseekers_overview(
object $pdo,
string $firstname,
string $lastname,
string $job_title,
string $email,
string $phone_number,
string $resume,
string $status){


   return get_jobseekers_overview(
          $pdo,
    $firstname,
     $lastname,
    $job_title,
        $email,
 $phone_number,
       $resume,
       $status);

}

?>