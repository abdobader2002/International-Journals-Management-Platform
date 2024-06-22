<?php
 session_start();
 include 'conn.php';
 $Manager_id = $_SESSION['id'];
 $Managername=$_SESSION['givenname']; 

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
      <title>Admin Submission</title>
  
      
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
/*----------css for breadcumbs-----------------*/


</style>

<nav class="cmp_breadcrumbs" role="navigation" aria-label="You are here:">
    <ol class="breadcrumb">
        <li>
            <a href="Admin_submmisions.php">
                Hello <?php echo $Managername ;?>
            </a>
            <form action="Admin_site_edit.html" class="form" method="post" style="margin-left: 80rem;">
                <input type="submit" name="submit" value="Edit Site">
            </form>
            <form action="Admin_Users_Roles.php" class="form" method="post">
            <input type="submit" name="submit" value="Users & Roles">
        </form>
        </li>
    </ol>
</nav>
<br>

    <style>
.form{
    display: inline;
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
       <th style="text-align: center;">Auther Name </th>
       <th style="text-align: center;">Title</th>
       <th style="text-align: center;">keyword </th>
       <th style="text-align: center;">abstract </th>
       <th style="text-align: center;">Comment</th>
       <th style="text-align:center;">Actions</th>
       <th style="text-align: center;">View</th>
     </tr>
   </thead>
        <?php 
           $query = "SELECT id,auther_id,auther_name,title,keywords,abstract,comment,status FROM submissions ";
           $result = mysqli_query($conn, $query);
           if ($result) {
             while ($row = mysqli_fetch_assoc($result)) {

        ?>
   <tbody style="font-size: medium; text-align: center;">
    <tr>
        <td style="text-align: center;"><?php echo $gname=$row['auther_name'];?></td>
        <td style="text-align: center;"><?php echo $title=$row['title'];?></td>
        <td style="text-align: center;"><?php echo $keywords=$row['keywords'];?></td>
        <td style="text-align: center;"><?php echo $abstract=$row['abstract'];?></td>
        <td style="text-align: center;"><?php echo $status=$row['status'];?></td>
        <td style="text-align:center;">

            <?php if (isset($row['status']) && $row['status'] == "submission") { ?>
                <form action="Admin_Assign_Editor.php?artical_id=<?php echo $row['id']; ?>" class="for" method="post">
                    
                    <input class="action_vlaue" type="submit" name="submit" value="Assign Editor" style="padding:4 20px;">
                </form>
            <?php } ?>

        </td>
        <td style="text-align: center;">
            <form action="Admin_view_submission.php?artical_id=<?php echo $row['id']; ?>" class="view-form" method="post">
                <input id="vie" type="submit" name="submit" value="View" style="padding:4 20px;margin-top:17px;">
            </form>
        </td>
      </tr>
      <script>
        document.querySelectorAll(".view-form").forEach((view_form) => {
            view_form.onsubmit = (e) => {
                e.preventDefault();
                location.href = e.target.getAttribute('action');
            }
        });
      </script>

      <?php
          }
        }
        ?>
   </tbody>
   </table>
</div>

