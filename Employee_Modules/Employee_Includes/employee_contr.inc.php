<?php





function populate_table_with_colleagues(object $pdo,
string $first_name, 
string $last_name,
string $middle_name,
string $job_title, 
string $department,
string $status){

    return get_colleagues( 
    $pdo,
     $first_name, 
     $last_name,
     $middle_name,
     $job_title, 
     $department,
    $status);
}
