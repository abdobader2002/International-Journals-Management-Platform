<?php
require 'conn.php';
if (isset($_POST["Register"])) {
$GivenName = $_POST["givenName"];
$FamilyName = $_POST["familyName"];
$Affiliation  = $_POST["affiliation"];
$Country  = $_POST["country"];
$email = $_POST["email"];
$Username  = $_POST["Username"];
$password = $_POST["Password"];
$passwordRepeat=$_POST["repearPassword"];
$role='auther';
$errors = array();
if (empty($GivenName) && empty($FamilyName) && empty($Affiliation) && empty($Country) && empty($email) && empty($Username) && empty($password) && empty($passwordRepeat)) {
    array_push($errors," All fields are required");
}elseif(empty($GivenName)){
    array_push($errors," GivenName are required");
}elseif(empty($FamilyName)){
    array_push($errors," FamilyName are required");
}elseif(empty($Affiliation)){
    array_push($errors," Affiliation are required");
}elseif(empty($Country)){
    array_push($errors," Country are required");
}elseif(empty($email)){
    array_push($errors," email are required");
}elseif(empty($Username)){
    array_push($errors," Username are required");
}elseif(empty($password)){
    array_push($errors," password are required");
}elseif(empty($passwordRepeat)){
    array_push($errors," passwordRepea are required");
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    array_push($errors," Email is not valid");
}elseif (strlen($password)<6) {
    array_push($errors,"Password must be at least 8 charactes long");
}elseif ($password!==$passwordRepeat){
    array_push($errors,"Password does not match");
}else{
$sql="SELECT * FROM authers WHERE email='$email'";
$result = mysqli_query($conn,$sql);
$rowcount = mysqli_num_rows($result);
if($rowcount>0){
    array_push($errors," Email Already exists!");
}}if(count($errors)>0){
    foreach ($errors as $error){
    echo "<div class='alert alert-danger'>$error</div>";
    }
}else{
    $query = "INSERT INTO authers (givenname, familyname, affiliation, country, email, username, Pasword,role) VALUES ('$GivenName', '$FamilyName', '$Affiliation', '$Country', '$email', '$Username', '$password','$role')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        header("Location:Register.php");
        die("something went wrong: " . mysqli_error($conn));
    } else {
        header("Location:Login.php");
        echo "<div class='alert alert-success'>Registration Successful</div>";
    }
}      
}
?>

<style>
  @media only screen and (max-width: 800px) {

    header .navigation #navigationPrimary .nav-link,
    #user-dashboard-link,
    #navigationUser a.nav-link,
    #user-nav-wraper a,
    #languageNav .dropdown-toggle {
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
    <title> Register </title>
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
    <header>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                font-family: "Noto Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue";
                font-weight: 600;
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
                font-weight: 600;
                margin-bottom: 0px;
                font-size: 0.9em;
                font-family: "Noto Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue";
              }

              .journal-logo {
                max-width: 300px;
                margin-top: -6px;
              }
            </style>
            <a href="Home.page.php" class="logo">
              <img class="journal-logo" src="https://ojs3modern17.openjournalsystems.com/public/site/pageHeaderTitleImage_en_US.png" alt="##common.pageHeaderLogo.altText##">
            </a>
            <!--
      <div class="site-name-h1_h2"><div class="logo-name-h1"><h1 class="site-name">	OJS </h1></div><div class="site-name-h2_h3 "><h2> OJS	 </h2><h3>OPEN JOURNAL SYSTEAM </h3></div></div> -->
          </div>
          <div class="col-md-2">
            <div class="topSearch">
              <div id="searchWrpNav">
                <div class="searchCntNav">
                  <form class="" role="search" method="post" action="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search">
                    <div class="form-group">
                      <input class="" name="query" value="" type="text" aria-label="Search Query" placeholder="Search">
                    </div>
                    <button type="submit" class="">
                      <i class="fa fa-search"></i>
                    </button>
                    <!-- <div class="adVSearch" ><a href="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search">Advance search</a></div> -->
                  </form>
                </div>
              </div>
              <!--<input type="text" name="" placeholder="Search"><button type="submit" value=""><i class="fas fa-search"></i></button>-->
              <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/search/search" class="advanceSearch">Advance Search</a>
            </div>
          </div>
        </div>
        <!-- <ul class="social"><li><a href="javascript:void(0);"><i class="fas fa-rss-square"></i></a></li><li><a href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a></li><li><a href="javascript:void(0);"><i class="fab fa-twitter-square"></i></a></li><li><a href="javascript:void(0);" class="linkedIn"><i class="fab fa-linkedin"></i></a></li><li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li></ul> -->
      </div>
      <div class="navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div id="modal-on-small" class="menu1">
                <div id="primary-nav-wraper" class="">
                  <ul id="navigationPrimary" class="pkp_navigation_primary nav nav-tabs">
                    <li class=" nav-item">
                      <a class="nav-link" href="Home.page.php">Home</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="mobileMenuBox menu2">
                <a href="javascript:void(0);" class="close">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
                <ul id="navigationPrimary" class="pkp_navigation_primary nav nav-tabs">
                  <li class=" nav-item">
                    <a class="nav-link" href="Home.page.php">Home</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="navRight">
                <!-- <ul id="languageNav" class="dropdown language-toggle nav nav-tabs"><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="languageToggleMenulanguageNav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">##plugins.themes.healthSciences.language.toggle##</span>
                  English
              </a><div class="navigation-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="languageToggleMenulanguageNav"><a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/pt_BR?source=%2Findex.php%2Findex%2Fuser%2Fregister">
                              Portuguese
                          </a><a class="dropdown-item" href="https://ojs3modern17.openjournalsystems.com/index.php/index/user/setLocale/es?source=%2Findex.php%2Findex%2Fuser%2Fregister">
                              Spanish
                          </a></div></li></ul> -->
                <ul id="navigationUser" class="pkp_navigation_user nav nav-tabs">
                  <li class=" nav-item">
                    <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link" href="Register.php">
                      <i class="fas fa-user-plus"></i> Register </a>
                  </li>
                  <li class=" nav-item">
                    <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link" href="Login.php">
                      <i class="fas fa-sign-in-alt"></i> Login </a>
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
          <main class="page page_register">
            <div class="pa">
              <style>
                /*----------css for breadcumbs-----------------*/
              </style>
              <nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
                <ol class="breadcrumb">
                  <li>
                    <a href="Home.page.php"> Home </a>
                  </li>
                  <li class="active"> Register </li>
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
  
  
              bdcrmHtml2 = '
														<li>
															<a href="javascript:void(0)">Home</a>
														</li>
														<li class="active">'+bdcrmHtml2+'</li>';
              
              $('#breadcrumbWrp .breadcrumb').html(bdcrmHtml2);
          }*/
                /*})*/
              </script>
              <div class="formBoxLR">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation">
                    <a href="Login.php" class="login btn register-button">Login</a>
                  </li>
                  <li role="presentation" class="active">
                    <a href="javascript:void(0);">Register</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane" id="logintab">1</div>
                  <div role="tabpanel" class="clearfix tab-pane active" id="signuptab">
                    <form class="cmp_form register" id="register" method="post" action="Register.php">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="hidden" name="csrfToken" value="9449350960252e8ef917a383c1fc581b">
                          <fieldset class="identity">
                            <legend class="register-form-legend"> Profile </legend>
                            <div class="fields">
                              <div class="form-row">
                                <div class="form-group col-sm-12">
                                  <label for="givenName" class="sr-only"> Given Name </label>
                                  <input type="text" class="form-control" name="givenName" id="givenName" value="" maxlength="40" placeholder="Given Name" required>
                                  <small class="form-text text-muted">
                                    <span class="required">*</span>Required </small>
                                </div>
                                <div class="form-group col-sm-12">
                                  <label for="familyName" class="sr-only"> Family Name </label>
                                  <input type="text" class="form-control" name="familyName" id="familyName" value="" maxlength="40" placeholder="Family Name" required>
                                  <small class="form-text text-muted">
                                    <span class="required">*</span>Required </small>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-sm-8">
                                  <label for="affiliation" class="sr-only"> affiliation </label>
                                  <input type="text" class="form-control" name="affiliation" id="affiliation" value="" placeholder="affiliation" required>
                                  <small class="form-text text-muted">
                                    <span class="required">*</span>Required </small>
                                </div>
                                <div class="form-group col-sm-4">
                                  <label for="country" class="sr-only"> Country </label>
                                  <select class="form-control" name="country" id="country" required>
                                    <option class="">select country </option>
                             <?php
                      $countries = array(
                        'Afghanistan' => 'Afghanistan',
                        'Åland Islands' => 'Åland Islands',
                        'Albania' => 'Albania',
                        'Algeria' => 'Algeria',
                        'American Samoa' => 'American Samoa',
                        'Andorra' => 'Andorra',
                        'Angola' => 'Angola',
                        'Anguilla' => 'Anguilla',
                        'Antarctica' => 'Antarctica',
                        'Antigua and Barbuda' => 'Antigua and Barbuda',
                        'Argentina' => 'Argentina',
                        'Armenia' => 'Armenia',
                        'Aruba' => 'Aruba',
                        'Australia' => 'Australia',
                        'Austria' => 'Austria',
                        'Azerbaijan' => 'Azerbaijan',
                        'Bahamas' => 'Bahamas',
                        'Bahrain' => 'Bahrain',
                        'Bangladesh' => 'Bangladesh',
                        'Barbados' => 'Barbados',
                        'Belarus' => 'Belarus',
                        'Belgium' => 'Belgium',
                        'Belize' => 'Belize',
                        'Benin' => 'Benin',
                        'Bermuda' => 'Bermuda',
                        'Bhutan' => 'Bhutan',
                        'Bolivia' => 'Bolivia',
                        'Bonaire, Sint Eustatius and Saba' => 'Bonaire, Sint Eustatius and Saba',
                        'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                        'Botswana' => 'Botswana',
                        'Bouvet Island' => 'Bouvet Island',
                        'Brazil' => 'Brazil',
                        'British Indian Ocean Territory' => 'British Indian Ocean Territory',
                        'Brunei Darussalam' => 'Brunei Darussalam',
                        'Bulgaria' => 'Bulgaria',
                        'Burkina Faso' => 'Burkina Faso',
                        'Burundi' => 'Burundi',
                        'Cabo Verde' => 'Cabo Verde',
                        'Cambodia' => 'Cambodia',
                        'Cameroon' => 'Cameroon',
                        'Canada' => 'Canada',
                        'Cayman Islands' => 'Cayman Islands',
                        'Central African Republic' => 'Central African Republic',
                        'Chad' => 'Chad',
                        'Chile' => 'Chile',
                        'China' => 'China',
                        'Christmas Island' => 'Christmas Island',
                        'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
                        'Colombia' => 'Colombia',
                        'Comoros' => 'Comoros',
                        'Congo' => 'Congo',
                        'Congo, Democratic Republic of the' => 'Congo, Democratic Republic of the',
                        'Cook Islands' => 'Cook Islands',
                        'Costa Rica' => 'Costa Rica',
                        'Côte d\'Ivoire' => "Côte d'Ivoire",
                        'Croatia' => 'Croatia',
                        'Cuba' => 'Cuba',
                        'Curaçao' => 'Curaçao',
                        'Cyprus' => 'Cyprus',
                        'Czech Republic' => 'Czech Republic',
                        'Denmark' => 'Denmark',
                        'Djibouti' => 'Djibouti',
                        'Dominica' => 'Dominica',
                        'Dominican Republic' => 'Dominican Republic',
                        'Ecuador' => 'Ecuador',
                        'Egypt' => 'Egypt',
                        'El Salvador' => 'El Salvador',
                        'Equatorial Guinea' => 'Equatorial Guinea',
                        'Eritrea' => 'Eritrea',
                        'Estonia' => 'Estonia',
                        'Ethiopia' => 'Ethiopia',
                        'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
                        'Faroe Islands' => 'Faroe Islands',
                        'Fiji' => 'Fiji',
                        'Finland' => 'Finland',
                        'France' => 'France',
                        'French Guiana' => 'French Guiana',
                        'French Polynesia' => 'French Polynesia',
                        'French Southern Territories' => 'French Southern Territories',
                        'Gabon' => 'Gabon',
                        'Gambia' => 'Gambia',
                        'Georgia' => 'Georgia',
                        'Germany' => 'Germany',
                        'Ghana' => 'Ghana',
                        'Gibraltar' => 'Gibraltar',
                        'Greece' => 'Greece',
                        'Greenland' => 'Greenland',
                        'Grenada' => 'Grenada',
                        'Guadeloupe' => 'Guadeloupe',
                        'Guam' => 'Guam',
                        'Guatemala' => 'Guatemala',
                        'Guernsey' => 'Guernsey',
                        'Guinea' => 'Guinea',
                        'Guinea-Bissau' => 'Guinea-Bissau',
                        'Guyana' => 'Guyana',
                        'Haiti' => 'Haiti',
                        'Heard Island and McDonald Islands' => 'Heard Island and McDonald Islands',
                        'Holy See' => 'Holy See',
                        'Honduras' => 'Honduras',
                        'Hong Kong' => 'Hong Kong',
                        'Hungary' => 'Hungary',
                        'Iceland' => 'Iceland',
                        'India' => 'India',
                        'Indonesia' => 'Indonesia',
                        'Iran, Islamic Republic of' => 'Iran, Islamic Republic of',
                        'Iraq' => 'Iraq',
                        'Ireland' => 'Ireland',
                        'Isle of Man' => 'Isle of Man',
                        'Israel' => 'Israel',
                        'Italy' => 'Italy',
                        'Jamaica' => 'Jamaica',
                        'Japan' => 'Japan',
                        'Jersey' => 'Jersey',
                        'Jordan' => 'Jordan',
                        'Kazakhstan' => 'Kazakhstan',
                        'Kenya' => 'Kenya',
                        'Kiribati' => 'Kiribati',
                        'Korea, Democratic People\'s Republic of' => "Korea, Democratic People's Republic of",
                        'Korea, Republic of' => 'Korea, Republic of',
                        'Kuwait' => 'Kuwait',
                        'Kyrgyzstan' => 'Kyrgyzstan',
                        'Lao People\'s Democratic Republic' => "Lao People's Democratic Republic",
                        'Latvia' => 'Latvia',
                        'Lebanon' => 'Lebanon',
                        'Lesotho' => 'Lesotho',
                        'Liberia' => 'Liberia',
                        'Libya' => 'Libya',
                        'Liechtenstein' => 'Liechtenstein',
                        'Lithuania' => 'Lithuania',
                        'Luxembourg' => 'Luxembourg',
                        'Macao' => 'Macao',
                        'Macedonia, the former Yugoslav Republic of' => 'Macedonia, the former Yugoslav Republic of',
                        'Madagascar' => 'Madagascar',
                        'Malawi' => 'Malawi',
                        'Malaysia' => 'Malaysia',
                        'Maldives' => 'Maldives',
                        'Mali' => 'Mali',
                        'Malta' => 'Malta',
                        'Marshall Islands' => 'Marshall Islands',
                        'Martinique' => 'Martinique',
                        'Mauritania' => 'Mauritania',
                        'Mauritius' => 'Mauritius',
                        'Mayotte' => 'Mayotte',
                        'Mexico' => 'Mexico',
                        'Micronesia, Federated States of' => 'Micronesia, Federated States of',
                        'Moldova, Republic of' => 'Moldova, Republic of',
                        'Monaco' => 'Monaco',
                        'Mongolia' => 'Mongolia',
                        'Montenegro' => 'Montenegro',
                        'Montserrat' => 'Montserrat',
                        'Morocco' => 'Morocco',
                        'Mozambique' => 'Mozambique',
                        'Myanmar' => 'Myanmar',
                        'Namibia' => 'Namibia',
                        'Nauru' => 'Nauru',
                        'Nepal' => 'Nepal',
                        'Netherlands' => 'Netherlands',
                        'New Caledonia' => 'New Caledonia',
                        'New Zealand' => 'New Zealand',
                        'Nicaragua' => 'Nicaragua',
                        'Niger' => 'Niger',
                        'Nigeria' => 'Nigeria',
                        'Niue' => 'Niue',
                        'Norfolk Island' => 'Norfolk Island',
                        'Northern Mariana Islands' => 'Northern Mariana Islands',
                        'Norway' => 'Norway',
                        'Oman' => 'Oman',
                        'Pakistan' => 'Pakistan',
                        'Palau' => 'Palau',
                        'Palestine, State of' => 'Palestine, State of',
                        'Panama' => 'Panama',
                        'Papua New Guinea' => 'Papua New Guinea',
                        'Paraguay' => 'Paraguay',
                        'Peru' => 'Peru',
                        'Philippines' => 'Philippines',
                        'Pitcairn' => 'Pitcairn',
                        'Poland' => 'Poland',
                        'Portugal' => 'Portugal',
                        'Puerto Rico' => 'Puerto Rico',
                        'Qatar' => 'Qatar',
                        'Réunion' => 'Réunion',
                        'Romania' => 'Romania',
                        'Russian Federation' => 'Russian Federation',
                        'Rwanda' => 'Rwanda',
                        'Saint Barthélemy' => 'Saint Barthélemy',
                        'Saint Helena, Ascension and Tristan da Cunha' => 'Saint Helena, Ascension and Tristan da Cunha',
                        'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                        'Saint Lucia' => 'Saint Lucia',
                        'Saint Martin (French part)' => 'Saint Martin (French part)',
                        'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
                        'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
                        'Samoa' => 'Samoa',
                        'San Marino' => 'San Marino',
                        'Sao Tome and Principe' => 'Sao Tome and Principe',
                        'Saudi Arabia' => 'Saudi Arabia',
                        'Senegal' => 'Senegal',
                        'Serbia' => 'Serbia',
                        'Seychelles' => 'Seychelles',
                        'Sierra Leone' => 'Sierra Leone',
                        'Singapore' => 'Singapore',
                        'Sint Maarten (Dutch part)' => 'Sint Maarten (Dutch part)',
                        'Slovakia' => 'Slovakia',
                        'Slovenia' => 'Slovenia',
                        'Solomon Islands' => 'Solomon Islands',
                        'Somalia' => 'Somalia',
                        'South Africa' => 'South Africa',
                        'South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
                        'South Sudan' => 'South Sudan',
                        'Spain' => 'Spain',
                        'Sri Lanka' => 'Sri Lanka',
                        'Sudan' => 'Sudan',
                        'Suriname' => 'Suriname',
                        'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
                        'Swaziland' => 'Swaziland',
                        'Sweden' => 'Sweden',
                        'Switzerland' => 'Switzerland',
                        'Syrian Arab Republic' => 'Syrian Arab Republic',
                        'Taiwan, Province of China' => 'Taiwan, Province of China',
                        'Tajikistan' => 'Tajikistan',
                        'Tanzania, United Republic of' => 'Tanzania, United Republic of',
                        'Thailand' => 'Thailand',
                        'Timor-Leste' => 'Timor-Leste',
                        'Togo' => 'Togo',
                        'Tokelau' => 'Tokelau',
                        'Tonga' => 'Tonga',
                        'Trinidad and Tobago' => 'Trinidad and Tobago',
                        'Tunisia' => 'Tunisia',
                        'Turkey' => 'Turkey',
                        'Turkmenistan' => 'Turkmenistan',
                        'Turks and Caicos Islands' => 'Turks and Caicos Islands',
                        'Tuvalu' => 'Tuvalu',
                        'Uganda' => 'Uganda',
                        'Ukraine' => 'Ukraine',
                        'United Arab Emirates' => 'United Arab Emirates',
                        'United Kingdom' => 'United Kingdom',
                        'United States' => 'United States',
                        'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
                        'Uruguay' => 'Uruguay',
                        'Uzbekistan' => 'Uzbekistan',
                        'Vanuatu' => 'Vanuatu',
                        'Venezuela, Bolivarian Republic of' => 'Venezuela, Bolivarian Republic of',
                        'Viet Nam' => 'Viet Nam',
                        'Virgin Islands, British' => 'Virgin Islands, British',
                        'Virgin Islands, U.S.' => 'Virgin Islands, U.S.',
                        'Wallis and Futuna' => 'Wallis and Futuna',
                        'Western Sahara' => 'Western Sahara',
                        'Yemen' => 'Yemen',
                        'Zambia' => 'Zambia',
                        'Zimbabwe' => 'Zimbabwe'
                    );
                    foreach ($countries as $code => $name) {
                        echo "<option value='$code'>$name</option>";
                    }
?>
                                  </select>
                                  <small class="form-text text-muted">
                                    <span class="required">*</span>Required </small>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset name="contexts">
                            <legend> Already have an account? <a href="Login.php">Log in.</a>
                            </legend>
                            <div class="fields">
                              <div id="contextOptinGroup" class="context_optin">
                                <!-- <ul class="list-group contexts"><li class="list-group-item context"><h4 class="list-group-item-heading">
                                  OJS Journal B
                              </h4><p>
                                  Request the following roles.
                              </p><div class="form-inline"><div class="form-group context_roles"><label class="input-group"><span class="input-group-addon"><input cntx="2" type="checkbox" name="readerGroup[34]"></span><span class="form-control">
                                                      Reader
                                                  </span></label><label class="input-group"><span class="input-group-addon"><input cntx="2" type="checkbox" name="authorGroup[31]"></span><span class="form-control">
                                                      Author
                                                  </span></label><label class="input-group"><span class="input-group-addon"><input cntx="2" type="checkbox" name="reviewerGroup[33]"></span><span class="form-control">
                                                      Reviewer
                                                  </span></label></div></div><div class="context_privacy journal_2 "><label><input type="checkbox" name="privacyConsent[2]" id="privacyConsent[2]" value="1">
                                                                                  Yes, I agree to have my data collected and stored according to this journal's <a href="https://ojs3modern17.openjournalsystems.com/index.php/ojsb/about/privacy" target="_blank">privacy statement</a>.
                                      </label></div></li></ul> -->
                              </div>
                            </div>
                          </fieldset>
                          <style>
                            .context_optin .context_privacy {
                              position: absolute;
                              left: -9999px;
                              padding: 5px 0;
                              font-size: 13px;
                              line-height: 20px;
                            }

                            .context_optin .context_privacy_visible {
                              position: relative;
                              left: auto;
                            }

                            .list-group.contexts {
                              margin-bottom: 0px;
                            }

                            .list-group-item.context {
                              padding-left: 0px;
                            }
                          </style>
                          <!-- <fieldset class="reviewer_nocontext_interests"><legend>
                                          If you requested to be a reviewer on any journal, please enter your subject interests.
                                      </legend><div class="fields"><div class="reviewer_nocontext_interests"><ul id="tagitInput" class="interests tag-it" data-field-name="interests[]" data-autocomplete-url="https://ojs3modern17.openjournalsystems.com/index.php/index/user/getInterests"></ul></div></div></fieldset> -->
                        </div>
                        <div class="col-md-6 registrationRight " style="border-left:1px solid #ddd;">
                          <div class="right">
                            <fieldset class="login-data">
                              <legend class="register-form-legend"> Login </legend>
                              <div class="fields">
                                <div class="form-row">
                                  <div class="form-group col-sm-12">
                                    <label for="email" class="sr-only"> Email </label>
                                    <input type="text" class="form-control" name="email" id="email" value="" maxlength="90" placeholder="Email" required>
                                    <small class="form-text text-muted">
                                      <span class="required">*</span>Required </small>
                                  </div>
                                  <div class="form-group col-sm-12">
                                    <label for="username" class="sr-only"> Username </label>
                                    <input type="text" class="form-control" name="Username" id="username" value="" maxlength="32" placeholder="Username" required>
                                    <small class="form-text text-muted">
                                      <span class="required">*</span>Required </small>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-sm-6">
                                    <label for="password" class="sr-only"> Password </label>
                                    <input type="password" class="form-control" name="Password" id="password" password="true" maxlength="32" placeholder="Password" required>
                                    <small class="form-text text-muted">
                                      <span class="required">*</span>Required </small>
                                  </div>
                                  <div class="form-group col-sm-6">
                                    <label for="password2" class="sr-only"> Repeat password </label>
                                    <input type="password" class="form-control" name="repearPassword" id="password2" password="true" maxlength="32" placeholder="Repeat password" required>
                                    <small class="form-text text-muted">
                                      <span class="required">*</span>Required </small>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                            <fieldset class="consent">
                              <!-- <div class="fields"><div class="custom-control custom-checkbox optin optin-privacy"><input type="checkbox" class="custom-control-input" id="privacyConsent" name="privacyConsent" value="1"><label class="custom-control-label" for="privacyConsent">
                                                                                          Yes, I agree to have my data collected and stored according to the <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/about/privacy" target="_blank">privacy statement</a>.
                                          </label></div></div><div class="fields"><div class="custom-control custom-checkbox optin optin-email"><input type="checkbox" class="custom-control-input" name="emailConsent" id="emailConsent" value="1"><label class="custom-control-label" for="emailConsent">
                                              Yes, I would like to be notified of new publications and announcements.
                                          </label></div></div> -->
                            </fieldset>
                            <div class="buttons">
                              <button class="submit btn btn-primary" name="Register" type="submit"> Register </button>
                              <a href="https://ojs3modern17.openjournalsystems.com/index.php/index/login?source=https%3A%2F%2Fojs3modern17.openjournalsystems.com%2Findex.php%2Findex%2Fuser%2Fprofile%2Froles" class="login btn register-button">Login</a>
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- formBoxLR -->
        </div>
        </main>
        <!-- .page -->
        <style>
          .journalRegistrationRight.registrationRight .login-data {
            margin-top: 20px !important;
          }
        </style>
        <style>
          footer {
            display: block;
            padding: 18px 0 0px 0;
            background: url('https://www.ojsdemo.com/plugins/themes/themeSeventeen/templates/images/bg-footer.jpg') no-repeat;
            background-size: cover;
            /*background:#003b4d;*/
            background: #371c1c;
          }

          .footer-bottom-right ul li {
            display: inline-block;
            padding-left: 20px;
          }

          .footer-bottom-right {
            float: right;
          }

          .footer-bottom-right ul li a {
            font-size: 18px;
          }

          .footer-bottom-right p {
            font-size: 12px;
            margin-top: 12px;
            margin-left: 19px;
          }

          .footer-inner-text ul li a {
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

          .footer-bottom-right ul li a:hover {
            color: #fff;
          }

          .footer-inner-text ul li a {
            color: #8aadbf;
          }

          .iconsCreativeComman {
            margin-top: 10px;
          }

          .iconsCreativeComman a {
            font-size: 24px;
            color: #fff;
            display: inline-block;
          }

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
          .ccZeroIcon {
            background-image: url('/plugins/themes/themeSeventeen/img/cc-zero.svg');
            background-repeat: no-repeat;
            background-size: 24px 24px;
            width: 24px;
            height: 24px;
            display: inline-block;
            vertical-align: middle;
            top: -3px;
            position: relative;
          }

          .iconsCreativeComman>* {
            margin-right: 5px;
            opacity: 0.5;
          }

          .iconsCreativeComman>*:hover {
            opacity: 1;
          }

          .ccZeroIcon:hover {
            background-image: url('/plugins/themes/themeSeventeen/img/cc-zero.svg');
          }
        </style>
      </div>
      <!-- leftcolumn col-md-9 -->
      <aside class="col-md-3">
        <div class="sideBox">
          <div class="sidebar sidebar_wrapper"></div>
        </div>
      </aside>
    </div>
    <!-- row -->
    </div>
    <!-- container close from header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="custom-technologies">
            <!-- <h3 class="ctext">Custom technologies based on your needs</h3> -->
            <!-- <ul class="clearfix"><li><a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/orcid_logo.png"/></a><span>MongoDB</span></li><li><a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/cross_ref.png"/></a><span>ElasticSearch</span></li><li><a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/pubmed.png"/></a><span>Redis</span></li><li><a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/doaj.png"/></a><span>Solr</span></li><li><a href="javascript:void(0);"><img src="http://ojs3modern17.openjournalsystems.com/plugins/themes/themeSeventeen/img/clarivate.png"/></a><span>Memcached</span></li></ul> -->
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
                <li>
                  <a href="">About the Journal</a>
                </li>
                <li>
                  <a href="">Editorial Team</a>
                </li>
                <li>
                  <a href="">Ethical Standards</a>
                </li>
                <li>
                  <a href="">Our Partners and Sponsors</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-inner-text">
              <h3>Guidelines</h3>
              <ul>
                <li>
                  <a href="">For Authors</a>
                </li>
                <li>
                  <a href="">For Reviewers</a>
                </li>
                <li>
                  <a href="">For Editors</a>
                </li>
                <li>
                  <a href="">For Librarians</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-inner-text">
              <h3>Policies</h3>
              <ul>
                <li>
                  <a href="">Focus and Scope</a>
                </li>
                <li>
                  <a href="">Copyright Notice</a>
                </li>
                <li>
                  <a href="">Peer Review Process</a>
                </li>
                <li>
                  <a href="">Open Access Policy</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-inner-text">
              <h3>Contact Us</h3>
              <ul>
                <li>
                  <a href="">Phone: 602-527-7080</a>
                </li>
                <li>
                  <a href="">Address: 13835 N. Tatum Blvd, Phoenix, AZ 85032</a>
                </li>
                <li>
                  <a href="">Website: </a>
                </li>
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
                <span class="openAccessIcon"></span>
                <a href="//creativecommons.org/licenses" target="_blank">
                  <i class="fab fa-creative-commons"></i>
                  <i class="fab fa-creative-commons-by"></i>
                </a>
                <a href="//creativecommons.org/about/cc0" target="_blank" class="ccZeroIcon"></a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="footer-bottom-right">
              <!-- <ul class="social"><li><a href="https://www.facebook.com/openjournalsystems.com"><i class="fab fa-facebook-square"></i></a></li><li><a href="https://twitter.com/openjournalsystems/"><i class="fab fa-twitter-square"></i></a></li><li><a href="https://www.linkedin.com/" class="linkedIn"><i class="fab fa-linkedin"></i></a></li></ul> -->
              <p> © 2018 Law in Context. All Rights Reserved | <a href="https://journals.latrobe.edu.au/index.php/law-in-context/terms">Terms of Use and Privacy</a>
              </p>
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
      $(document).ready(function() {
            $('#changeSection').change(function() {
              var dataType = $(this).val();
              var thisEl = $(this).closest('.sections');
              if (dataType != 'section') {
                // $('.section_content .article_summary').hide();
                //  $('[sort-data="'+dataType+'"]').show()
                $('.section', thisEl).hide();
                $('.' + dataType, thisEl).show()
              } else {
                $('.section', thisEl).show();
                //$('.section_content .article_summary').show();
              }
            })
            $('body').on('click', '.mobileMenu', function() {
              $('.mobileMenuBox ').addClass('showmenu')
            })
            $('body').on('click', '.glyphicon-remove', function() {
              $('.mobileMenuBox ').removeClass('showmenu')
            })
            $('.contact-form button[type="submit"]').click(function() {
              var cname = $('#cname').val();
              var cemail = $('#cemail').val();
              var csubject = $('#csubject').val();
              var cmessage = $('#cmessage').val();
              if (cname == '' || cemail == '' || csubject == '' || cmessage == '') {
                alert('Please fill complete form to send email');
                return false;
              }
            })
            $('.issues_list').addClass('calView');
            $('.gridListBox ul li').click(function() {
              $('.gridListBox ul li').removeClass('active')
              $(this).addClass('active');
              var chkView = $(this).hasClass('liGrid')
              var chkCal = $(this).hasClass('liCal')
              if (chkCal == true) {
                $('.issues_list').removeClass('listView');
                $('.issues_list').removeClass('gridView');
                $('.issues_list').addClass('calView');
                $('.description').hide();
              } else {
                if (chkView == true) {
                  $('.issues_list').removeClass('listView');
                  $('.issues_list').removeClass('calView');
                  $('.issues_list').addClass('gridView');
                  $('.description').hide();
                } else {
                  $('.issues_list').addClass('listView');
                  $('.issues_list').removeClass('gridView');
                  $('.issues_list').removeClass('calView');
                  $('.description').show();
                }
              }
            })
            $('.sidebar > div .title').closest('.pkp_block').toggleClass('showHide');
            $('body').on('click', '.sidebar > div .title', function() {
              $(this).closest('.pkp_block').toggleClass('showHide');
            });
            $('.pkp_block').each(function(index) {
                var hClass = $(this).find('.title');
                if (hClass.length == 0) {
                  var hId = $(this).attr('id');
                  if (hId != undefined) {
                    var nTitle = hId.split('-')[1];
                    $(this).prepend(' < span class = "title" > '+nTitle+' < /span>');
                      $('#' + hId).toggleClass('showHide');
                    }
                  }
                }) $('.block_announcement').removeClass('showHide');
              //slider
              function makeSlider(id) {
                var images = '';
                var Icount = 0;
                $(id + ' img').each(function(i) {
                  Icount++;
                  var activeClass = "";
                  if (i == 0) {
                    activeClass = "active";
                  }
                  images += ' < div class = "item '+activeClass+'" > \ < img src = "'+ $(this).attr('src')+'" / > \ < /div>';
                });
                if (Icount == 0) return;
                var slidertemplate = ' < div id = "carousel-example-generic"
                class = "carousel slide"
                data - ride = "carousel" > \ < !--Indicators-- > \ < ol class = "carousel-indicators" > \ < li data - target = "#carousel-example-generic"
                data - slide - to = "0"
                class = "active" > < /li>\ < li data - target = "#carousel-example-generic"
                data - slide - to = "1" > < /li>\ < li data - target = "#carousel-example-generic"
                data - slide - to = "2" > < /li>\ < /ol>\ < !--Wrapper
                for slides-- > \ < div class = "carousel-inner"
                role = "listbox" > \'+images+'\ < /div>\ < !--Controls-- > \ < a class = "left carousel-control"
                href = "#carousel-example-generic"
                role = "button"
                data - slide = "prev" > \ < span class = "glyphicon glyphicon-chevron-left"
                aria - hidden = "true" > < /span>\ < span class = "sr-only" > Previous < /span>\ < /a>\ < a class = "right carousel-control"
                href = "#carousel-example-generic"
                role = "button"
                data - slide = "next" > \ < span class = "glyphicon glyphicon-chevron-right"
                aria - hidden = "true" > < /span>\ < span class = "sr-only" > Next < /span>\ < /a>\ < /div>';
                $(id).html(slidertemplate);
                $('.carousel').carousel();
                
              }
              makeSlider('#customblock-Slider .content .content'); $('#journalSlider').carousel();
            });
            
    </script>
    <script>
      jQuery(document).ready(function($) {
        var $contextOptinGroup = $('div#contextOptinGroup');
        if ($contextOptinGroup.length) {
          var $roles = $contextOptinGroup.find('.context_roles :checkbox');
          $roles.change(function() {
            var $thisRoles = $(this).closest('.context_roles');
            var cntx = $(this).attr("cntx");
            if ($thisRoles.find(':checked').length) {
              $('.journal_' + cntx).addClass('context_privacy_visible');
            } else {
              $('.journal_' + cntx).removeClass('context_privacy_visible');
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

  </body>
</html>