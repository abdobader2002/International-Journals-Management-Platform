<?php
 session_start();
 include 'conn.php';
 $author_id = $_SESSION['id'];
 $auther_name=$_SESSION['givenname']; 

$article_id=$_GET['artical_id'];
    $query = "SELECT auther_id,title,keywords,abstract,comment,article,file_kind FROM submissions where id='$article_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $author_id=$row['auther_id'];
    $title = $row['title'];
    $keywords = $row['keywords'];
    $abstract = $row['abstract'];
    $comment = $row['comment'];
    $artical_name = $row['article'];
    $file_kind=$row['file_kind'];

    
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['article_id'];
  
    // Check for hidden field and intended action
    if (isset($_POST['action'])) {
      $status = "";
  
      switch ($_POST['action']) {
        case 'accept':
          $status = "submission";
          break;
        case 'decline':
          $status = "Decline"; // Or a specific value for decline status
          break;
        default:
          // Handle unexpected action value (optional)
          echo "Invalid action.";
          // You could redirect back to the form or display an error message
          exit; // Terminate script execution
      }
    } else {
      // Handle missing hidden field (optional)
      echo "Missing action field.";
      // You could redirect back to the form or display an error message
      exit; // Terminate script execution
    }
  // Update status
  $sql = "UPDATE submissions SET status='$status' WHERE id='$id'";
  $result = mysqli_query($conn, $sql); // Assuming $conn is your database connection

  if ($result) {
    header("Location:Admin_submmisions.php");
    // Optional: Redirect to a confirmation page or another relevant action
  } else {
    echo "Error updating status: " . mysqli_error($conn);
  }
}

?>



<style>
    @media only screen and (max-width: 800px) {
        header .navigation #navigationPrimary .nav-link, #user-dashboard-link, #navigationUser a.nav-link, #user-nav-wraper a, #languageNav .dropdown-toggle {
      color: #333;
  }
  }
    </style>
      <script src="js_1.js"></script> 
  <!DOCTYPE html>
  
  <html lang="en" xml:lang="en">
  <head>
      <meta name="google-site-verification" content="2VnoRwYKNrXDQWqnDl1oSFjMx-zp4i1BvAiwVg_yAQM" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Submissions</title>
  
      
  <meta name="generator" content="Open Journal Systems 3.4.0.1">
  <link rel="stylesheet" href="css_1.css" type="text/css" />
  <link rel="stylesheet" href="css_2.css" type="text/css" />
  <link rel="stylesheet" href="css_3.css" type="text/css" />
  <link rel="stylesheet" href="css_4.css" type="text/css" />
  <link rel="stylesheet" href="css_5.css" type="text/css" />
  <link rel="stylesheet" href="css_6.css" type="text/css" />
  <link rel="stylesheet" href="css_7.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css?v=3.4.0.1" type="text/css" />
  <link rel="stylesheet" href="css_9.css" type="text/css" />
  <link rel="stylesheet" href="css_10.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">  
</head>
  <body>
  
  <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <div class="container topHeadSocial">
          <ul id="nav-small" class="nav nav-tabs mobileMenu">
              <li class="nav-item">
                  <a class="nav-link">
                      <ion-icon name="menu"></ion-icon>
                      <span class="ion-icon-text">Menu</span>
                  </a>
              </li>
          </ul>
          <div class="row">
              <div class="col-md-10">
                  
                  
  
  <style>
      .site-name-h1_h2 {
      position: relative;
      top: -4px;
      }
      .logo-name-h1 {
          float: left;
      }
      .navbar-header .site-name {
          margin: 0;
      }
      
      .logo-name-h1 h1 {
          color: #fff;
          text-transform: uppercase;
          font-size: 4em;
             font-weight: 700;
          margin-right: 10px;
          padding-right: 20px;
      }
      .site-name-h2_h3 {
          float: left;
          border-left: 4px #fff solid;
          margin-top: 12px;
          padding-left: 18px;
      }
      .logo-name-h1 .site-name {
          margin: 0;
      }
      .site-name-h2_h3 h2 {
          color: #fff;
          text-transform: uppercase;
          font-family:"Noto Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue";
          font-weight:600;
          letter-spacing: 2px;
          font-size: 2.1em;
          margin-bottom: 0px;
          margin-top: 0px;
      }
      .site-name-h2_h3 h3 {
          color: #fff;
             font-weight: 600;
          font-style: italic;
          margin-top: 0px;
          font-weight:600;
          margin-bottom: 0px;
          font-size: 0.9em;
         font-family:"Noto Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue";
      }
      .journal-logo {
      max-width: 300px;
      margin-top: -6px;
  }
  </style>
  
    
      <a href="Admin_submmisions.php" class="logo" >
                      <img class="journal-logo" src="https://ojs3modern17.openjournalsystems.com/public/site/pageHeaderTitleImage_en_US.png"
               alt="##common.pageHeaderLogo.altText##">
      
      </a>
                 
              </div>
              <div class="col-md-2">
                  <div class="topSearch">
                      <div id="searchWrpNav">
  
                      
                        <div class="searchCntNav">
  
                          <form class="" role="search" method="post" action="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search">
    <div class="form-group">
      <input class="" name="query" value="" type="text" aria-label="Search Query" placeholder="Search">
    </div>
    <button type="submit" class=""><i class="fa fa-search"></i></button>
  </form>
                        </div>                     
                  </div>
                      <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search" class="advanceSearch">Advance Search</a>
                  </div>
                  
                  
              </div>
          </div>
      </div>
  
      
              <div class="navigation">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                      
                                          <div id="modal-on-small" class="menu1">
                          <div id="primary-nav-wraper" class="">
                                 
                                      
      <ul id="navigationPrimary" class="pkp_navigation_primary nav nav-tabs">
                                                  <li class=" nav-item">
                      <a class="nav-link"
                         href="Home.page.php">Home</a>
                  </li>
                    
                          </ul>
                                
                        </div>
                    </div>
                    <div class="mobileMenuBox menu2">
                        <a href="javascript:void(0);" class="close"><i class="glyphicon glyphicon-remove"></i></a>
                                
    <ul id="navigationPrimary" class="pkp_navigation_primary nav nav-tabs">
                                                <li class=" nav-item">
                    <a class="nav-link"
                       href="Home.page.php">Home</a>
                </li>
                
                        </ul>

    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="navRight">
                                                
    <ul id="navigationUser" class="pkp_navigation_user nav nav-tabs">
        <li class=" nav-item">
            <a href="Home.page.php" style="font-size: medium;margin-top: -0.4rem;" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                            </ul>
            </div>
        </div>
    </div>
</div>
</div>
</header>
<div class="main container">

<div class="row">
<div class="leftcolumn  col-md-9 ">
     
  <main class="page page_register">
    <div class="pa">

        <style>

</style>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
    <ol class="breadcrumb">
        <li>
        <a style="font-size: large; margin-left: 5px; " class="fas fa-arrow-left" href="Admin_submmisions.php" > Back To Subnission</a>
        </li>
    </ol>
</nav>
<!-- <form method="post" action="Admin_submmisions.php" enctype="multipart/form-data">                  -->
<fieldset class="identity">
    <h3>Contributors</h3>
    <table id="userTable" style="width:100%; padding-top:5px;">
        <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $query = "SELECT id, con_name, con_Role,email FROM contributors WHERE author_id='$author_id'";
            $result = mysqli_query($conn, $query);
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $contributer_id=$row['id'];
        ?>
        <tr>
            <td style="font-size: medium;"><?php echo $contributer_name=$row['con_name']; ?></td>
            <td style="font-size: medium;"><?php echo $contributer_role=$row['con_Role']; ?></td>
            <td style="font-size: medium;"><?php echo $contributer_email=$row['email']; ?></td>
        </tr>
        <?php
                }
            }
        ?>
    </tbody>
    </table>



    <h3>Title</h3>
    <label for="Name" class="sr-only">
        Name
    </label>
    <input disabled type="text" class="form-control" name="title" id="Name" value="<?php echo $title;?>" maxlength="32" placeholder="Enter your title">
    <br>
    
    <br>
    
<div class="button-sign-in">
  <style>
      .span-Cancel{
          float: right;
margin-right: 0;
padding: 8px 30px;
color: #007b5c !important;
font-size: 14px !important;
font-weight: 600 !important;
border: 1px solid #e0e0e0;
border-radius: 1px;
background: #fff;
      }
  </style>
  <h3>Keywords</h3>
   <label for="Contact" class="sr-only">
    Contact
</label>
<input disabled type="text" class="form-control" name="Keywords" id="Contact" value="<?php echo $keywords;?>" maxlength="32" placeholder="Enter your keywords">
<br>

  <h3>Abstract</h3>
  <label for="abstract" class="sr-only" class="abstract">
   Abstract
</label>
<textarea disabled id="abstract" name="abstract" placeholder="Enter your abstract"><?php echo $abstract;?></textarea>
<br>
<!-- ********************** -->


<!-- ****************************** -->
<h3>Upload File</h3>
<label for="file" class="sr-only">Upload File</label>
<?php if (!empty($artical_name)): ?>
    <p>Uploaded File: <?php echo $artical_name; ?></p>
<?php endif; ?>
<input disabled type="file" id="file" name="file" accept=".pdf, .doc, .docx" <?php if (empty($artical_name)) echo 'required'; ?>> 
   <div class="register-1c">
    <button class="span-Cancel"><a href="Download.php?filename=<?php echo $artical_name;?>">download</a></button>
  </div>
<?php if (!empty($file_kind)): ?>
    <p>the File kind: <?php echo $file_kind; ?></p>
<?php endif; ?>


  

<div id="myDiv_2" >
    <h3>Comments for the Editor</h3>
    <label for="comments" class="sr-only">Comments:</label>
    <textarea disabled id="comments" name="comments"  placeholder="Enter your comment"><?php echo $comment;?></textarea>
    <br>
</div>
<div style="display:none;" id="myDiv">
    <h3>Reason For Reject</h3>
    <label for="comments" class="sr-only"></label>
    <textarea id="comments" name="comments"  placeholder="Enter the report to the author"><?php echo $comment;?></textarea>
    </div>
    <br>
    <script>
function toggleVisibility() {
    var div = document.getElementById("myDiv");
    var div_2 = document.getElementById("myDiv_2");
    if (div.style.display === "none") {
        div.style.display = "block";
        div_2.style.display = "none";
        document.getElementById('subm').style.display = 'inline';
        document.getElementById('accep').style.display = 'none';
    } else {
        div.style.display = "none";
    }
}
</script>
    <br>
<!-- <div class="register-1c">
    <button onclick="toggleVisibility()" class="span-Cancel"><a style="color:red;">Decline</a></button>
     </div>
     <div class="button-sign-in">
       <style>
           .span-Cancel{
               float: right;
   margin-right: 0;
   padding: 8px 30px;
   color: #007b5c !important;
   font-size: 14px !important;
   font-weight: 600 !important;
   border: 1px solid #e0e0e0;
   border-radius: 1px;
   background: #fff;
           }
       </style> -->
       <div class="containerl">
  <form action="Admin_view_submission.php" method="POST" class="span-login-btns" style="display:inline;">
    <input type="hidden" name="article_id" value="<?php echo $article_id ?>">
    <input type="hidden" name="action" value="accept"> <input type="submit" class="span-login" id="accept" name="submit" value="accept">
  </form>

  <form action="Admin_view_submission.php" method="POST" class="span-login-btns" style="display:inline;">
    <input type="hidden" name="article_id" value="<?php echo $article_id ?>">
    <input type="hidden" name="action" value="decline"> <input type="submit" class="span-login" id="decline" name="submit" value="decline">
  </form>
</div>


       <!-- <script>
  document.getElementById("subm").addEventListener("click", function() {
            localStorage.setItem("showHidden", "true");
            localStorage.setItem("showAssign", "false");
            localStorage.setItem("ShowView", "true");
            window.location.href = 'Admin_submmisions.php';
        });

</script> -->

<!-- <script> 
  document.getElementById("accep").addEventListener("click", function() {
            localStorage.setItem("showAssign", "true");
            localStorage.setItem("ShowView", "false");
            localStorage.setItem("showHidden", "false");
            window.location.href = 'Admin_submmisions.php';
        });

</script> -->
       <style>
            .span-login-btns {
                display: flex;
                justify-content: end;
                align-items: center;
            }
            .span-login {
                margin-right: 10px;
                padding: 8px 30px;
                color: #007b5c !important;
                font-size: 14px !important;
                font-weight: 600 !important;
                border: 1px solid #e0e0e0;
                border-radius: 1px;
                background: #fff;
            }
            .span-login:nth-child(3) {
                color: #ff0000 !important;
            }
            .containerl {
                display: flex;
        justify-content: flex-end;
    }
           textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
       </style>
       </form>
       <br>
       <br>
       <br>
       
       <br>
    </html>
    