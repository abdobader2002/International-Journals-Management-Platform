<?php
include 'conn.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    // Proper use of a WHERE clause to specify which record to delete
    $sql_editors = "DELETE FROM editors WHERE id = $id";
    $result_editors = mysqli_query($conn, $sql_editors);
    
    $sql_reviewers = "DELETE FROM reviwers WHERE id = $id";
    $result_reviewers = mysqli_query($conn, $sql_reviewers);
    
    if ($result_editors && $result_reviewers) {
        header("Location: Admin_Users_Roles.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
    
}
?>