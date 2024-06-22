<?php
 include 'conn.php';
 if (isset($_POST['Submit'])){
    $article_id = $_POST['article_id'];
    $recommendation = $_POST['Recommendation'];
        echo $article_id;
        echo $recommendation;
    // Update article status using switch case
    switch ($recommendation) {
        case 'Accept Submission':
            $status = 'Accept Submission';
            // Insert into accepted table
            $sql = "INSERT INTO accepted_articles (article_id ) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $article_id);
            if (!$stmt->execute()) {
                echo "Error inserting into accepted table: " . $conn->error;
                exit;
            }
            break;
        case 'Revisions Required':
            $status = 'Revisions Required';
            break;
        case 'Resubmit for Review':
            $status = 'Resubmit for Review';
            break;
        case 'Resubmit Elsewhere':
            $status = 'Resubmit Elsewhere';
            break;
        case 'Decline Submission':
            $status = 'Decline Submission';
            break;
        default:
            echo "Invalid recommendation.";
            exit;
    }

    // Update article status in articles table
    $sql = "UPDATE submissions SET status ='$status' WHERE id = '$article_id'";
    $result =  mysqli_query($conn, $sql);
    
    if ($result) {
        $sql_delete = "DELETE FROM assignment_reviewer WHERE artical_id = '$article_id'";
        $result_delete = mysqli_query($conn, $sql_delete);
    
        if ($result_delete) {
          // Success message (optional)
          header("Location: Reviewer_submmisions.php");
        }
        
    } else {
        echo "Error updating record: " . $conn->error;
    }
}





?>