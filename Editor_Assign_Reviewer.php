<?php
include 'conn.php';
$artical_id = $_GET['artical_id'];
$id = $gname = $fname = $email = ''; 

if (isset($_POST["SearchButton"])) {
    $Search = $_POST['SearchInput'];
    $sql = "SELECT id, givenname, FamilyName, email FROM reviwers WHERE givenname='$Search'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $gname = $row['givenname'];
            $fname = $row['FamilyName'];
            $email = $row['email'];
        }
    }
}

if (isset($_POST['OK'])) {
    $artical_idd=$_POST["artical_id"];
    $reviewer_id =$_POST["reviewer_id"];
    $message =$_POST["Message"];
    $status ="reviewing";
    $sql = "INSERT INTO assignment_reviewer (artical_id, reviewer_id, message, status) VALUES ('$artical_idd', '$reviewer_id', '$message', '$status')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    $sql_update = "UPDATE submissions SET status = '$status' WHERE id = '$artical_idd'";
    $result_update = mysqli_query($conn, $sql_update);

    if ($result_update) {
      // Success message and redirect (optional)
      
      header("Location: Editor_submission.php");
    } else {
      // Error updating article status
      echo "Editor assigned successfully, but error updating article status: " . mysqli_error($conn);
      header("Location: Editor_submission.php");  // Consider showing success message on Admin_Assign_Editor.php
    }
    } else {
        echo "Error: " . mysqli_error($conn);
        header("Location: Editor_Assign_Reviewer.php");
    }
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="google-site-verification" content="2VnoRwYKNrXDQWqnDl1oSFjMx-zp4i1BvAiwVg_yAQM" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Assign Editor
                    </title>

    
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

  
    <a href="Editor_submission.php" class="logo" >
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
                                                                                                <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/pt_BR?source=%2Findex.php%2F">
                            Portuguese
                        </a>
                                                                                <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/es?source=%2Findex.php%2F">
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
        <div class="leftcolumn  col-md-12 ">
<style>
/*----------css for breadcumbs-----------------*/


</style>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
    <ol class="breadcrumb">
        <li>
            <a href="Editor_submission.php">
                Hello 
            </a>
        
        </li>
        
        <li class="active">
                            
                    </li>
    </ol>
</nav>

<script type="text/javascript">
    
    /*$('document').ready(function(){
        var bdcrmHtml = $('.breadcrumb .active').html();
        mystring = bdcrmHtml.replace(/\#/g, '');
        $('.breadcrumb .active').html(mystring);*/
        /*if(typeof(bdcrmHtml)=='undefined' || bdcrmHtml=='')
        {
            bdcrmHtml2 = $('.pkp_structure_main h2').text();


            bdcrmHtml2 = '<li><a href="javascript:void(0)">Home</a></li><li class="active">'+bdcrmHtml2+'</li>';
            
            $('#breadcrumbWrp .breadcrumb').html(bdcrmHtml2);
        }*/
        
    /*})*/
</script>

<style>
.pkp_structure_main{border-right: 0px solid #dddddd;}
.pkp_structure_main.col-md-9, .pkp_structure_main.col-md-10{width:100%;}


.section {
    border-top: 1px solid #ddd;
    margin-top: 17px !important;
}

.journals .nav-pills>li>a:hover{
    background:#ddd;
}

h2.headings{
    margin:0;
    font-family: 'Open Sans', sans-serif;
    color: #ababab;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight:600;
    font-size:22px;
}

.journals {
    width: 1200px;
    margin: 0 auto;
    background: #f7f7f7 !important;
    display: flex;
    padding: 15px 15px 15px 15px;
}.left-side-box {
    margin-top: 15px;
    background-color: #fff;
    padding: 15px;
    box-shadow: 0 5px 18px rgba(200,200,200,0.1);
    height: 100%;
}.journals .media-list .media {
    border-bottom: none;
    margin-top: 0;
    padding-bottom: 20px;
    height: 270px;
}.journals .nav-pills>li>a {
    font-size: 14px !important;
    font-weight: 600 !important;
    padding: 8px 10px !important;
    border: 1px solid #dedede;
    border-radius: 1px;
}.journals .media-list .media:nth-child(2n+1) {
    border-right: 1px solid #eeeeee05;
}
.journals .media-list .media a {
    color: #007b5c;
    font-size: 18px;
    font-weight: bold;
}
@media only screen and (max-width: 600px) {
.journals .media-list .media {
    border-bottom: none;
    margin-top: 0;
    padding-bottom: 20px;
    height: auto;
}    
.journals .media-list .media .media-left {
    width: 100%;
    padding: 0 50px;
}.journals {
    width: 100%;
    margin: 0 auto;
    background: #f7f7f7 !important;
    display: flex;
    padding: 15px 15px 15px 15px;
}.left-side-box {
    margin-top: 15px;
    background-color: #fff;
    padding: 15px;
    box-shadow: 0 5px 18px rgba(200,200,200,0.1);
    height: auto;
}
}
</style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assign Editor</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" />
    <link rel="stylesheet" href="Admin_Assign Editor.css" />
    <link rel="stylesheet" href="css/all.css" />
  </head>
  <body>
    
    <div class="main-container">
<br>
<br>

      <div class="search-container">
        <div class="Name_2">
        <form class="search1" method="post" action="Editor_Assign_Reviewer.php?artical_id=<?php echo $artical_id ;?>">
        <input type="text" name="SearchInput" placeholder="Search....">
        <button class="span-register_1" type="submit" name="SearchButton">Search</button>
        </form>
        <style>
        .search1{
            padding: 8px 30px;
    color: #007b5c !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    border: 1px solid #e0e0e0;
    border-radius: 1px;
    background: #fff;
        }

                .span-register_1{
                    float:right;
                    
    padding: 3px 23px;
    color: #007b5c !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    border: 1px solid #e0e0e0;
    border-radius: 1px;
    background: #fff;
                }
            </style>
            <br>
            <br>
            <form method="post"action="Editor_Assign_Reviewer.php?artical_id=<?php echo $artical_id ;?>">
            <input type="hidden" name="artical_id" value="<?php echo $artical_id ;?>">

        <table id="resultsTable">
            <thead>
                <tr>   
                    <th class="result">search results</th>
                </tr>
            </thead>
            <tbody>
            <tr class="resultItem">
                <td><input type="radio" name="reviewer_id" id="result1" value="<?php echo $id ;?>"></td>
                <td><label for="result1"><?php echo $gname ; ?></label></td>
                <td><label for="result1"><?php echo $fname ; ?></label></td>
                <td><label for="result1"><?php echo $email ; ?></label></td>
            </tr>
            </tbody>
        </table>

        <style>
            .resultItem{
                width: 100%;
                
                padding: 8px 30px;
    color: #007b5c !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    border: 1px solid #e0e0e0;
    border-radius: 1px;
    background: #fff;
            }
        </style>
    </div>
    <br>
    <br>
    <span class="Choose">Message</span>
<br>
    <style>
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
    </style>
        <textarea class="form-control" name="Message" style="width: 650px; height: 150px;"  placeholder="Enter your Message"></textarea>
      <div class="frame-f">
        <div class="site-bar">
          <div class="frame-10">
          
          <div class="frame-13"></div>
        </div>
      </div>
      
     
        <div class="register-1c">
     <button class="span-Cancel"><a href="Editor_submission.php">Cancel</a></button>
      </div>

      </style>
        <button class="span-login" type="submit" name="OK">ok </button>
        <style>
        .span-Cancel {
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

        .span-login {
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
    </style>
         </form>
      </div>
    </div>
  </body>
  

</html>
