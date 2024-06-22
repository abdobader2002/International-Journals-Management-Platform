<?php
 session_start();
 include 'conn.php';
 $author_id = $_SESSION['id'];
 $auther_name=$_SESSION['givenname']; 

    $id=$_GET['updateid'];
    $query = "SELECT title,keywords,abstract,comment,article,file_kind FROM submissions where id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $keywords = $row['keywords'];
    $abstract = $row['abstract'];
    $comment = $row['comment'];
    $file_name = $row['article'];
    $file_kind=$row['file_kind'];
    
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
  <style>
    .medium-font {
  font-size: medium;
}
.alert {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.alert-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


</style>

<script>
function showAlert() {
    // Show the modal dialog
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
    
    document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("othersub").focus();
});

}

function closeAlert() {
    // Close the modal dialog
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

</script>
  
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
  
    
      <a href="Author_submmisions.php" class="logo" >
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
    <!-- <div class="adVSearch" > <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search">Advance search</a></div> -->
  </form>
  
  
                        </div>
  
                      
                  </div>
                      <!--<input type="text" name="" placeholder="Search">
                      <button type="submit" value=""><i class="fas fa-search"></i></button>-->
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
                        
                                                
    <!-- <ul id="languageNav" class="dropdown language-toggle nav nav-tabs">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="languageToggleMenulanguageNav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">##plugins.themes.healthSciences.language.toggle##</span>
                English
            </a>

            <div class="navigation-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="languageToggleMenulanguageNav">
                                                                                                <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/pt_BR?source=%2Findex.php%2Findex%2Fuser%2Fregister">
                            Portuguese
                        </a>
                                                                                <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/es?source=%2Findex.php%2Findex%2Fuser%2Fregister">
                            Spanish
                        </a>
                                                </div>
        </li>
    </ul> -->
                                                
    <ul id="navigationUser" class="pkp_navigation_user nav nav-tabs">
        <li class=" nav-item">
            <a href="Home.page.php" style="font-size: medium;margin-top: -0.4rem;" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                            </ul>

            </div>
        </div>
    </div>
</div>
</div>
<!--<script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/resources/app.min.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/js/staticpages.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/resources/ionicons.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/lib/pkp/lib/vendor/components/jquery/jquery.min.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/lib/pkp/lib/vendor/components/jqueryui/jquery-ui.min.js?v=3.4.0.1" type="text/javascript"></script><script src="http://malsup.github.com/jquery.form.js?v=3.4.0.1" type="text/javascript"></script><script src="https://www.google.com/recaptcha/api.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/lib/pkp/js/lib/jquery/plugins/jquery.tag-it.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/css/jquery.bxslider.min.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/resources/bootstrap-3.4.1/js/bootstrap.min.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen//js/fblogin.js?v=3.4.0.1" type="text/javascript"></script><script src="https://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen//js/custom.js?v=3.4.0.1" type="text/javascript"></script>-->
</header>


<div class="main container">

<div class="row">
<div class="leftcolumn  col-md-9 ">
     
  <main class="page page_register">
    <div class="pa">

        <style>
/*----------css for breadcumbs-----------------*/


</style>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
    <ol class="breadcrumb">
        <li>
            <a href="Author_submmisions.php">
                Home
            </a>
        </li>
    </ol>
</nav>

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

<form method="post" action="update.php" enctype="multipart/form-data">  
<input type="hidden" name="updateid" value="<?php echo $id ?>">                  
<fieldset class="identity">
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
<br>
<!-- *********************** -->


<h3>Upload File</h3>

<?php if (!empty($file_name)): ?>
    <p>Uploaded File: <?php echo $file_name; ?></p>
<?php endif; ?>
<input disabled type="file" id="file" name="file" accept=".pdf, .doc, .docx" <?php if (empty($file_name)) echo 'required'; ?>> 

<?php if (!empty($file_kind)): ?>
    <p>the File kind: <?php echo $file_kind; ?></p>
<?php endif; ?>

<div id="displayText" class="fas fa-file hidden" style= "display: none; color:rgb(0, 122, 92); margin-top:10px;">Article Text</div>
<br id="spac" style="display: none;">
<div id="borderedText" class="fas fa-file  " style="display: none; color:rgb(0, 122, 92); margin-top:10px;" class="span-login" name="Clear"></div>
<button onclick="deleteFile()" id="Clear" class="span-login" name="Clear" type="Submit" style="display: none;">Clear</button>
<br id="space" style="display: none;">
<span class="fas fa-exclamation-triangle" id="hiddenSpan" style="display: none;"> What kind of file is this?  <a  onclick="showAlert();">Other</a></span>
<style>
</style>
<script>
document.getElementById('fileInput').addEventListener('change', function() {
    document.getElementById('hiddenSpan').style.display = 'block';
  });
  document.getElementById('fileInput').addEventListener('change', function() {
    document.getElementById('Clear').style.display = 'inline';
  });
  document.getElementById('Clear').addEventListener('click', function() {
    document.getElementById('Clear').style.display = 'none';
  });
  document.getElementById('Clear').addEventListener('click', function() {
    document.getElementById('hiddenSpan').style.display = 'none';
  });
  document.getElementById('fileInput').addEventListener('change', function() {
    document.getElementById('space').style.display = 'block';
  });
  document.getElementById('Clear').addEventListener('click', function() {
    document.getElementById('space').style.display = 'none';
  });
  document.getElementById('Clear').addEventListener('click', function() {
    document.getElementById('borderedText').style.display = 'none';
  });
  document.getElementById('Clear').addEventListener('click', function() {
    document.getElementById('displayText').style.display = 'none';
  });
  function deleteFile() {
    var fileInput = document.getElementById('fileInput');
    fileInput.value = ''; 
}

</script>
<div id="myModal" class="modal">
    <div class="modal-content" style=" background-color: #fefefe; margin: 5% auto; padding: 20px; border: 1px solid #888; width: 30%;">
        <span onclick="closeAlert();" style="float: right; cursor: pointer;">&times;</span>
        <p style="text-align: center;">Choose a value:</p>
        <table id="resultsTable">
            <thead >
                </thead>
            <tbody>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result1" value="Article Text"></td>
                    <td><label for="result1">Article Text</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result2"value="Research Instrument"></td>
                    <td><label for="result2">Research Instrument</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result3" value="Research Materials"></td>
                    <td><label for="result3">Research Materials</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result4" value="Research Results"></td>
                    <td><label for="result4">Research Results</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result5" value="Transcripts"></td>
                    <td><label for="result5">Transcripts</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result6" value="Data Analysis"></td>
                    <td><label for="result6">Data Analysis</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result7" value="Data Set"></td>
                    <td><label for="result7">Data Set</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result8" value="Source Texts"></td>
                    <td><label for="result8">Source Texts</label></td>
                </tr>
                <tr class="resultItem">
                    <td><input type="radio" name="result" id="result9" value="Other"></td>
                    <td><label for="result9">Other</label></td>
                </tr>
            </tbody>
        </table>
        <style>
            .resultItem{
                width: 100%;
                
                padding: 8px 30px;
    color: #007b5c !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    border: 1px solid #e0e0e0;
    border-radius: 1px;
    background: #fff;
            }
        </style>
        <button onclick="updateText();" id="othersub" class="span-login" name="othersub" type="button">Submit</button>
    </div>
</div>
<script>
        const link = document.getElementById('ArticleText');
  const displayText = document.getElementById('displayText');
  link.addEventListener('click', function(event) {
    document.getElementById('displayText').style.display = 'flex';
    event.preventDefault(); 
    displayText.classList.remove('hidden'); 
    document.getElementById("borderedText").style.display = 'none';

  });
    function updateText() {
        document.getElementById('othersub').addEventListener('click', function()  {
    document.getElementById('borderedText').style.display = 'flex';
     });
      document.getElementById('othersub').addEventListener('click', function()  {
    document.getElementById('displayText').style.display = 'none';
  });
        var newValue = document.querySelector('input[name="result"]:checked').value;
        document.getElementById("borderedText").textContent = newValue;
        document.getElementById('myModal').style.display = 'none';
    }
    </script>
<br>

    <h3>Comments for the Editor</h3>
    <label for="comments" class="sr-only">Comments:</label>
    <textarea disabled id="comments" name="comments"  placeholder="Enter your comment"><?php echo $comment;?></textarea>

    <br>
    <br>

<div class="register-1c">
    <button class="span-Cancel"><a href="Author_submmisions.php">Cancel</a></button>
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
       </style>
       <button id="save" class="span-login" name="submit" type="Submit"onclick="alert('Save subnnision?');">Save changes</button>
       <script>
        document.getElementById("save").addEventListener("click", function() {
            localStorage.setItem("showHidden", "false");
            window.location.href = 'Author_submmisions.php';
        });
      </script> 
       <style>
           .span-login{
               float: right;
   margin-right: 10px;
   padding: 8px 30px;
   color: #007b5c !important;
   font-size: 14px !important;
   font-weight: 600 !important;
   border: 1px solid #e0e0e0;
   border-radius: 1px;
   background: #fff;
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
       <style>
           .span-login{
               float: right;
   margin-right: 10px;
   padding: 8px 30px;
   color: #007b5c !important;
   font-size: 14px !important;
   font-weight: 600 !important;
   border: 1px solid #e0e0e0;
   border-radius: 1px;
   background: #fff;
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
       <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
          /* Just to demonstrate scrolling */
        }
        .chatbot-icon {
            position: fixed;
            right: 20px;
            bottom: 20px;
            font-size: 40px; 
            cursor: pointer;
            color: #346e5e; 
            z-index: 1000;
            margin-bottom:30px;
        }
    </style>
</head>
<body>
    <div class="chatbot-icon">
        <i class="fas fa-robot"></i> <!-- Font Awesome chatbot icon -->
    </div>

    <script>
        // JavaScript to handle chatbot interaction
        document.querySelector('.chatbot-icon').addEventListener('click', function() {
            window.location.href = 'help.php';
            // Add your chatbot opening logic here
        });
    </script>
       <br>
    </html>
    