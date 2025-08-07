<?php


// ERROR HANDLING


function is_crem_form_empty(
    string $employee_id,
    string $department,
    string $role,
    string $password
) {
    // Debug output
    var_dump($employee_id, $department, $role, $password);
    
    if (
        empty(trim($employee_id)) || 
        empty(trim($department)) || 
        empty(trim($role)) ||
        empty(trim($password))
    ) {
        return true;
    }

    return false;
}









// function paste_crem_field_with_js_data(
//     object $pdo,
//     int $jobseekers_id,
//     string $first_name,
//     string $last_name,
//     string $email,
//     string $middle_name,
//     string $phone_number,
//     string $resume,
//     string $job_title) {


//     return get_recruited_jobseekers(
//             $pdo,
//             $jobseekers_id,
//             $first_name,
//             $last_name, 
//             $email, 
//             $middle_name, 
//             $phone_number,
//             $resume, 
//             $job_title);
            
//     }




    
function is_employee_id_exist($pdo,$employee_id){

    if(get_employee_id($pdo,$employee_id)){
        return true;
    }else{
        return false;
    }

}

function delete_employee(object $pdo, int $id){

    return delete_empoloyee_from_the_system( $pdo,$id);

}


function fire_employee(object $pdo, int $id){

   return update_employee_status_fire($pdo,  $id);

}








function populate_table_with_fired_employees(object $pdo,
string $employee_id, 
string $first_name, 
string $last_name,
string $job_title, 
string $hiring_date,
string $firing_date,
string $status
){

    return  get_all_fired_employees($pdo,  
    $employee_id, 
     $first_name, 
      $last_name,
      $job_title, 
    $hiring_date,
    $firing_date,
         $status);
    
}



function populate_table_with_employee(object $pdo,
string $employee_id, 
string $first_name, 
string $last_name,
string $middle_name,
string $job_title, 
string $email,
string $phone_number,
string $hiring_date,
string $status){


        return get_all_employees(
                $pdo,  
        $employee_id, 
         $first_name, 
          $last_name,
        $middle_name,
          $job_title, 
              $email,
       $phone_number,
        $hiring_date,
             $status);

}








function create_employee($pdo,
$employee_id,
$first_name,
$last_name,
$middle_name,
$email,
$phone_number,
$resume_path,
$job_title,
$department,
$role,
$password){


    return set_employee($pdo,
    $employee_id,
     $first_name,
      $last_name,
    $middle_name,
          $email,
   $phone_number,
    $resume_path,
      $job_title,
     $department,
           $role,
       $password);
    
}

