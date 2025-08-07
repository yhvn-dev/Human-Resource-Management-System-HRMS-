<?php

require_once '../dbh.inc.php';

function get_firstname(object $pdo, string $firstname){


    $query = "SELECT firstname_ FROM jobseekers_ WHERE firstname_ = :firstname;";

    $stmt =  $pdo->prepare($query);
    $stmt->bindParam(":firstname",$firstname);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}
