<?php
session_start();
include 'conn.php';

if (isset($_POST["Login"])) {
    $Username = $_POST["Username"];
    $password = $_POST["password"];

    $sql = "SELECT id, givenname, role FROM admins WHERE username='$Username' AND password='$password'
    UNION
    SELECT id, givenname, role FROM editors WHERE username='$Username' AND password='$password'
    UNION
    SELECT id, givenname, role FROM reviwers WHERE username='$Username' AND password='$password'
    UNION
    SELECT id, givenname, role FROM authers WHERE username='$Username' AND Pasword='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    // Check if the user exists in any table
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Set session variables
        $roles = $row['role'];
        // Redirect based on user's role
        switch ($roles) {
            case 'Jornal Manager':
                $Manager_id=$row['id'];
                $Managername= $row['givenname'];
                $_SESSION['id'] = $Manager_id;
                $_SESSION['givenname'] = $Managername;
                header("Location:Admin_submmisions.php");
                exit();
            case 'Jornal Editor':
                $editor_id=$row['id'];
                $editorname= $row['givenname'];
                $_SESSION['id'] = $editor_id;
                $_SESSION['givenname'] = $editorname;
                header("Location:Editor_submission.php");
                exit();
            case 'Reviewer':
                $reviewer_id=$row['id'];
                $reviewername= $row['givenname'];
                $_SESSION['id'] = $reviewer_id;
                $_SESSION['givenname'] = $reviewername;
                header("Location:Reviewer_submmisions.php");
                exit();
            case 'auther':
                $author_id = $row['id'];
                $auther_name=$row['givenname'];
                $_SESSION['id'] = $author_id;
                $_SESSION['givenname'] = $auther_name;
                header("Location:Author_submmisions.php");
                exit();
            default:
                exit();
        }
    } else {
        // Redirect if login fails
        header("Location: Login.php?error=invalid_credentials");
        exit();
    }
}
?>

<style>
    #twitter-button{
        width: 59%;
       margin-left: 18%;
       margin-top: -3%;
    }
     #twitter-button img{
          border-radius:4px;   
     }
     .abcRioButton {
       width: 180px !important;
       border-radius: 5px !important;
       border: 1px solid #eeee;
   }
   .abcRioButtonLightBlue {
       background-color: #fff;
       color: #757575;
   }
   
   .abcRioButton {
       -webkit-border-radius: 1px;
       border-radius: 1px;
       -webkit-box-shadow 0 2px 4px 0px rgba(0,0,0,.25): ;
       box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
       -webkit-box-sizing: border-box;
       box-sizing: border-box;
       -webkit-transition: background-color .218s,border-color .218s,box-shadow .218s;
       transition: background-color .218s,border-color .218s,box-shadow .218s;
       -webkit-user-select: none;
       -webkit-appearance: none;
       background-color: #fff;
       background-image: none;
       color: #262626;
       cursor: pointer;
       outline: none;
       overflow: hidden;
       position: relative;
       text-align: center;
       vertical-align: middle;
       white-space: nowrap;
       width: auto;
   }
   
   #google-button img {max-width:91%;}
   .newRightLogin{font-size: 20px; font-weight: bold; text-align: center;}
   .newRightLogin i {color:#000; font-size: 100px}
   
    </style>
   
   
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
       <title>
           Login
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
   
     
       <a href="Home.page.php" class="logo" >
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
                                                                                                   <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/pt_BR?source=%2Findex.php%2Findex%2Flogin">
                               Portuguese
                           </a>
                                                                                   <a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/es?source=%2Findex.php%2Findex%2Flogin">
                               Spanish
                           </a>
                                                   </div>
           </li>
       </ul> -->
                                                   
       <ul id="navigationUser" class="pkp_navigation_user nav nav-tabs">
                                                   <li class=" nav-item">
                                                    <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link"
                                                    href="Register.php"><i class="fas fa-user-plus"></i> Register</a>
                                             </li>
                                                                                         <li class=" nav-item">
                                                 <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link"
                                                    href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                   </li>
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
   <script src="js_2.js" async defer></script>
   <meta name="google-signin-client_id" content="816144587742-ibv05mg2n9v5plsch8ouldckcloqbfn9.apps.googleusercontent.com">
   
   <div class="page page_login">
       <div class="pa">
   
           <style>
   /*----------css for breadcumbs-----------------*/
   
   
   </style>
   
   <nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
       <ol class="breadcrumb">
           <li>
               <a href="Home.page.php">
                   Home
               </a>
           </li>
           
           <li class="active">
                               Login
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
   
                   
   
           <div class="formBoxLR">
   
               <!-- Nav tabs -->
               <ul class="nav nav-tabs" role="tablist">
                   <li role="presentation" class="active"><a href="javascript:void(0);">Sign in</a></li>
                   <li role="presentation">
                                                                       <a href="Register.php">
                               Register
                           </a>
                                       </li>
               </ul>
   
               <!-- Tab panes -->
               <div class="tab-content">
                   <div role="tabpanel" class="tab-pane active" id="logintab">
                       
                       <form class="cmp_form login" id="login" method="post" action="Login.php">
                           <input type="hidden" name="csrfToken" value="9449350960252e8ef917a383c1fc581b">
   
                           
                           <input type="hidden" name="source" value="" />
   
                           <fieldset class="fields">
                               <div class="row">
                                   <div class="form-group col-md-6">
                                       <label for="username" class="sr-only">
                                           Username
                                       </label>
                                       <input type="text" class="form-control" name="Username" id="username" value="" maxlength="32" placeholder="Username" required>
                                       <small class="form-text text-muted"><span class="required">*</span>Required</small>
                                       <label for="password" class="sr-only">
                                           Password
                                       </label>
                                       <input type="password" class="form-control" name="password" id="password" value="" password="true" maxlength="32" placeholder="Password" required>
                                       <small class="form-text text-muted"><span class="required">*</span>Required</small>
                                       <p>
                                           <small>
                                               <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/login/lostPassword">
                                                   Forgot your password?
                                               </a>
                                           </small>
                                       </p>
                                       <input type="checkbox" class="custom-control-input" name="remember" id="remember" value="1" checked>
                                       <label class="custom-control-label" for="remember">Keep me logged in</label>
                                        
                                        <button class="submit btn btn-primary"  name="Login" type="submit"> Login </button>
   
                                         <a href="Register.php" class="register btn"> Register </a>
                                        </div>
   
                                   <div class="form-group col-md-6">
                                   <div class="socialMediaLogin">
                                           <div class="or">Or</div>
                                           
   
                                               <div class="newRightLogin">
                                                   <i class="fas fa-envelope"></i> <br>
                                                   If you have more question, please <br>
                                               E-mail us at: <a href="mailto:info@openjournalsystems.com">info@openjournalsystems.com</a>
                                               </div>
   
   
                                       </div>
                                   </div>
   
                           </fieldset>
                       </form>
   
                   </div>
                   <div role="tabpanel" class="tab-pane" id="signuptab">2</div>
               </div>
   
           </div>
   
   
           
       </div>
   </div><!-- .page -->
   <div id="fb-root"></div>
   
   <script src="js_3.js"></script>
   <script src="js_4.js"></script>
   <script>
       
       //Twitter integration with authio
   $("document").ready(function(){
      var  calcuTwit = 0;
       $('#twitter-button').on('click', function() {
       // Initialize with your OAuth.io app public key
           //OAuth.initialize('dSC_VYDXp0I5LVVgThO8UVHW4h4');
           OAuth.initialize('TNNjcq4adXkc7d98owbyHx4jsoo');
           // Use popup for OAuth
           OAuth.popup('twitter').then(twitter => {
               console.log('twitter:', twitter);
              
               twitter.me().then(data => {
                 console.log('data:', data);
              
                 });
            
               twitter.get('/1.1/account/verify_credentials.json?include_email=true').then(response => {
                 console.log('self data:', response);
                 var rval = Math.floor(1000 + Math.random() * 9000);
                 var username = ((response.email).split('@')[0]).toLowerCase()
                   $.ajax({
                       url: 'https://ojs3modern17.openjournalsystems.com/index.php/index/login/signIn',
                       data: {"username":username,"password":response.email,"firstName":response.name,"lastName":"","email":response.email,"caller":'social'},
                       method:"POST",
                       dataType: 'html',
                       success: function(result){
                           if(result==1 || result=="1")
                           {
                                window.location = 'https://ojs3modern17.openjournalsystems.com';
                           }
                           else
                           {
                               if(calcuTwit==0){
                                alert("This email/username already registered to the site, Please try with some other id! ")
                               }
                               calcuTwit++
                           }
                       },
                       error: function(error)
                       {
                           console.log(error)
                     }
                   });
                 })    
               });
       })
       
       
       $('#google-button').on('click', function() {
           // Initialize with your OAuth.io app public key
           //OAuth.initialize('dSC_VYDXp0I5LVVgThO8UVHW4h4');
           OAuth.initialize('TNNjcq4adXkc7d98owbyHx4jsoo');
           // Use popup for oauth
           OAuth.popup('google').then(google => {
           console.log('google:',google);
           // Retrieves user data from oauth provider
           // Prompts 'welcome' message with User's email on successful login
           // #me() is a convenient method to retrieve user data without requiring you
           // to know which OAuth provider url to call
           google.me().then(data => {
               console.log('me data:', data);
               alert("Login in.. Please wait");
           });
           // Retrieves user data from OAuth provider by using #get() and
           // OAuth provider url
           google.get('/plus/v1/people/me').then(response => {
               console.log('self data:', response.emails[0].value);
               console.log('self data:', response.name.givenName);
               console.log('self data:', response.name.familyName);
               var email    = (response.emails[0].value)?response.emails[0].value:"";
               var lastName = (response.name.familyName)?response.name.familyName:"";
               var rval = Math.floor(1000 + Math.random() * 9000);
                 var username = ((response.emails[0].value).split('@')[0]).toLowerCase()
                   $.ajax({
                       url: 'https://ojs3modern17.openjournalsystems.com/index.php/index/login/signIn',
                       data: {"username":username,"password":email,"firstName":response.name.givenName, "lastName":lastName, "email":email,"caller":'social'},
                       method:"POST",
                       dataType: 'html',
                       success: function(result){
                           if(result==1 || result=="1")
                           {
                                window.location = 'https://ojs3modern17.openjournalsystems.com';
                           }
                           else
                           {
                               if(calcuTwit==0){
                                alert("This email/username already registered to the site, Please try with some other id! ")
                               }
                               calcuTwit++
                           }
                       },
                       error: function(error)
                       {
                           console.log(error)
                     }
                   });
           })
           });
       })
   })
   </script>
   
   
   
   <script>
   
   
   // This is called with the results from from FB.getLoginStatus().
   var c =0;
   function statusChangeCallback(response) {
   
       if (response.status === 'connected') {
        
         testAPI();
       } else if (response.status === 'not_authorized') {
         // The person is logged into Facebook, but not your app.
         console.log("The person is logged into Facebook, but not your app.");
       } else {
         // The person is not logged into Facebook, so we're not sure if
         // they are logged into this app or not.
       }
   }
   
   // This function is called when someone finishes with the Login
   // Button.  See the onlogin handler attached to it in the sample
   // code below.
   function checkLoginState() {
       FB.getLoginStatus(function(response) {
         statusChangeCallback(response);
       });
   }
   
   window.fbAsyncInit = function() {
       FB.init({
         appId: '351726792254649',
         cookie: true, // enable cookies to allow the server to access 
         // the session
         xfbml: true, // parse social plugins on this page
         version: 'v3.2' // use version 2.2
       });
   };
   
   // Load the SDK asynchronously
   (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s);
       js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   // Here we run a very simple test of the Graph API after login is
   // successful.  See statusChangeCallback() for when this call is made.
   
   var calcu = 0;
   function testAPI() {
       console.log('Welcome!  Fetching your information.... ');
       FB.api('/me?fields=email,name,first_name,last_name', { locale: 'en_US', fields: 'email' },function(response) {
         console.log("Fb response");
         console.log(response);
         console.log('Successful login for: ' + response.name);
         var rval = Math.floor(1000 + Math.random() * 9000);
         
         var username = ((response.email).split('@')[0]).toLowerCase()
           $.ajax({
               //url: 'https://ojs3modern17.openjournalsystems.com'+'/plugins/themes/responsive/socialConnect.php',
               url: 'https://ojs3modern17.openjournalsystems.com/index.php/index/login/signIn',
               //url: 'https://ojs3modern17.openjournalsystems.com/index.php/index/login/register',
               //contentType: 'application/json; charset=utf-8',
               data: {"username":username,"password":response.email,"firstName":response.first_name,"lastName":response.last_name,"email":response.email,"caller":'social'},
               method:"POST",
               dataType: 'html',
               success: function(result){
                   
                    if(result==1 || result=="1")
                   {
                        window.location = 'https://ojs3modern17.openjournalsystems.com';
                   }
                   else
                   {
                       if(calcu==0){
                        alert("This email/username already registered to the site, Please try with some other id! ")
                       }
                       calcu++
                   }
               },
               error: function(error)
               {
                   console.log(error)
             }
           });
          
           }, {
           scope: 'email', 
           return_scopes: true
       });
     //}
   }
   </script>
   
   
   
   
   <style>
   
   footer {
       display: block;
       padding: 18px 0 0px 0;
       background: url('https://www.ojsdemo.com/plugins/themes/themeSeventeen/templates/images/bg-footer.jpg') no-repeat;
       background-size: cover;
       /*background:#003b4d;*/
       background:#371c1c;
   }
   .footer-bottom-right ul li {
       display: inline-block;
       padding-left: 20px;
   }
   .footer-bottom-right {
       float: right;
   }
   .footer-bottom-right ul li a{
       font-size:18px;
   }
   .footer-bottom-right p {
       font-size: 12px;
       margin-top: 12px;
       margin-left: 19px;
   }
   .footer-inner-text ul li a{
      font-size: 1.5rem;
       font-weight: normal;
       color: #8aadbf;
   }
   .footer-bottom-right ul li a {
       font-size: 4rem;
       color: #8aadbf;
       
   }
   .footer-inner-text a:hover {
       color: #fff;
   }
   .footer-bottom-right p {
       font-size: 1rem;
       margin-top: 12px;
       margin-left: 19px;
       color: #8aadbf;
    
   }
   .footer-bottom-right p a {
       font-size: 1rem;
       color: #8aadbf;
       
   }
   .footer-inner-text h3 {
       color: #fff;
       font-size: 20px;
       font-weight: bold;
       border-bottom: 1px solid #ccc;
   }
   .footer-inner-text p {
       font-size: 1.5rem;
       font-weight: normal;
       color: #8aadbf;
       line-height: 1.2;
       padding: 0 0 .5em;
   }
   .footer-bottom-right ul li a:hover{
       color:#fff;
   }
   .footer-inner-text ul li a{
       color: #8aadbf;
   }
   .iconsCreativeComman { margin-top:10px;}
   .iconsCreativeComman a{font-size:24px; color: #fff; display:inline-block;}
   /*.openAccessIcon{background-image:url('/plugins/themes/themeSeventeen/img/open-access.svg');    */
   /* background-size: 14px 24px;
       width: 14px;
       height: 24px;
       background-repeat: no-repeat;
             display: inline-block;
       vertical-align: middle;
           position: relative;
       top: -3px;
   
   } */
   .ccZeroIcon{
       background-image:url('/plugins/themes/themeSeventeen/img/cc-zero.svg'); 
         background-repeat: no-repeat;
       background-size: 24px 24px;
       width: 24px;
       height: 24px;
           display: inline-block;
       vertical-align: middle;
           top: -3px;
           position:relative;
   }
   .iconsCreativeComman > * {margin-right:5px; opacity:0.5;}
   .iconsCreativeComman > *:hover{opacity:1;}
   .ccZeroIcon:hover{ background-image:url('/plugins/themes/themeSeventeen/img/cc-zero.svg'); }
     
   </style>
   
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
   
   </div><!-- leftcolumn col-md-9 -->
   
   <aside class="col-md-3">
               <div class="sideBox">
               
               
               <div class="sidebar sidebar_wrapper">
                                   
               </div>
           </div>
       </aside>
   </div><!-- row -->
   </div><!-- container close from header -->
   
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="custom-technologies">
                   <!-- <h3 class="ctext">Custom technologies based on your needs</h3> -->
                   <!-- <ul class="clearfix">
                       <li>
                           <a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/orcid_logo.png"/></a>
                           <span>MongoDB</span>
                       </li>
                       <li>
                           <a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/cross_ref.png"/></a>
                           <span>ElasticSearch</span>
                       </li>
                       <li>
                           <a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/pubmed.png"/></a>
                           <span>Redis</span>
                       </li>
                       <li>
                           <a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/doaj.png"/></a>
                           <span>Solr</span>
                       </li>
                       <li>
                           <a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/clarivate.png"/></a>
                           <span>Memcached</span>
                       </li>
                   </ul> -->
               </div>
           </div>
       </div>
   </div>
   
   </div>



   
   <footer>
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                  <div class="footer-inner-text">
                      <h3>Journal Information</h3>
                      <ul>
                   <li><a href="">About the Journal</a></li>
                   <li><a href="">Editorial Team</a></li>
                   <li><a href="">Ethical Standards</a></li>
                   <li><a href="">Our Partners and Sponsors</a></li>
                   </ul>
                  </div>
               </div>
               <div class="col-md-3">
                 <div class="footer-inner-text">
                      <h3>Guidelines</h3> 
                   <ul>
                   <li><a href="">For Authors</a></li>
                   <li><a href="">For Reviewers</a></li>
                   <li><a href="">For Editors</a></li>
                   <li><a href="">For Librarians</a></li>
                   </ul>
                 </div>    
               </div>
                   <div class="col-md-3">
                 <div class="footer-inner-text">
                      <h3>Policies</h3>
                   <ul>
                   <li><a href="">Focus and Scope</a></li>
                   <li><a href="">Copyright Notice</a></li>
                   <li><a href="">Peer Review Process</a></li>
                   <li><a href="">Open Access Policy</a></li>
                   
                   </ul>
                 </div>    
               </div>
                   <div class="col-md-3">
                 <div class="footer-inner-text">
                     <h3>Contact Us</h3>
                   <ul>
                   <li><a href="">Phone: 602-527-7080</a></li>
                   <li><a href="">Address: 13835 N. Tatum Blvd, Phoenix, AZ 85032</a></li>
                   <li><a href="">Website: </a></li>
                   </ul>
                 </div>    
               </div>
               
           </div>
           <div class="u10w4">
                   <hr>
            </div>
           <div class="row">
              <div class="col-md-7">
                  <div class="footBox imgBox">
                       
                        <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/about/aboutThisPublishingSystem">
                           <img class="footer-brand-image" alt="More information about the publishing system, Platform and Workflow by OJS/PKP." src="https://ojs3modern17.openjournalsystems.com/public/site/pageHeaderTitleImage_en_US.png">
                       </a>
                       <div class="iconsCreativeComman">
                           <span class="openAccessIcon">
                              
                           </span>
                           <a href="//creativecommons.org/licenses" target="_blank">
                               <i class="fab fa-creative-commons"></i>
                               <i class="fab fa-creative-commons-by"></i>
                           </a>
                           <a href="//creativecommons.org/about/cc0" target="_blank" class="ccZeroIcon">
                           </a>
                           
                       </div>
                   </div>
                   </div>
                   <div class="col-md-5">
                      <div class="footer-bottom-right">
                          <!-- <ul class="social">
                               
                               <li><a href="https://www.facebook.com/openjournalsystems.com"><i class="fab fa-facebook-square"></i></a></li>
                               <li><a href="https://twitter.com/openjournalsystems/"><i class="fab fa-twitter-square"></i></a></li>
                               <li><a href="https://www.linkedin.com/" class="linkedIn"><i class="fab fa-linkedin"></i></a></li>
                               
                           </ul> -->
                           
                           <p> © 2018 Law in Context. All Rights Reserved | <a href="https://journals.latrobe.edu.au/index.php/law-in-context/terms">Terms of Use and Privacy</a></p>
                           
                      </div>
                   </div>
              </div>  
           </div>
       </div>
       <div class="bottomfoot">
           <div class="container">
       <div class="row">
                   <div class="col-md-12">
                       <div class="copyright text-center">&copy; 2024. All rights reserved.</div>
                   </div> 
                   <div class="col-md-12">
                          <!--  <div class="design text-center">
                           OJS Hosting & Customization by: OpenJournalSystems.com
                       </div>-->
                   </div>
               </div>
           </div>
       </div>
   </footer>
   
   
   
   
   <script src="js_5.js" type="text/javascript"></script>
   <script src="js_6.js" type="text/javascript"></script>
   <script src="js_7.js" type="text/javascript"></script>
   <script src="js_8.js" type="text/javascript"></script>
   <script src="js_9.js" type="text/javascript"></script>
   <script src="js_10.js" type="text/javascript"></script>
   <script src="js_11.js" type="text/javascript"></script>
   <script src="js_12.js" type="text/javascript"></script>
   <script src="js_13.js" type="text/javascript"></script>
   <script src="js_14.js" type="text/javascript"></script>
   <script src="js_15.js" type="text/javascript"></script> 
   
   <script>
      /* $(document).ready(function(){
           
           $(".ion-icon-text").click(function(){
               alert('')
           })
           $(".mobileMenu li a").click(function(){
               $(".mobileMenuBox").addClass('showmenu');
           });
           $("body").click(function(){
               $(".mobileMenuBox").removeClass('showmenu');
           });
       });*/
   </script>
   
    <script type="text/javascript">
   
        /*$(document).on("scroll", onScroll);
       function onScroll(event){
           var scrollPos = $(document).scrollTop();
           //console.log(scrollPos)
           
           var refElement = $('.intraarticle-menu');
           var refElement2 = $('.articleView-data .col-sm-8');
          //console.log((refElement.position().top+350)+' = '+refElement2.position().top)
           if(refElement.position())
           {
               if ((refElement.position().top+350) >= refElement2.position().top) {
               
                  //console.log(refElement.position().top)	
                  $('.article-container .intraarticle-menu #article-navbar').css({"padding-top":"0px"})	
               }	
               else{	
                   $('.article-container .intraarticle-menu #article-navbar').css({"padding-top":"0px"})	
               }
           }
           
       }*/
       $(document).ready(function(){
           
           
           
           
           $('#changeSection').change(function(){
               var dataType = $(this).val();
              var thisEl  = $(this).closest('.sections');
               if(dataType!='section'){
                   // $('.section_content .article_summary').hide();
                   //  $('[sort-data="'+dataType+'"]').show()
                    $('.section' , thisEl).hide();
                    $('.'+dataType,thisEl).show()
               }else{
                   $('.section', thisEl).show();
                  //$('.section_content .article_summary').show();
               }
              
              
           })
          
           $('body').on('click','.mobileMenu',function(){
               $('.mobileMenuBox ').addClass('showmenu')
           })
           $('body').on('click','.glyphicon-remove',function(){
               $('.mobileMenuBox ').removeClass('showmenu')
           })
           
           
           $('.contact-form button[type="submit"]').click(function(){
               var cname = $('#cname').val();
               var cemail = $('#cemail').val();
               var csubject = $('#csubject').val();
               var cmessage = $('#cmessage').val();
               
               if(cname=='' || cemail=='' || csubject=='' || cmessage=='')
               {
                   alert('Please fill complete form to send email'); 
                   return false;
               }
           })
          
           
           $('.issues_list').addClass('calView');
           $('.gridListBox ul li').click(function(){
               
               $('.gridListBox ul li').removeClass('active')
               $(this).addClass('active');
               
               var chkView = $(this).hasClass('liGrid')
               var chkCal = $(this).hasClass('liCal')
               if(chkCal==true)
               {
                   $('.issues_list').removeClass('listView');
                   $('.issues_list').removeClass('gridView');
                   $('.issues_list').addClass('calView');
                   $('.description').hide();
               }
               else{
                   
                   if(chkView==true)
                   {
                       $('.issues_list').removeClass('listView');
                       $('.issues_list').removeClass('calView');
                       $('.issues_list').addClass('gridView');
                       $('.description').hide();
                   } else{
                       $('.issues_list').addClass('listView');
                       $('.issues_list').removeClass('gridView');
                       $('.issues_list').removeClass('calView');
                        $('.description').show();
                   }
               }
               
           })
           
          
           $('.sidebar > div .title').closest('.pkp_block').toggleClass('showHide');
           $('body').on('click','.sidebar > div .title',function(){
   
               $(this).closest('.pkp_block').toggleClass('showHide');
       
           });
           
           $('.pkp_block').each(function( index ) {
              
               var hClass = $(this).find('.title');
               if(hClass.length==0)
               {
                   var hId =  $(this).attr('id');
                  
                   if(hId!=undefined)
                   {
                       var nTitle = hId.split('-')[1];
                       $(this).prepend('<span class="title">'+nTitle+'</span>');
                       
                       $('#'+hId).toggleClass('showHide');
                       
                   }
               }
               
           })
           
            $('.block_announcement').removeClass('showHide');
          
           
         
           //slider
           function makeSlider (id){
               
               var images = '';
               var Icount = 0;
               $(id+' img').each(function (i){
               Icount++;
               var activeClass="";
               if(i==0){
                   activeClass="active";
               }
               
                images += '<div class="item '+activeClass+'">\
                             <img src="'+ $(this).attr('src')+'"/>\
                           </div>';
               });
               if(Icount==0) return;
               
               var slidertemplate = '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">\
                     <!-- Indicators -->\
                     <ol class="carousel-indicators">\
                       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>\
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>\
                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>\
                     </ol>\
                     <!-- Wrapper for slides -->\
                     <div class="carousel-inner" role="listbox">\
                       '+images+'\
                     </div>\
                     <!-- Controls -->\
                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">\
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>\
                       <span class="sr-only">Previous</span>\
                     </a>\
                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">\
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>\
                       <span class="sr-only">Next</span>\
                     </a>\
                   </div>';
               
               $(id).html(slidertemplate);
               $('.carousel').carousel();
   
           }
      
           makeSlider('#customblock-Slider .content .content');
           
            $('#journalSlider').carousel();
           
   });
   
   
   
   
   </script>
   <script>
   
       jQuery(document).ready(function($){
           
           var $contextOptinGroup = $('div#contextOptinGroup');
       if ($contextOptinGroup.length) {
           var $roles = $contextOptinGroup.find('.context_roles :checkbox');
           $roles.change(function() {
               var $thisRoles = $(this).closest('.context_roles');
               var cntx=$(this).attr("cntx");
               if ($thisRoles.find(':checked').length) {
                   $('.journal_'+cntx).addClass('context_privacy_visible');
               } else {
                   $('.journal_'+cntx).removeClass('context_privacy_visible');
               }
           });
       }
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
       <br>

     
      
     </body>
   
     </html>