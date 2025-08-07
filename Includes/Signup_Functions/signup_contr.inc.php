<?php 


declare(strict_types=1);


// INPUT IS EMPTY INVALID
function is_input_empty(string $firstname,string $lastname, string $password,string $email){

    if(empty($firstname) || empty($lastname) || empty($password) || empty($email)){

        return true;

    }else{

        return false;

    }
}





// IF EMAIL IS VALID OR INVALID
function is_email_invalid(string $email) {
    if (empty($email)) {
        return false; // Don't treat empty email as invalid
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }

    return false;
}


// function is_firstname_taken(object $pdo,string  $firstname){

//     if(get_firstname($pdo, $firstname)){
//         return true;
//     }else{
//         return false;
//     }


// }




function is_email_registered(object $pdo,string $email){

    if(get_email( $pdo, $email)){
        return true;
    }else{
        return false;
    }


}


function create_user(object $pdo,string $firstname,string $lastname, string $password,  string $email){

      set_user($pdo, $firstname, $lastname, $password, $email);


};













