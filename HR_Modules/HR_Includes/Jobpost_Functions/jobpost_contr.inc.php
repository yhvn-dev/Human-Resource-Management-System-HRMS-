<?php

declare(strict_types=1);


// ERROR FUNCTIONS =======================================================================================








// IF FORM IS EMPTY FUNCTION --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

function is_form_empty(
    string $job_title,
    string $job_description,
    string $field_category,
    int    $min_age,
    int    $max_age,
    string $job_location,
    int    $salary_range_from,
    int    $salary_range_to,
    string $employment_type,
    string $required_qualifications,
    string $preferred_qualifications,
    string $application_deadline,
    string $posting_date,
    string $contact_information,
   
) {
    // Check if any string fields are empty after trimming whitespace
    if (
        empty(trim($job_title)) || 
        empty(trim($job_description)) || 
        empty(trim($field_category)) || 
        $min_age <= 0 || 
        $max_age <= 0 || 
        empty(trim($job_location)) || 
        $salary_range_from <= 0 || 
        $salary_range_to <= 0 ||
        empty(trim($employment_type)) || 
        empty(trim($required_qualifications)) || 
        empty(trim($preferred_qualifications)) || 
        empty(trim($application_deadline)) || 
        empty(trim($posting_date)) || 
        empty(trim($contact_information)) 


    ) {
        return true;
    }

    return false;

}


// IS JOB POST DELETED ====================================================




// MIN AGE > MAX AGE --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---





function validate_age_range($min_age, $max_age) {
    $errors = [];

    // Check if both values are provided
    if (!empty($min_age) && !empty($max_age)) {
      
        
        if ($min_age >= $max_age) {
            $errors[] = "Minimum Age Cannot Be Greater Than or Equal to Maximum Age";
        }
    }

    return $errors;
}

function validate_salary_range($salary_range_from, $salary_range_to) {
    $errors = [];

    // Check if both values are provided
    if (!empty($salary_range_from) && !empty($salary_range_to)) {
        // Validate salary range
        if ($salary_range_from >= $salary_range_to) {
            $errors[] = "Minimum Salary Cannot Be Greater Than or Equal to Maximum Salary";
        }
    }

    return $errors;
}


function paste_total_jobposts_count(object $pdo,   string $status = '', string $job_title = ''){

    return count_total_jobposts($pdo, $status, $job_title);
      

}


// END OF ERROR FUNCTIONS =======================================================================



function create_jobposts(
    object $pdo,
    string $job_title,
    string $job_description,
    string $field_category,
    int    $min_age,
    int    $max_age,
    string $job_location,
    int    $salary_range_from,
    int    $salary_range_to,
    string $employment_type,
    string $required_qualifications,
    string $preferred_qualifications,
    string $application_deadline,
    string $posting_date,
    string $contact_information,
   
 
){
   
    
    set_jobposts(
        $pdo,
        $job_title,
        $job_description,
        $field_category,
        $min_age,
        $max_age,
        $job_location,
        $salary_range_from,  // Pass the raw salary value (integer)
        $salary_range_to,    // Pass the raw salary value (integer)
        $employment_type,
        $required_qualifications,
        $preferred_qualifications,
        $application_deadline,
        $posting_date,
        $contact_information
    );
}

// POPULATE TABLE A  --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
function populate_with_jobposts_a( 
    object $pdo,
    int $jobpost_id,
    string $job_title,
    string $job_description,
    string $field_category,
    int $min_age,
    int $max_age,
    string $job_location
) {
    
    // Call get_jobposts_a and return the result
    return get_jobposts_a(
        $pdo,
        $jobpost_id,
        $job_title,
        $job_description,
        $field_category,
        $min_age,
        $max_age,
        $job_location
    );
}





// POPULATE TABLE B --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---

function populate_with_jobposts_b( 
object $pdo,
int $jobpost_id,
int    $salary_range_from ,
int    $salary_range_to,
string $employment_type,
string $required_qualifications,
string $preferred_qualifications,
string $application_deadline,
string $posting_date,
string $contact_information

){


    return get_jobposts_b( $pdo,
     $jobpost_id,
    $salary_range_from ,
    $salary_range_to,
    $employment_type,
    $required_qualifications,
    $preferred_qualifications,
    $application_deadline,
    $posting_date,
    $contact_information
                   

);

}






function feed_post_jobpost( 

    object $pdo,
    int $jobpost_id,
    string $job_title,
    string $field_category,
    string $required_qualifications,
    string $preferred_qualifications,
    string $posting_date,
    string $contact_information

){

       return feed_get_jobpost(  
        $pdo, 
        $jobpost_id,
        $job_title,
                   $field_category,
        $required_qualifications,
        $preferred_qualifications,
        $posting_date,
        $contact_information
        );

}