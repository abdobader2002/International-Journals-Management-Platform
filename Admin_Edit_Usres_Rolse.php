<?php
    require 'conn.php';
    $id=$_GET['updateid'];
   $query="SELECT id,givenname,FamilyName,country,username,email,password, role FROM editors WHERE id='$id' 
   UNION
   SELECT id,givenname,FamilyName,country,username,email,password, role FROM reviwers WHERE id='$id'"; 
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);   
    $GivenName = $row["givenname"];
    $FamilyName = $row["FamilyName"];
    $Country  = $row["country"];
    $Username  = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
    $user_role  = $row["role"];
    $errors = array();
   if (strlen($password)<6) {
        array_push($errors,"Password must be at least 6 charactes long");
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
      <title>Admin Users&Roles</title>
  
      
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
  
    
      <a href="Admin_submmisions.php" class="logo" >
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
            <a href="#">
                Hello Admin's Name
            </a>
        </li>
    </ol>
</nav>
<form method="post" action="users_update.php">
<input type="hidden" name="updateid" value="<?php echo $id ?>">                    
<fieldset class="identity">
    <legend class="register-form-legend">Step #1: Fill in User Details</legend>
    <span>Name<span>
    <label for="Name" class="sr-only">
        Name
    </label>
    <input type="text" class="form-control" name="givenName" id="Name" value="<?php echo $GivenName;?>" maxlength="32" placeholder="Enter your first name">
    <br>
    <input type="text" class="form-control" name="famelyName" id="Name" value="<?php echo $FamilyName;?>" maxlength="32" placeholder="Enter your secon name">
    <small style="color: #777676;">
        Please provide the full name as the author should be identified on the published work. Example: Dr. Alan P. Mwandenga
    </small>
    <br>
    <br>
    <input type="text" class="form-control" name="userName" id="Name" value="<?php echo $Username;?>" maxlength="32" placeholder="Enter your user name">
    
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
  <span>Contact</span>
   <label for="Contact" class="sr-only">
    Contact
</label>
<input type="text" class="form-control" name="email" id="Contact" value="<?php echo $email;?>" maxlength="32" placeholder="Enter your email">
<br>
<span>Role</span>
<select name="role" class="form-control" id="country" autocomplete="country-name" required aria-required="true" style="height: 35px;cursor: pointer;">
    <option><?php echo $user_role;?></option>
    <option>Jornal Editor</option>
    <option>Reviewer</option>
</select>
<br>
<span>Country</span>
<label for="Country" class="sr-only">
 Contact
 <br>
</label>
<select name="country" class="form-control" id="country" autocomplete="country-name" required aria-required="true" style="height: 35px;cursor: pointer;">
    <option><?php echo $Country;?></option>
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
  <br>
  <span>Password</span>
  <label for="Contact" class="sr-only">
   Password
</label>
<input type="text" class="form-control" name="password" id="Contact" value="<?php echo $password;?>" maxlength="32" placeholder="Enter your Password">
<br>
<br>
<div class="register-1c">
    <button class="span-Cancel"><a href="Admin_Users_Roles.php">Cancel</a></button>
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
       <button class="span-login" type="submit" name="update">update</button>
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
       </style>
       </form>
       <br>
       <br>
       <br>
       <br>
        <footer style=" right: 0; left: 0; bottom: 0;text-align: center; width: 100%; position: fixed; bottom: 0; left: 0; padding: 20px 0;">
    <p style="color: rgba(255, 255, 255, 0.639); margin-bottom: -20px; font-size: 14px;">&copy; 2024. All rights reserved.</p>
</footer>
    </html>
    