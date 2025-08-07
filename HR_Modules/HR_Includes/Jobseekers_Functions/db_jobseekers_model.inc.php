<?php 



function get_approved_jobseekers( 
object $pdo,
int $jobseekers_id = 0,
string $firstname = '',
string $lastname = '',
string $job_title = '',
string $email = '',
string $phone_number = '',
string $resume = '',
string $status = ''){

    $query = "SELECT * FROM jobseekers_ WHERE status = 'Recruited' OR status = 'Approved'  OR status = 'Employee' ";

    $params = [];

    if ($jobseekers_id > 0) {
        $query .= " AND js_id = :jobseekers_id";
        $params[':jobseekers_id'] = $jobseekers_id;
    }

    if (!empty($firstname)) {
        $query .= " AND firstname_ LIKE :firstname";
        $params[':firstname'] = "%$firstname%";
    }

    if (!empty($lastname)) {
        $query .= " AND lastname_ LIKE :lastname";
        $params[':lastname'] = "%$lastname%";
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

    if (!empty($resume)) {
        $query .= " AND resume_path LIKE :resume";
        $params[':resume'] = "%$resume%";
    }

    if (!empty($status)) {
        $query .= " AND status = :status";
        $params[':status'] = $status;
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);


}






function count_jobseekers(
  object $pdo,
  string $status = '',
  string $job_title = ''
) {

  $query = "SELECT COUNT(*) AS total FROM jobseekers_ WHERE 1=1";
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


// $total_jobseekers = count_jobseekers($pdo);
// echo "Total jobseekers: $total_jobseekers";




// $approved_jobseekers = count_jobseekers($pdo, 'approved');
// echo "Approved jobseekers: $approved_jobseekers";


// $approved_developers = count_jobseekers($pdo, 'approved', 'Developer');
// echo "Approved Developers: $approved_developers";






function get_jobseekers_overview(
  object $pdo,
  int $jobseekers_id = 0,
  string $firstname = '',
  string $lastname = '',
  string $job_title = '',
  string $email = '',
  string $phone_number = '',
  string $resume = '',
  string $status = ''
) {

    $query = "SELECT js_id, firstname_, lastname_, job_title, email_, phone_number_, resume_path_,created_at, approval_date, rejection_date, status 
    FROM jobseekers_ 
    WHERE status IN ('approved', 'rejected', 'pending') 
    ORDER BY created_at DESC";

  $params = [];


    if ($jobseekers_id > 0) {
        $query .= " AND js_id = :jobseekers_id";
        $params[':jobseekers_id'] = $jobseekers_id;
    }

    if (!empty($firstname)) {
        $query .= " AND firstname_ LIKE :firstname";
        $params[':firstname'] = "%$firstname%";
    }

    if (!empty($lastname)) {
        $query .= " AND lastname_ LIKE :lastname";
        $params[':lastname'] = "%$lastname%";
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

    if (!empty($resume)) {
        $query .= " AND resume_path LIKE :resume";
        $params[':resume'] = "%$resume%";
    }

    if (!empty($status)) {
        $query .= " AND status LIKE :status";
        $params[':status'] = "%$status%";
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

  return $stmt->fetchAll(PDO::FETCH_ASSOC);

}



    

function update_jobseekers_status_employee(object $pdo, int $jobseekers_id){

  $query = "UPDATE jopseekers_ SET status = 'Employee' WHERE js_id = :id ";
  $stmt = $pdo->prepare(($query));
  $stmt->execute([":id"=> $jobseekers_id]);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}



function delete_jobseekers_from_the_system(object $pdo, int $jobseekers_id){
  
    $query = "DELETE FROM jobseekers_ WHERE js_id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':id' => $jobseekers_id]);
  
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  

  }
  

function update_jobseekers_status_recruited(object $pdo, int $jobseekers_id){

      $query = "UPDATE jobseekers_ SET status = 'recruited', recruitment_date = NOW() WHERE js_id = :id";

      $stmt = $pdo->prepare($query);
      $stmt->execute([":id"=> $jobseekers_id]);
  
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
  
  }
  


    // APPROVE
function update_jobseekers_status_approved(object $pdo, int $jobseekers_id){

    $query = "UPDATE jobseekers_ SET status = 'approved', approval_date = NOW() WHERE js_id = :id";

    $stmt = $pdo->prepare(($query));
    $stmt->execute([":id"=> $jobseekers_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}



        // REJECT
function update_jobseekers_status_reject(object $pdo, int $jobseekers_id){

    $query = "UPDATE jobseekers_ SET status = 'rejected', rejection_date = NOW() WHERE js_id = :id";

    $stmt = $pdo->prepare(($query));
    $stmt->execute([":id"=> $jobseekers_id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}




