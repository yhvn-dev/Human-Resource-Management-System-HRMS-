


<?php 




function get_recruited_jobseekers(
                                object $pdo,
                                int $jobseekers_id = 0,
                                string $first_name = " ",
                                string $last_name = " ",
                                string $email = " ",
                                string $middle_name = " ",
                                string $phone_number = " ",
                                string $resume = " ",
                                string $job_title = " ") {


    $query = "SELECT * FROM jobseekers_ WHERE status = 'Recruited' ";
        
    $params = [];

    if ($jobseekers_id > 0) {
        $query .= " AND js_id = :jobseekers_id'";
        $params[':jobseekers_id'] = $jobseekers_id;
      }

      if(!empty($firstname)){
        $query .= " AND firstname_ LIKE :firstname";
        $params[':firstname'] = "%$$first_name%";
      }

      if(!empty($lastname)){
        $query .= " AND lastname_ LIKE :lastname";
        $params[':lastname'] = "%$$last_name%";
      }

      if(!empty($middle_name)){
        $query .= " AND middlename_ LIKE :middlename";
        $params[':middlename'] = "%$$$middle_name%";
      }

      if(!empty($email)){
        $query .= " AND email_ LIKE :email";
        $params[':email'] = "%$email%";
      }


      if(!empty($phone_number)){
        $query .= "AND phone_number_ LIKE :phone_number";
        $params[':phone_number'] = "%$phone_number";
      }


      if(!empty($resume)){
        $query .= "AND resume_path_ LIKE :resume";
        $params[':resume'] = "%$$resume";
      }


      if(!empty($job_title)){
        $query .= " AND job_title LIKE :job_title";
        $params[':job_title'] = "%$job_title%";
      }
      
      $stmt = $pdo->prepare($query);
      $stmt->execute($params);
  
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  
}



function get_all_fired_employees(object $pdo,
string $employee_id, 
string $first_name, 
string $last_name,
string $job_title, 
string $hiring_date,
string $firing_date,
string $status
  ){


  
  $query = "SELECT * FROM employees_ WHERE account_status = 'Fired'  ORDER BY firing_date DESC";

  $params = [];


  if ($employee_id) {
      $query .= " AND employee_id = :employee_id";
      $params[':employee_id'] = $$employee_id;
  }

  if (!empty($first_name)) {
      $query .= " AND first_name LIKE :firstname";
      $params[':firstname'] = "%$first_name%";
  }

  if (!empty($last_name)) {
      $query .= " AND last_name LIKE :lastname";
      $params[':lastname'] = "%$last_name%";
  }

  if (!empty($job_title)) {
      $query .= " AND job_title LIKE :job_title";
      $params[':job_title'] = "%$job_title%";
  }

  if (!empty($hiring_date)) {
      $query .= " AND submission_date LIKE :submission_date";
      $params[':submission_date'] = "%$hiring_date%";
  }

  if(!empty($firing_date)){
    $query .= " AND firing_date LIKE :firing_date";
    $params[':firing_date'] = "%$firing_date%";
  }

  
  if (!empty($status)) {
      $query .= " AND status LIKE :status";
      $params[':status'] = "%$status%";
  }

                  
  $stmt = $pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);


}





function get_all_employees(object $pdo,
                          string $employee_id, 
                          string $first_name, 
                          string $last_name,
                          string $middle_name,
                          string $job_title, 
                          string $email,
                          string $phone_number,
                          string $hiring_date,
                          string $status
                            ){
                            
                            $query = "SELECT * FROM employees_ WHERE 1=1  ORDER BY submission_date DESC";

                            $params = [];


                            if ($employee_id) {
                                $query .= " AND employee_id = :employee_id";
                                $params[':employee_id'] = $$employee_id;
                            }
                        
                            if (!empty($first_name)) {
                                $query .= " AND first_name LIKE :firstname";
                                $params[':firstname'] = "%$first_name%";
                            }
                        
                            if (!empty($last_name)) {
                                $query .= " AND last_name LIKE :lastname";
                                $params[':lastname'] = "%$last_name%";
                            }

                            if (!empty($middle_name)) {
                              $query .= " AND middle_name LIKE :middle_name";
                              $params[':middle_name'] = "%$middle_name%";
                          }

                        
                            if (!empty($job_title)) {
                                $query .= " AND job_title LIKE :job_title";
                                $params[':job_title'] = "%$job_title%";
                            }
                        
                            if (!empty($email)) {
                                $query .= " AND email_ LIKE :email";
                                $params[':email'] = "%$email%";
                            }
                        
                            if (!empty($phone_number)) {
                                $query .= " AND phone_number_ LIKE :phone_number";
                                $params[':phone_number'] = "%$phone_number%";
                            }
                        
                            if (!empty($hiring_date)) {
                                $query .= " AND resume_path LIKE :resume";
                                $params[':resume'] = "%$hiring_date%";
                            }

                            if (!empty($status)) {
                                $query .= " AND status LIKE :status";
                                $params[':status'] = "%$status%";
                            }

                                            
                            $stmt = $pdo->prepare($query);
                            $stmt->execute($params);
                            return $stmt->fetchAll(PDO::FETCH_ASSOC);
                          
}






function delete_empoloyee_from_the_system(object $pdo, int $id){
  
  $query = "DELETE FROM employees_ WHERE id = :id";
  $stmt = $pdo->prepare($query);
  $stmt->execute([':id' => $id]);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}

function update_employee_status_fire(object $pdo,int $id){

    $query = "UPDATE employees_ SET account_status = 'Fired', firing_date = NOW() WHERE id=:id ";

    $stmt = $pdo->prepare($query);
    $stmt->execute([":id"=>$id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}






function get_employee_count(object $pdo, 
                            string $account_status = "", 
                            string $job_title = "") {


    $query = "SELECT COUNT(*) AS total FROM employees_ WHERE 1=1";  
    $params = [];

    // Filter by account status if provided
    if (!empty($account_status)) {
        $query .= " AND account_status = :account_status";
        $params[':account_status'] = $account_status;
    }

    // Filter by department if provided
    if (!empty($job_title)) {
        $query .= " AND job_title = :job_title";
        $params[':department'] = $job_title;
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total'] ?? 0; 
}



function get_job_title_with_most_active_employees(object $pdo, string $account_status = "Active") {
  // Query to find the job title with the most active employees
  $query = "
      SELECT job_title, COUNT(*) AS total
      FROM employees_
      WHERE account_status = :account_status
      GROUP BY job_title
      ORDER BY total DESC
      LIMIT 1
  ";

  $stmt = $pdo->prepare($query);
  $stmt->execute([':account_status' => $account_status]);

  // Fetch the result and return
  return $stmt->fetch(PDO::FETCH_ASSOC);
}







function get_employee_id(object $pdo, string $employee_id){

  $query = "SELECT employee_id FROM employees_ WHERE employee_id = :employee_id";

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":employee_id",$employee_id);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}








function set_employee(
object $pdo,
string $employee_id = "",
string $first_name = "",
string $last_name = "",
string $middle_name = "",
string $email = "",
string $phone_number = "",
string $resume_path = "",
string $job_title = "",
string $department = "",
string $role = "",
string $password = "")

{

$query = "INSERT INTO employees_ (employee_id, first_name, last_name, middle_name, email_, phone_number_, resume_path_, job_title, department_, role_, password_) VALUES
                                 (:employee_id,:first_name,:last_name,:middle_name,:email_,:phone_number, :resume_path,:job_title,:department_, :role_,:password_)";


    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":employee_id", $employee_id);
    $stmt->bindParam(":first_name", $first_name);
    $stmt->bindParam(":last_name", $last_name );
    $stmt->bindParam(":middle_name", $middle_name);
    $stmt->bindParam(":email_", $email);
    $stmt->bindParam(":phone_number", $phone_number);
    $stmt->bindParam(":resume_path", $resume_path);
    $stmt->bindParam(":job_title", $job_title);
    $stmt->bindParam(":department_", $department);
    $stmt->bindParam(":role_", $role);
    $stmt->bindParam(":password_", $password);

    $stmt->execute();

}

