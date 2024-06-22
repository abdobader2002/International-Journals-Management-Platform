<?php
 session_start();
  include 'conn.php';
  $author_id = $_SESSION['id'];
  $auther_name=$_SESSION['givenname']; 

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
      <title>Author Submission</title>
  
      
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
      /*----------------------- Header ---------------------------*/
   /*  header {
          background: url(https://www.ojsdemo.com/plugins/themes/themeSeventeen/img/bk_top.png) !important;
          background-size: cover !important;
      }*/
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
      <!--
      <div class="site-name-h1_h2">
          <div class="logo-name-h1"><h1 class="site-name">	OJS </h1></div>
          <div class="site-name-h2_h3 "><h2> OJS	 </h2>
          <h3>OPEN JOURNAL SYSTEAM </h3></div>						
      </div> -->
                 
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
          <!-- <ul class="social">
                              <li><a href="javascript:void(0);"><i class="fas fa-rss-square"></i></a></li>
                              <li><a href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a></li>
                              <li><a href="javascript:void(0);"><i class="fab fa-twitter-square"></i></a></li>
                              <li><a href="javascript:void(0);" class="linkedIn"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                          </ul> -->
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
                Hello <?php echo $auther_name ?>
            </a>
           
            <a href="Author_new_submission.php"><input  class="form" type="submit" name="submit" value="New Submission"></a>
        
        </li>
    </ol>
</nav>
<br>

    <style>
.form{
    display: inline;
    margin-left: 84rem;
    color:#007a5c;
}
form input{
    background-color: white;
    border-style: outset;
    padding: 4px;
}
form input:hover{
    color: white;
    background-color: #3d4751;
}
.for{
    display: inline;
    color:#007a5c;
}
        .Choose{
            color: #FFF;
    font-weight: bold;

            background: #3d4751;
    border-bottom-style: none;
    font-weight: 500;
    font-size: 14px;
    text-transform: uppercase;
    padding: 4px 9px;
    text-align: left;
  
        }
        .addUserBtn{
            margin-left: 52.7%;
        }
        table{
            width:135%;
            margin: 0 auto;
            border-collapse: collapse;
  border: 0.5px solid #3d4751
        }
        
    </style>
   <h1>Submissions</h1>
   <br>
    </header>
 <table id="usersTable">
   <thead>
     <tr>
     <th style="text-align: center;">Title</th>
       <th style="text-align: center;">keywords</th>
       <th style="text-align: center;">Abstract </th>
       <th style="text-align: center;">comment </th>
       <th style="text-align: center;">State</th>
       <th style="text-align: center;">Actions</th>
       <th style="text-align: center;"></th>
     </tr>
   </thead>
        <?php 
        
         
           $query = "SELECT id,title,keywords,abstract,comment,status FROM submissions where auther_id='$author_id' ";
           $result = mysqli_query($conn, $query);
           if ($result) {
             while ($row = mysqli_fetch_assoc($result)) {
        ?>
   <tbody style="font-size: medium; text-align: center;">
    <tr>
    <td style="text-align: center;"><?php echo $title=$row['title'];?></td>
        <td style="text-align: center;"><?php echo $keyword=$row['keywords'];?></td>
        <td style="text-align: center;"><?php echo $abstract=$row['abstract'];?></td>
        <td style="text-align: center;"><?php echo $comment=$row['comment'];?></td>
        <td style="text-align: center;"><?php echo $status=$row['status'];?></td>
        <td style="text-align: center;">
            
        <a href="Author_view_submission.php?updateid=<?php echo $row['id'];?>"><input type="submit" name="submit" value="View" style="padding:4 20px;"></a>
           
        </td>
    <td class="fas fa-comments" id="elementToToggle" style="padding:20 20px;text-align: center; margin-top:10px;color: #a8281f;display:none;cursor: pointer;"></td> 
        <script>
        function updateContent() {
            var showHidden = localStorage.getItem("showHidden");
            if (showHidden === "true") {
                document.getElementById("elementToToggle").style.display = "block";
            } else {
                document.getElementById("elementToToggle").style.display = "none";
            }
        }
        updateContent();
    </script>
    <script>
document.getElementById('elementToToggle').addEventListener('click', function() {
    showAlert();
});

function showAlert() {
  var alertBox = document.getElementById("alertBox");
  alertBox.style.display = "block";
}

function closeAlert() {
  var alertBox = document.getElementById("alertBox");
  alertBox.style.display = "none";
}


</script>
<div id="alertBox" class="alertBox">
  <div id="alertContent" class="alertContent">
    This is the alert message!
    <span class="closeBtn" onclick="closeAlert()">×</span>
  </div>
</div>
<style>
.alertBox {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #f4f4f4;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.alertContent {
  text-align: center;
}

.closeBtn {
  position: absolute;
  top: 5px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}


</style>

    </script>
      </tr>
      <?php
          }
        }
        ?>
   </tbody>
   </table>
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
</div>

