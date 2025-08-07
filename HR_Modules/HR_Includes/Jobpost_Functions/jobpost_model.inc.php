
    <?php 


    // INSERT JOB POST ============================================================================================
    function set_jobposts(
        $pdo,
        $job_title,
        $job_description,
        $field_category,
        $min_age,
        $max_age,
        $job_location,
        $salary_range_from,
        $salary_range_to,
        $employment_type,
        $required_qualifications,
        $preferred_qualifications,
        $application_deadline,
        $posting_date,
        $contact_information,
  
    ) {
        $query = "INSERT INTO jobposts_ (
                    job_title, job_description, field_category, min_age, max_age, 
                    job_location, salary_range_from, salary_range_to, employment_type, 
                    req_qual, pref_qual, appl_deadline, 
                    posting_date, contact_information
                  ) VALUES (
                    :job_title, :job_description, :field_category, :min_age, :max_age, 
                    :job_location, :salary_range_from, :salary_range_to, :employment_type, 
                    :required_qualifications, :preferred_qualifications, :application_deadline, 
                    :posting_date, :contact_information
                  )";
    
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':job_title' => $job_title,
            ':job_description' => $job_description,
            ':field_category' => $field_category,
            ':min_age' => $min_age,
            ':max_age' => $max_age,
            ':job_location' => $job_location,
            ':salary_range_from' => $salary_range_from,
            ':salary_range_to' => $salary_range_to,
            ':employment_type' => $employment_type,
            ':required_qualifications' => $required_qualifications,
            ':preferred_qualifications' => $preferred_qualifications,
            ':application_deadline' => $application_deadline,
            ':posting_date' => $posting_date,
            ':contact_information' => $contact_information,
           
        ]);
    }



    // GET JOBPOST FOR TABLE A ============================================================================================
    function get_jobposts_a( 
        object $pdo,
        int $jobpost_id = 0,
        string $job_title = '',
        string $job_description = '',
        string $field_category = '',
        int $min_age = 0,
        int $max_age = 0,
        string $job_location = '',
        string $status = ''
    ) {

        // Base query
        $query = "SELECT * FROM jobposts_ WHERE 1=1";

        // Dynamic query filters based on provided parameters
        $params = [];
        if (!empty($jobpost_id)) {
            $query .= " AND jp_id LIKE :jobpost_id";
            $params[':jobpost_id'] = "%$jobpost_id%";
        }
        if (!empty($job_title)) {
            $query .= " AND job_title LIKE :job_title";
            $params[':job_title'] = "%$job_title%";
        }
        if (!empty($job_description)) {
            $query .= " AND job_description LIKE :job_description";
            $params[':job_description'] = "%$job_description%";
        }
        if (!empty($field_category)) {
            $query .= " AND field_category = :field_category";
            $params[':field_category'] = $field_category;
        }
        if ($min_age > 0) {
            $query .= " AND min_age >= :min_age";
            $params[':min_age'] = $min_age;
        }
        if ($max_age > 0) {
            $query .= " AND max_age <= :max_age";
            $params[':max_age'] = $max_age;
        }
        if (!empty($job_location)) {
            $query .= " AND job_location = :job_location";
            $params[':job_location'] = $job_location;
        }

        if (!empty($status)) {
            $query .= " AND status = :status";
            $params[':status'] = $status;
        }

        // Prepare and execute the query
        $stmt = $pdo->prepare($query);
        $stmt->execute($params);

        // Fetch all rows
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }








    // GET JOBPOST FOR TABLE B ============================================================================================
    function get_jobposts_b(
        object $pdo,
        int $jobpost_id = 0,
        int $salary_range_from = 0,
        int $salary_range_to = 0,
        string $employment_type = '',
        string $required_qualifications = '',
        string $preferred_qualifications = '',
        string $application_deadline = '',
        string $posting_date = '',
        string $contact_information = '',
        string $status = '',
        
    ) {
        try {
            $query = "SELECT * FROM jobposts_ WHERE 1=1";
            $params = [];
    
            if ($jobpost_id > 0) {
                $query .= " AND jp_id = :jobpost_id";
                $params[':jobpost_id'] = $jobpost_id;
            }
            if ($salary_range_from > 0) {
                $query .= " AND salary_range_from >= :salary_range_from";
                $params[':salary_range_from'] = $salary_range_from;
            }
            if ($salary_range_to > 0) {
                $query .= " AND salary_range_to <= :salary_range_to";
                $params[':salary_range_to'] = $salary_range_to;
            }
            if (!empty($employment_type)) {
                $query .= " AND employment_type = :employment_type";
                $params[':employment_type'] = $employment_type;
            }
            if (!empty($required_qualifications)) {
                $query .= " AND req_qual LIKE :required_qualifications";
                $params[':required_qualifications'] = "%$required_qualifications%";
            }
            if (!empty($preferred_qualifications)) {
                $query .= " AND pref_qual LIKE :preferred_qualifications";
                $params[':preferred_qualifications'] = "%$preferred_qualifications%";
            }
            if (!empty($application_deadline)) {
                $query .= " AND appl_deadline = :application_deadline";
                $params[':application_deadline'] = $application_deadline;
            }
            if (!empty($posting_date)) {
                $query .= " AND posting_date = :posting_date";
                $params[':posting_date'] = $posting_date;
            }
            if (!empty($contact_information)) {
                $query .= " AND contact_information = :contact_information";
                $params[':contact_information'] = $contact_information;
            }

            if (!empty($status)) {
                $query .= " AND status = :status";
                $params[':status'] = $status;
            }
        
    
            $stmt = $pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
     




    


    function count_total_jobposts(
        object $pdo,
        string $status = '',
        string $job_title = ''
      ) {
      
        $query = "SELECT COUNT(*) AS total FROM jobposts_ WHERE 1=1";
        $params = [];
      
        if (!empty($status)) {
            $query .= " AND status = :status";
            $params[':status'] = $status;
        }
      
        if (!empty($job_title)) {
            $query .= " AND job_title LIKE :job_title";
            $params[':job_title'] = "%$job_title%";
        }
      
        $stmt = $pdo->prepare($query);
        $stmt->execute($params);
      
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'] ?? 0; 
      
      }





      

    // function get_jobpost_all(

    //     object $pdo,
    //     int $jobpost_id = 0,
    //     string $job_title = '',
    //     string $job_description = '',
    //     string $field_category = '',
    //     int $min_age = 0,
    //     int $max_age = 0,
    //     int    $salary_range_from = 0,
    //     int    $salary_range_to = 0,
    //     string $employment_type = '',
    //     string $required_qualifications = '',
    //     string $preferred_qualifications = '',
    //     string $application_deadline = '',
    //     string $posting_date = '',
    //     string $contact_information = '',

    // ){
        
    //     $query = "SELECT * FROM jobposts_ WHERE jp_id=$jobpost_id";

    //       // Dynamic query filters based on provided parameters
    //       $params = [];
    //       if (!empty($jobpost_id)) {
    //           $query .= " AND jp_id LIKE :jobpost_id";
    //           $params[':jobpost_id'] = "%$jobpost_id%";
    //       }
    //       if (!empty($job_title)) {
    //           $query .= " AND job_title LIKE :job_title";
    //           $params[':job_title'] = "%$job_title%";
    //       }
    //       if (!empty($job_description)) {
    //           $query .= " AND job_description LIKE :job_description";
    //           $params[':job_description'] = "%$job_description%";
    //       }
    //       if (!empty($field_category)) {
    //           $query .= " AND field_category = :field_category";
    //           $params[':field_category'] = $field_category;
    //       }
    //       if ($min_age > 0) {
    //           $query .= " AND min_age >= :min_age";
    //           $params[':min_age'] = $min_age;
    //       }
    //       if ($max_age > 0) {
    //           $query .= " AND max_age <= :max_age";
    //           $params[':max_age'] = $max_age;
    //       }
    //       if (!empty($job_location)) {
    //           $query .= " AND job_location = :job_location";
    //           $params[':job_location'] = $job_location;
    //       }

    //         if ($salary_range_from > 0) {
    //             $query .= " AND salary_range_from >= :salary_range_from";
    //             $params[':salary_range_from'] = $salary_range_from;
    //         }
    //         if ($salary_range_to > 0) {
    //             $query .= " AND salary_range_to <= :salary_range_to";
    //             $params[':salary_range_to'] = $salary_range_to;
    //         }
    //         if (!empty($employment_type)) {
    //             $query .= " AND employment_type = :employment_type";
    //             $params[':employment_type'] = $employment_type;
    //         }
    //         if (!empty($required_qualifications)) {
    //             $query .= " AND req_qual LIKE :required_qualifications";
    //             $params[':required_qualifications'] = "%$required_qualifications%";
    //         }
    //         if (!empty($preferred_qualifications)) {
    //             $query .= " AND pref_qual LIKE :preferred_qualifications";
    //             $params[':preferred_qualifications'] = "%$preferred_qualifications%";
    //         }
    //         if (!empty($application_deadline)) {
    //             $query .= " AND appl_eadline = :application_deadline";
    //             $params[':application_deadline'] = $application_deadline;
    //         }
    //         if (!empty($posting_date)) {
    //             $query .= " AND posting_date = :posting_date";
    //             $params[':posting_date'] = $posting_date;
    //         }
    //         if (!empty($contact_information)) {
    //             $query .= " AND contact_information = :contact_information";
    //             $params[':contact_information'] = $contact_information;
    //         }
            

    //         $stmt = $pdo->prepare($query);
    //         $stmt->execute($params);
    
    //         // Fetch all rows
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);


    // }


function feed_get_all_jobpost(
    
    object $pdo,
    int $jobpost_id = 0,
    string $job_title = '',
    string $job_description = '',
    string $field_category = '',
    int $min_age = 0,
    int $max_age = 0,
    string $job_location = '',
    int    $salary_range_from = 0,
    int    $salary_range_to = 0,
    string $employment_type = '',
    string $required_qualifications = '',
    string $preferred_qualifications = '',
    string $application_deadline = '',
    string $posting_date = '',
    string $contact_information = ''){

        $query = "SELECT * FROM jobposts_ WHERE jp_id=$jobpost_id";

          // Dynamic query filters based on provided parameters
          $params = [];
          if (!empty($jobpost_id)) {
              $query .= " AND jp_id LIKE :jobpost_id";
              $params[':jobpost_id'] = "%$jobpost_id%";
          }
          if (!empty($job_title)) {
              $query .= " AND job_title LIKE :job_title";
              $params[':job_title'] = "%$job_title%";
          }
          if (!empty($job_description)) {
              $query .= " AND job_description LIKE :job_description";
              $params[':job_description'] = "%$job_description%";
          }
          if (!empty($field_category)) {
              $query .= " AND field_category = :field_category";
              $params[':field_category'] = $field_category;
          }
          if ($min_age > 0) {
              $query .= " AND min_age >= :min_age";
              $params[':min_age'] = $min_age;
          }
          if ($max_age > 0) {
              $query .= " AND max_age <= :max_age";
              $params[':max_age'] = $max_age;
          }
          if (!empty($job_location)) {
              $query .= " AND job_location = :job_location";
              $params[':job_location'] = $job_location;
          }

            if ($salary_range_from > 0) {
                $query .= " AND salary_range_from >= :salary_range_from";
                $params[':salary_range_from'] = $salary_range_from;
            }
            if ($salary_range_to > 0) {
                $query .= " AND salary_range_to <= :salary_range_to";
                $params[':salary_range_to'] = $salary_range_to;
            }
            if (!empty($employment_type)) {
                $query .= " AND employment_type = :employment_type";
                $params[':employment_type'] = $employment_type;
            }
            if (!empty($required_qualifications)) {
                $query .= " AND req_qual LIKE :required_qualifications";
                $params[':required_qualifications'] = "%$required_qualifications%";
            }
            if (!empty($preferred_qualifications)) {
                $query .= " AND pref_qual LIKE :preferred_qualifications";
                $params[':preferred_qualifications'] = "%$preferred_qualifications%";
            }
            if (!empty($application_deadline)) {
                $query .= " AND appl_eadline = :application_deadline";
                $params[':application_deadline'] = $application_deadline;
            }
            if (!empty($posting_date)) {
                $query .= " AND posting_date = :posting_date";
                $params[':posting_date'] = $posting_date;
            }
            if (!empty($contact_information)) {
                $query .= " AND contact_information = :contact_information";
                $params[':contact_information'] = $contact_information;
            }
            

            $stmt = $pdo->prepare($query);
            $stmt->execute($params);
    
            // Fetch all rows
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

}


function feed_get_jobpost( 
    object $pdo,
    int $jobpost_id = 0,
    string $job_title = '',
    string $field_category = '',
    string $required_qualifications = '',
    string $preferred_qualifications = '',
    string $posting_date = '',
    string $contact_information = ''
){
    

    try{

        $query = "SELECT * FROM jobposts_ WHERE 1=1";
        $params = [];

        if ($jobpost_id > 0) {
            $query .= " AND jp_id = :jobpost_id";
            $params[':jobpost_id'] = $jobpost_id;
        }
        if (!empty($job_title)) {
            $query .= " AND job_title LIKE :job_title";
            $params[':job_title'] = "%$job_title%";
        }
        
        if (!empty($field_category)) {
            $query .= " AND field_category = :field_category";
            $params[':field_category'] = $field_category;
        }

        if (!empty($required_qualifications)) {
            $query .= " AND req_qual LIKE :required_qualifications";
            $params[':required_qualifications'] = "%$required_qualifications%";
        }
        if (!empty($preferred_qualifications)) {
            $query .= " AND pref_qual LIKE :preferred_qualifications";
            $params[':preferred_qualifications'] = "%$preferred_qualifications%";
        }
        if (!empty($posting_date)) {
            $query .= " AND posting_date = :posting_date";
            $params[':posting_date'] = $posting_date;
        }
        if (!empty($contact_information)) {
            $query .= " AND contact_information = :contact_information";
            $params[':contact_information'] = $contact_information;
        }
    

        $stmt = $pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];

    }
    
      
    }
     
    
    // EDIT JOBPOST ============================================================================================
