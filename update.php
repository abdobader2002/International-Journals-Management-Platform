<?php
include 'conn.php';
if (isset($_POST['submit'])) {
         $id=$_POST["updateid"];
        $title = $_POST['title'];
        $keywords = $_POST['Keywords'];
        $abstract = $_POST['abstract'];
        $comment = $_POST['comments'];
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
    
        // Upload the file to a folder
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
    
        // Insert file details into the database
        $sql = " UPDATE submissions SET title='$title', keywords='$keywords', abstract='$abstract', comment='$comment', article='$file_name' WHERE id='$id'";
        $query=mysqli_query($conn, $sql);
        if ($query) {
            echo "<div class='alert alert-success'>Updated successfully.</div>";
            header("Location: Author_submmisions.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("Location: Author_view_submission.php");
            echo "<div class='alert alert-danger'>Something went wrong. Please try again.</div>";
        }
    }
    ?>