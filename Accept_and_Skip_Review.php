<?php
include 'conn.php';
$article_id = $_GET['artical_id'];
if (isset($_POST['Accept'])) {
  $sql_insert = "INSERT INTO accepted_articles(article_id) VALUES ('$article_id')";
  $result_insert = mysqli_query($conn, $sql_insert);

  if ($result_insert) {
    $sql = "UPDATE submissions SET status ='Accept Submission' WHERE id = '$article_id'";
    $result =  mysqli_query($conn, $sql);

  if ($result_insert) {
    $sql_delete = "DELETE FROM assignment_editor WHERE artical_id  = '$article_id'";
    $result_delete = mysqli_query($conn, $sql_delete);

    if ($result_delete) {
      // Success message (optional)
      header("Location: Editor_submission.php");
    }
  } else {
    echo "Error inserting into accepted_articles: " . mysqli_error($conn);
  }
  // Redirect to a different page after processing (optional)
  header("Location: Editor_submission.php");
}
}
?>