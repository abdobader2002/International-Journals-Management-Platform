<?php
    include 'conn.php';
 if (isset($_POST['update'])) {
    $id=$_POST["updateid"];
    $GivenName = $_POST["givenName"];
    $FamilyName = $_POST["famelyName"];
    $Country  = $_POST["country"];
    $Username  =$_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_role  = $_POST["role"];

    if ($user_role == "Jornal Editor"){
        $sql = " UPDATE editors SET givenname='$GivenName', FamilyName='$FamilyName', country='$Country', username='$Username', email='$email',password='$password',role='$user_role' WHERE id='$id'";
    }elseif ($user_role == "Reviewer") {
        $sql = " UPDATE reviwers SET givenname='$GivenName', FamilyName='$FamilyName', country='$Country', username='$Username', email='$email',password='$password',role='$user_role' WHERE id='$id'";
    }
        $query=mysqli_query($conn, $sql);
        if ($query) {
            header("Location: Admin_Users_Roles.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("Location: Admin_Edit_Usres_Rolse.php");
            echo "<div class='alert alert-danger'>Something went wrong. Please try again.</div>";
        }
  }
    ?>