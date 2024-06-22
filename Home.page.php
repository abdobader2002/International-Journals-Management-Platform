<?php
include 'conn.php';

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
                                        <a class="nav-link" href="Home.page.php">Home</a>
                                    </li>


                            </div>
                        </div>
                        <div class="mobileMenuBox menu2">
                            <a href="javascript:void(0);" class="close"><i class="glyphicon glyphicon-remove"></i></a>

                            <ul id="navigationPrimary" class="pkp_navigation_primary nav nav-tabs">
                                <li class=" nav-item">
                                    <a class="nav-link" href="Home.page.php">Home</a>
                                </li>



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="navRight">




                            <ul id="navigationUser" class="pkp_navigation_user nav nav-tabs">
                                <li class=" nav-item">
                                    <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link" href="Register.php"><i class="fas fa-user-plus"></i> Register</a>
                                </li>
                                <li class=" nav-item">
                                    <a style="font-size: medium;margin-top: -0.4rem;" class="nav-link" href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            <a href="Home.page.php">
                                Home
                            </a>
                        </li>

                        <li class="active">

                        </li>
                    </ol>
                </nav>

                <script type="text/javascript">


                </script>

                <style>
                    .pkp_structure_main {
                        border-right: 0px solid #dddddd;
                    }

                    .pkp_structure_main.col-md-9,
                    .pkp_structure_main.col-md-10 {
                        width: 100%;
                    }


                    .section {
                        border-top: 1px solid #ddd;
                        margin-top: 17px !important;
                    }

                    .journals .nav-pills>li>a:hover {
                        background: #ddd;
                    }

                    h2.headings {
                        margin: 0;
                        font-family: 'Open Sans', sans-serif;
                        color: #ababab;
                        text-transform: uppercase;
                        letter-spacing: 2px;
                        font-weight: 600;
                        font-size: 22px;
                    }

                    .journals {
                        width: 1200px;
                        margin: 0 auto;
                        background: #f7f7f7 !important;
                        display: flex;
                        padding: 15px 15px 15px 15px;
                    }

                    .left-side-box {
                        margin-top: 15px;
                        background-color: #fff;
                        padding: 15px;
                        box-shadow: 0 5px 18px rgba(200, 200, 200, 0.1);
                        height: 100%;
                    }

                    .journals .media-list .media {
                        border-bottom: none;
                        margin-top: 0;
                        padding-bottom: 20px;
                        height: 270px;
                    }

                    .journals .nav-pills>li>a {
                        font-size: 14px !important;
                        font-weight: 600 !important;
                        padding: 8px 10px !important;
                        border: 1px solid #dedede;
                        border-radius: 1px;
                    }

                    .journals .media-list .media:nth-child(2n+1) {
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
                        }

                        .journals {
                            width: 100%;
                            margin: 0 auto;
                            background: #f7f7f7 !important;
                            display: flex;
                            padding: 15px 15px 15px 15px;
                        }

                        .left-side-box {
                            margin-top: 15px;
                            background-color: #fff;
                            padding: 15px;
                            box-shadow: 0 5px 18px rgba(200, 200, 200, 0.1);
                            height: auto;
                        }
                    }
                </style>



                <div id="main-site" class="page_index_site">
                    <div class="headingback">
                        <span>line</span>
                        <h2 class="section_title headings">
                            Open Journal Systems Publishing
                        </h2>
                    </div>



                    <div class="about_site">Open Journal Systems (OJS) is an open source solution to managing and publishing scholarly journals online. 
                        It is a highly flexible editor-operated journal management and publishing system that can be
                         downloaded for free and installed on a local web server.. It has been designed to reduce the 
                         time and energy devoted to the clerical and managerial tasks associated with editing a journal</div>

                    <?php
                    $query = "SELECT s.id, s.title, s.abstract
          FROM submissions s
          JOIN accepted_articles aa ON s.id = aa.article_id";

                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $abstract = $row['abstract'];
                    ?>
                            <div class="journals" style="display:inline;">
                                <ul class="media-list">
                                    <li class="media col-md-6">
                                        <div class="left-side-box">
                                            <div class="media-left">
                                                <a href="https://ojs3modern17.openjournalsystems.com/index.php/ojsa">
                                                    <img class="media-object" src="https://ojs3modern17.openjournalsystems.com/public/journals/4/journalThumbnail_en_US.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">
                                                    <a href="https://ojs3modern17.openjournalsystems.com/index.php/ojsa" rel="bookmark">
                                                        <?php echo $title; ?>
                                                    </a>
                                                </h3>
                                                <div class="description">
                                                    <p><?php echo $abstract; ?></p>
                                                </div>
                                                <ul class="nav nav-pills">
                                                    <li class="view">
                                                        <button ><a style="font-size:15px;" href="Home_view_submission.php?artical_id=<?php echo $row['id']; ?>">
                                                                View Article
                                                            </a></button>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    <?php
                        }
                    } else {
                        echo "Query failed: " . mysqli_error($conn);
                    }
                    ?>
                </div>


            </div><!-- .page -->


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













    <script type="text/javascript">
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
                        $(this).prepend('<span class="title">' + nTitle + '</span>');

                        $('#' + hId).toggleClass('showHide');

                    }
                }

            })

            $('.block_announcement').removeClass('showHide');



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

                    images += '<div class="item ' + activeClass + '">\
                            <img src="' + $(this).attr('src') + '"/>\
                          </div>';
                });
                if (Icount == 0) return;

                var slidertemplate = '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">\
                    <!-- Indicators -->\
                    <ol class="carousel-indicators">\
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>\
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>\
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>\
                    </ol>\
                    <!-- Wrapper for slides -->\
                    <div class="carousel-inner" role="listbox">\
                      ' + images + '\
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