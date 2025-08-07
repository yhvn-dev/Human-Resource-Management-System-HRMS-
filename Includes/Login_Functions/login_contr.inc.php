<?php

declare(strict_types=1);


function is_input_empty(string $employee_id , string  $employee_pass){
   

    if(empty($employee_id) || empty ($employee_pass)){
        return true;
    }else  {
        return false;
    }


}






// ================ IS FIRST NAME WRONG ========================
function is_employee_id_wrong( bool | array $result)
{

    if(!$result){
        return true;
    }else{
        return false;
    }


}

// ================ IS PASSWORD WRONG =======================
function is_employee_pass_wrong(string $employee_pass, string $stored_password){
    // Directly compare the entered password with the stored password
    if ($employee_pass !== $stored_password) {
        return true;
    } else {
        return false;
    }
}

