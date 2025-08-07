<?php

declare(strict_types=1);

function get_user(object $pdo, ?int $id = null, ?string $employee_id = null) {
    //



    if ($id === null && $employee_id === null) {
        throw new InvalidArgumentException("Either 'id' or 'employee_id' must be provided.");
    }

    
    $query = "SELECT * FROM employees_ WHERE ";
    $params = [];

    if ($id !== null) {
        $query .= "id = :id";
        $params[':id'] = $id;
    }

    if ($employee_id !== null) {
        $query .= ($id !== null ? " AND " : "") . "employee_id = :employee_id";
        $params[':employee_id'] = $employee_id;
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}