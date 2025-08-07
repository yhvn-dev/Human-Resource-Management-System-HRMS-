<?php 


function populate_table_with_approved_jobseekers(
    object $pdo,
    int $jobseekes_id,
    string $firstname,
    string $lastname,
    string $job_title,
    string $email,
    string $phone_number,
    string $resume,
    string $status){
    
       return get_approved_jobseekers(
              $pdo,
              $jobseekes_id,
        $firstname,
         $lastname,
        $job_title,
            $email,
     $phone_number,
           $resume,
           $status);
    
    }
    

    
function paste_jobseekers_count( object $pdo,string $status = '', string $job_title = ''){

    return count_jobseekers($pdo, $status,$job_title);    

}








function populate_table_with_jobseekers_overview(
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
    


function delete_jobseekers(object $pdo,int $jobseekers_id){

    delete_jobseekers_from_the_system( $pdo,  $jobseekers_id);

}




function hire_jobseekers_as_employee(object $pdo, int $jobseekers_id){

    update_jobseekers_status_employee($pdo, $jobseekers_id);

}


function approve_jobseekers(object $pdo, int $jobseekers_id){

    update_jobseekers_status_approved($pdo, $jobseekers_id);

}


function recruit_jobseekers(object $pdo, int $jobseekers_id ){

 update_jobseekers_status_recruited( $pdo,  $jobseekers_id);

}



function reject_jobseekers(object $pdo, int $jobseekers_id){

    update_jobseekers_status_reject($pdo, $jobseekers_id);

}



