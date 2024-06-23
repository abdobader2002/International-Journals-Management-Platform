<?php
include 'conn.php';

// Check if the 'artical_name' parameter is set
if (isset($_GET['filename'])) {
    // Get the filename from the query parameter
    $file_name = $_GET['filename'];
    $file_name = basename($file_name); // Sanitize the filename to prevent directory traversal

    // File path to the file you want to download
    $file_path = 'C:/xampp/htdocs/International-Journals-Management-Platform-main/uploads/' . $file_name;

    // Check if the file exists
    if (file_exists($file_path)) {
        // Set the appropriate headers for the file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));

        // Clear output buffer before sending the file
        ob_clean();
        flush();
        
        // Read and output the file content
        readfile($file_path);
        exit; // Ensure the script ends here
    } else {
        // File not found
        echo "File not found.";
    }
} else {
    // Query parameter 'artical_name' is missing
    echo "No file specified.";
}
?>
