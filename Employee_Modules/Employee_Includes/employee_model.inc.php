

<?php 




function get_colleagues(object $pdo,
string $first_name, 
string $last_name,
string $middle_name,
string $job_title, 
string $department,
string $status){


$query = "SELECT * FROM employees_ WHERE account_status='active'  ORDER BY submission_date DESC";


$params = [];



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



if (!empty($department)) {
    $query .= " AND deparment_ LIKE :deparment";
    $params[':department'] = "%$department%";
}


if (!empty($status)) {
    $query .= " AND status LIKE :status";
    $params[':status'] = "%$status%";
}


                
$stmt = $pdo->prepare($query);
$stmt->execute($params);
return $stmt->fetchAll(PDO::FETCH_ASSOC);

}


?>