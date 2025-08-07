         
<?php 

    $search_results = [];
    $filter_status = isset($_POST['filter_status_inp']) ? $_POST['filter_status_inp'] : 'none';
    $hr_search = isset($_POST["jp_inp_search"]) ? htmlspecialchars(trim($_POST["jp_inp_search"])) : '';  // Default to empty if not set

// Include the database connection
    require_once '../../Includes/dbh.inc.php';

if (!isset($pdo)) {
    die("Database connection is not established.");
}

try {
    // Build the base query
    $query = "SELECT * FROM jobposts_ WHERE 1=1";

    // Add search condition
    if (!empty($hr_search)) {
        $query .= " AND field_category LIKE :field_category_search";
    }

    // Add filter condition
    if ($filter_status !== 'none') {
        $query .= " AND status = :status_filter";
    }

    $stmt = $pdo->prepare($query);

    // Bind parameters dynamically
    if (!empty($hr_search)) {
        $hr_search = "%" . $hr_search . "%";
        $stmt->bindParam(":field_category_search", $hr_search);
    }
    if ($filter_status !== 'none') {
        $stmt->bindParam(":status_filter", $filter_status);
    }

    $stmt->execute();
    $search_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;

} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

?>

    