<?php
include 'conn.php';
if (isset($_GET['contributer_id'])) {
 $id = $_GET['contributer_id'];
    $sql_contributer= "DELETE FROM contributors WHERE id = '$id'";
    $result_contributors = mysqli_query($conn, $sql_contributer);
    
    if ($result_contributors) {
        header("Location: Author_view_submission.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
    
}
?>