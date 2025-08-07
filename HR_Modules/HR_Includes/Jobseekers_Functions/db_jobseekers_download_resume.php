<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];



    $file_path = '../../../HRMS_Front_Page/HRMS_Job_List/Job_List_Includes/doc_file_directory/' . basename($file);

    if (file_exists($file_path)) {
        // Send appropriate headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));


        // Clear output buffer and read the file
        ob_clean();
        flush();
        readfile($file_path);
        exit;
        
    } else {

        echo "File not found.";
    }

} else {

    echo "No file specified.";
}