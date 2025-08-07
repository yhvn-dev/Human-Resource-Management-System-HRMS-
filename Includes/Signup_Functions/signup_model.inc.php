<?php 


declare(strict_types=1);

require_once '../dbh.inc.php';

function get_firstname(object $pdo, string $firstname){


    $query = "SELECT firstname_ FROM jobseekers_ WHERE firstname_ = :firstname;";

    $stmt =  $pdo->prepare($query);
    $stmt->bindParam(":firstname",$firstname);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}



function get_email(object $pdo, string $email){


    $query = "SELECT firstname_ FROM jobseekers_ WHERE email_ = :email;";

    $stmt =  $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}


function set_user(object $pdo,string $firstname,string $lastname, string $password,  string $email){

    $query = "INSERT INTO jobseekers_ (firstname_,lastname_,password_,email_) VALUE 
    (:firstname,:lastname,:password,:email);";

  

    $options = [

        'cost' => 12

    ];


    $hashpassword = password_hash($password, PASSWORD_BCRYPT,$options);


    $stmt =  $pdo->prepare($query);
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email",$email);
    $stmt->execute();



}


