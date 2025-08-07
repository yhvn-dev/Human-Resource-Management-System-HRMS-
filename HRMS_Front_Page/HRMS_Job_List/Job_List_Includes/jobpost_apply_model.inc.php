

<?php


function get_email(object $pdo, string $email){

    $query = "SELECT email_ from jobseekers_ where email_ = :email";

    $stmt =  $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}




function set_jobseekers(
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
    $query = "INSERT INTO jobseekers_ 
              (firstname_, lastname_, middlename_, email_, phone_number_, resume_path_, cover_letter_, additional_question_, jobpost_id, job_title) 
              VALUES 
              (:firstname, :lastname, :middlename, :email, :phone_number, :resume_path, :cover_letter, :additional_question, :jobpost_id, :job_title)";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":middlename", $middlename);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone_number", $phone_number);
    $stmt->bindParam(":resume_path", $resume_path);
    $stmt->bindParam(":cover_letter", $cover_letter);
    $stmt->bindParam(":additional_question", $additional_question);
    $stmt->bindParam(":jobpost_id", $jobpost_id);
    $stmt->bindParam(":job_title", $job_title);

    $stmt->execute();
}



?>
