<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<style>
    
    .anim{
  transition: transform .7s ease-in-out;
}
.anim:hover{
  transform: rotate(360deg);
}

.btn:hover{
  /* transform: rotate(1deg); */
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.nav-item:hover {
  background-color:  #e6f2ff;
}
/******scrollbar******** */
.childNav{
  width: 200px;
  height: 865px;
  overflow-y: scroll; 
}
::-webkit-scrollbar {
    width: 2px;
    height: 10px;  
}
.dropdown-menu{ position:relative;}
.dropdown-menu:after{
    content: "";
    position: absolute;
    top: -3px;
    right: 17%;
    width: 15px;
    height: 10px;
    background: white;
    box-shadow: var(--box-shadow);
    transform: rotate(45deg);
    z-index: 1;
}

/* Page loader css */
.fond{position:absolute;padding-top:85px;top:0;left:0; right:0;bottom:0; position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  z-index: 9999;}

.contener_general
{
  -webkit-animation:animball_two 1s infinite;
  -moz-animation:animball_two 1s infinite;
  -ms-animation:animball_two 1s infinite;
  animation:animball_two 1s infinite;
  width:44px; height:44px;
}
.contener_mixte
{
  width:44px; height:44px; position:absolute;
}
.ballcolor
{
  width: 20px;
  height: 20px;
  border-radius: 50%;
}
.ball_1, .ball_2, .ball_3, .ball_4
{
  position: absolute;
  -webkit-animation:animball_one 1s infinite ease;
  -moz-animation:animball_one 1s infinite ease;
  -ms-animation:animball_one 1s infinite ease;
  animation:animball_one 1s infinite ease;
}
.ball_1
{
  background-color:#cb2025;
  top:0; left:0;
}
.ball_2
{
  background-color:#f8b334;
  top:0; left:24px;
}
.ball_3
{
  background-color:#00a096;
  top:24px; left:0;
}
.ball_4
{
  background-color:#97bf0d;
  top:24px; left:24px;
}

@-webkit-keyframes animball_one
{
  0%{ position: absolute;}
  50%{top:12px; left:12px; position: absolute;opacity:0.5;}
  100%{ position: absolute;}
}
@-moz-keyframes animball_one
{
  0%{ position: absolute;}
  50%{top:12px; left:12px; position: absolute;opacity:0.5;}
  100%{ position: absolute;}
}
@-ms-keyframes animball_one
{
  0%{ position: absolute;}
  50%{top:12px; left:12px; position: absolute;opacity:0.5;}
  100%{ position: absolute;}
}
@keyframes animball_one
{
  0%{ position: absolute;}
  50%{top:12px; left:12px; position: absolute;opacity:0.5;}
  100%{ position: absolute;}
}

@-webkit-keyframes animball_two
{
  0%{-webkit-transform:rotate(0deg) scale(1);}
  50%{-webkit-transform:rotate(360deg) scale(1.3);}
  100%{-webkit-transform:rotate(720deg) scale(1);}
}
@-moz-keyframes animball_two
{
  0%{-moz-transform:rotate(0deg) scale(1);}
  50%{-moz-transform:rotate(360deg) scale(1.3);}
  100%{-moz-transform:rotate(720deg) scale(1);}
}
@-ms-keyframes animball_two
{
  0%{-ms-transform:rotate(0deg) scale(1);}
  50%{-ms-transform:rotate(360deg) scale(1.3);}
  100%{-ms-transform:rotate(720deg) scale(1);}
}
@keyframes animball_two
{
  0%{transform:rotate(0deg) scale(1);}
  50%{transform:rotate(360deg) scale(1.3);}
  100%{transform:rotate(720deg) scale(1);}
}
.layout-sidebar-large .sidebar-left-secondary .childNav li.nav-item a:hold{
    background:white;
}

</style>




<!DOCTYPE html>
<html lang="en" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Student Placement</title>
    <script src="https://kit.fontawesome.com/7c158a5167.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    
    <link href="<?=base_url();?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/datatables.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
    
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet"  href="<?=base_url();?>Assets/fontawsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
   
</head>

<body class="text-left">
   <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
        
<div align="center" class="fond">
  <div class="contener_general">
      <div class="contener_mixte"><div class="ballcolor ball_1">&nbsp;</div></div>
      <div class="contener_mixte"><div class="ballcolor ball_2">&nbsp;</div></div>
      <div class="contener_mixte"><div class="ballcolor ball_3">&nbsp;</div></div>
      <div class="contener_mixte"><div class="ballcolor ball_4">&nbsp;</div></div>
  </div>
  
  
</div>
            <div class="logo">
                <!--img src="<?=base_url();?>Assets/images/placement.png" alt=""-->
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <!-- <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a> -->
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="<?=base_url();?>accordion.html">Accordion</a></li>
                                    <li><a href="<?=base_url();?>alerts.html">Alerts</a></li>
                                    <li><a href="<?=base_url();?>buttons.html">Buttons</a></li>
                                    <li><a href="<?=base_url();?>badges.html">Badges</a></li>
                                    <li><a href="<?=base_url();?>carousel.html">Carousels</a></li>
                                    <li><a href="<?=base_url();?>lists.html">Lists</a></li>
                                    <li><a href="<?=base_url();?>popover.html">Popover</a></li>
                                    <li><a href="<?=base_url();?>tables.html">Tables</a></li>
                                    <li><a href="<?=base_url();?>datatables.html">Datatables</a></li>
                                    <li><a href="<?=base_url();?>modals.html">Modals</a></li>
                                    <li><a href="<?=base_url();?>nouislider.html">Sliders</a></li>
                                    <li><a href="<?=base_url();?>tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
             
                <!-- Notificaiton -->
                <div class="dropdown">
                    <!-- <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div> -->
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                      
                    
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->

                <div class="dropdown container">                   
                    <div class="user col align-self-end">
                        <img src="<?=base_url();?>Assets/images/graduate.png" id="userDropdown"  alt="" data-toggle="dropdown" class="anim" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right dropbtn " aria-labelledby="userDropdown">
                            <!-- <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div> -->
                            <!-- <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a> -->
                            <div class="d-inline-flex p-2 text-white">  
                                <div class="p-2 dropdown-item "><a href="Profile" style="color:6F6F6F;"><i class="fa fa-lg fa-fw fa-user-circle-o" aria-hidden="true"></i>Profile</a></div>
                                <!-- <div class="p-2 dropdown-item"><div><i class="fa  fa-lg fa-spin fa-lg fa-fw fa-cog " aria-hidden="true"></i></div><a href="#">Setting</a></div> -->
                                <div class="p-2 dropdown-item"><a href="Login/logout" style="color:6F6F6F;"><i class="fa fa-lg  fa-fw fa-sign-out" aria-hidden="true"></i>Logout</a></div>                             
                            </div>                         
                        </div>    
                    </div>
                </div>
            </div>      
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item" ><a class="nav-item-hold" href="<?=base_url() ?>Dashboard"><img height="25px" src="<?php echo base_url() ?>Assets\images\dashboard.png "><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="student"><a class="nav-item-hold" href="<?=base_url() ?>Student"><img height="25px" src="<?php echo base_url() ?>Assets\images\student.png "><span class="nav-text">Student</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="extrakits"><a class="nav-item-hold" href="<?=base_url() ?>Employee"><img height="25px" src="<?php echo base_url() ?>Assets\images\division.png "><span class="nav-text">Employee</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="<?=base_url() ?>Company"><img height="25px" src="<?php echo base_url() ?>Assets\images\office-building.png "><span class="nav-text">Company</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="#"> <img height="25px" src="<?php echo base_url() ?>Assets\images\book.png "><span class="nav-text">Opening Job</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="charts"><a class="nav-item-hold" href="#">  <img height="25px" src="<?php echo base_url() ?>Assets\images\selection-process.png "><span class="nav-text">Select student</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="forms"><a class="nav-item-hold" href="#">   <img height="25px" src="<?php echo base_url() ?>Assets\images\programming.png "><span class="nav-text">Master</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="report"><a class="nav-item-hold" href="#">   <img height="25px" src="<?php echo base_url() ?>Assets\images\reportt.png "><span class="nav-text">Report</span></a>
                        <div class="triangle"></div>
                    </li>   
                    <!-- <li class="nav-item" data-item="report"><a class="nav-item-hold" href="#"> <img height="25px" src="<?php echo base_url() ?>Assets\images\logout.png "><span class="nav-text">Report</span></a>
                        <div class="triangle"></div>
                    </li>   -->
                    <li class="nav-item" data-item="blogs"><a class="nav-item-hold" href="#"><img height="25px" src="<?php echo base_url() ?>Assets\images\blogging.png"><span class="nav-text" style="color:#0161B5">Blogs</span></a>
                        <div class="triangle"></div>
                    </li>  
                    <li class="nav-item" data-item="website"><a class="nav-item-hold" href="#"><img height="25px" src="<?php echo base_url() ?>Assets\images\web.png"><span class="nav-text" style="color:#0161B5">Website</span></a>
                        <div class="triangle"></div>
                    </li>    
                         
         
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Submenu Dashboards-->
                <!-- <ul class="childNav" data-parent="dashboard">
                    <li class="nav-item"><a href="<?=base_url();?>dashboard1.html"><i class=" nav-icon nav-icon i-Clock-3"></i><span class="item-name">Student create</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>dashboard2.html"><i class=" nav-icon nav-icon i-Clock-4"></i><span class="item-name">Student Edit</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>dashboard3.html"><i class=" nav-icon nav-icon i-Over-Time"></i><span class="item-name">Verify Student</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>dashboard4.html"><i class=" nav-icon nav-icon i-Clock"></i><span class="item-name">Unverify student</span></a></li>
                </ul> -->
                <ul class="childNav"  data-parent="forms">
                    <li class="nav-item"><a href="<?=base_url();?>Role"><i class="fa-lg fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;<span class="item-name">Role</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Designation"><i class="fa-lg fa  fa-address-card" aria-hidden="true"></i><span class="item-name">&nbsp;Designation</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/department"><i class="fa-lg fa fa-id-badge" aria-hidden="true"></i><span class="item-name">&nbsp;Deparment</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Education"><i class="fa-lg fa fa-book" aria-hidden="true"></i><span class="item-name">&nbsp;Education</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/country"><i class="fa-lg  fa fa-globe" aria-hidden="true"></i><span class="item-name">&nbsp;Country</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/state"><i class="fa-lg fa fa-building" aria-hidden="true"></i><span class="item-name">&nbsp;State</span></a></li>
                    
                    <li class="nav-item"><a href="<?=base_url();?>Master/city"><i class="fa-lg fas fa-city" aria-hidden="true"></i><span class="item-name">&nbsp;City</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/village"><i class="fa-lg fas fa-torii-gate" aria-hidden="true"></i><span class="item-name">&nbsp;Village</span></a></li>                    

                    <li class="nav-item"><a href="<?=base_url();?>Master/branch"><i class="fa-lg fas fa-map-marked-alt" aria-hidden="true"></i><span class="item-name">&nbsp; Branch</span></a></li>
                   
                    <li class="nav-item"><a href="<?=base_url();?>Master/religion"><i class="fa-lg fas fa-gopuram" aria-hidden="true"></i><span class="item-name">&nbsp;religion</span></a></li>
                    <!-- <li class="nav-item"><a href="<?=base_url();?>Master/branch"><i class="fa-lg fa fa-university" aria-hidden="true"></i><span class="item-name">&nbsp;Branch</span></a></li> -->
                    <li class="nav-item"><a href="<?=base_url();?>Master/caste"><i class="fa-lg fab fa-fort-awesome-alt" aria-hidden="true"></i><span class="item-name">&nbsp;Cast</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/subcaste"><i class="fa-lg fab fa-sellcast" aria-hidden="true"></i><span class="item-name">&nbsp;SubCast</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/certification"><i class="fa-lg fas fa-certificate" aria-hidden="true"></i><span class="item-name">&nbsp;Certification</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/comptype"><i class="fa-lg fas fa-building" aria-hidden="true"></i><span class="item-name">&nbsp;Company Type</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/degree"><i class="fa-lg fas fa-graduation-cap" aria-hidden="true"></i><span class="item-name">&nbsp;Degree</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/emptype"><i class="fa-lg fas fa-user-tie" aria-hidden="true"></i><span class="item-name">&nbsp;Employee Type</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/hobbies"><i class="fa-lg fab fa-slack" aria-hidden="true"></i><span class="item-name">&nbsp;Hobbies</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/keytype"><i class="fa-lg far fa-keyboard" aria-hidden="true"></i><span class="item-name">&nbsp;Keyword Type</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/keyword"><i class="fa-lg fa fas fa-key" aria-hidden="true"></i><span class="item-name">&nbsp;Keyword</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/qualification"><i class="fa-lg fas fa-user-graduate" aria-hidden="true"></i><span class="item-name">&nbsp;Qualification</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/skills"><i class="fa-lg fas fa-award" aria-hidden="true"></i><span class="item-name">&nbsp;Skill</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Master/stream"><i class="fa-lg fas fa-user-graduate" aria-hidden="true"></i><span class="item-name">&nbsp;Stream</span></a></li>

                    <li class="nav-item"><a href="<?=base_url();?>Master/term"><i class="fa-lg fas fa-calendar-alt" aria-hidden="true"></i><span class="item-name">&nbsp;Term</span></a></li>
                </ul>

                <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
   
       
                <ul class="childNav " data-parent="apps">
                    <li class="nav-item"><a href="<?=base_url();?>Company/create"><i class=" fa fa-lg fa-building animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;AddCompany</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Company/edit"><i class="fas fa-pen-square fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;EditCompany</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Company/delete"><i class="fas fa-trash fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;DeleteCompany</span></a></li>
                </ul>
                <!-- blogs navs -->
                <ul class="childNav " data-parent="blogs">
                    <li class="nav-item"><a href="<?=base_url();?>Blogs/create"><i class=" fa fa-lg fa-building animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Blog</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Blogs/create"><i class="fas fa-pen-square fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Create Blog</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Blogs/publish"><i class="fas fa-building fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Publish Blog</span></a></li>
                </ul>
                <!-- end -->
                <ul class="childNav" data-parent="widgets">
                    <li class="nav-item"><a href="<?=base_url();?>Opening/create"><i class="fa-lg fas fa-plus-circle animtxt"></i>&nbsp;&nbsp;Add Opening</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Opening/edit"><i class="fa-lg fas fa-pen-square animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Edit Opening</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Opening/verify"><i class="fa fa-lg fa-check-square animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Verify Opening</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Opening/unverify"><i class="fas fa-times-circle fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Unverify&nbsp;Opening</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Opening/delete"><i class="fas fa-trash fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Deactive&nbsp;Opening</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Opening/report"><i class="fas fa-file-alt  fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Report</span></a></li>
                  
                </ul>

                <ul class="childNav" data-parent="website">
                    <li class="nav-item"><a href="<?=base_url();?>Website/course"><i class="fa-lg fas fa-plus-circle animtxt"></i>&nbsp;&nbsp;Add Course</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/modifycourse"><i class="fa-lg fas fa-pen-square animtxt"></i>&nbsp;&nbsp;Edit Course</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/video"><i class="fa-lg fas fa-plus-circle animtxt"></i>&nbsp;&nbsp;Video</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/editvideo"><i class="fa-lg fas fa-pen-square animtxt"></i>&nbsp;&nbsp;Edit Video</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/photo"><i class="fa-lg fas fa-plus-circle animtxt"></i>&nbsp;&nbsp;Photo</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/editphoto"><i class="fa-lg fas fa-pen-square animtxt"></i>&nbsp;&nbsp;Edit Photo</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/mainslider"><i class="fa-lg fas fa-plus-circle animtxt"></i>&nbsp;&nbsp;Main Slider</span></a></li>             
                    <li class="nav-item"><a href="<?=base_url();?>Website/editmainslider"><i class="fa-lg fas fa-pen-square animtxt"></i>&nbsp;&nbsp;Edit Main Slider</span></a></li>             
                </ul>

                <!-- chartjs-->
                <ul class="childNav" data-parent="charts">
                    <li class="nav-item"><a href="<?=base_url();?>SelectStudent"><i class="fa-lg fa fa-list-alt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Selected List</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>SelectStudent/branch"><i class="fa-lg fa fa-list-ul" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Branch List</span></a></li>
                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/department"><i class="fa-lg fa fa-th-list" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;DepartmentList</span></a></li>

                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/company"><i class="fa-lg fa fa-list" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Company List</span></a></li>
                </ul>

                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item"><a href="<?=base_url();?>Employee/create"><i class="fa-lg fa fa-address-book animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;Employee&nbsp;Create</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Employee/edit"><i class="fa fa-lg fas fa-pen-square animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Employee Edit</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Employee/delete"><i class="fa fa-lg fa-user-times animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;Employee&nbsp;Delete</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Employee/report"><i class="fas fa-file-alt  fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;Report</span></a></li>

                </ul>
                <ul class="childNav" data-parent="student">
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/create"><i class="fa fa-lg fas fa-user-plus animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Student&nbsp;Create</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/edit"><i class=" fa-lg fas fa-user-edit animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Student&nbsp;Edit</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/verify"><i class="fa fa-lg fa-check-square animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Verify&nbsp;Student</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/unverify"><i class="fas fa-times-circle fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Unverify&nbsp;Student</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/delete"><i class="fa fa-lg fa-user-times animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Delete&nbsp;Student</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Studentregistration/report"><i class="fas fa-file-alt  fa-lg animtxt" aria-hidden="true"></i><span class="item-name">&nbsp;&nbsp;Report</span></a></li>
                </ul>

                <!-- <ul class="childNav"  data-parent="forms">
                <li class="nav-item"><a href="<?=base_url();?>Website"><i class="fa-lg fa fa-university" aria-hidden="true"></i><span class="item-name">&nbsp;Home</span></a></li>                   
                </ul> -->

                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signin.html"><i class=" nav-icon nav-icon i-Checked-User"></i><span class="item-name">Signin</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i class=" nav-icon nav-icon i-Add-User"></i><span class="item-name">Signup</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i class=" nav-icon nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/not-found.html"><i class=" nav-icon nav-icon i-Error-404-Window"></i><span class="item-name">NotFound</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>user.profile.html"><i class=" nav-icon nav-icon i-Male"></i><span class="item-name">UserProfile</span></a></li>
                    <li class="nav-item"><a class="open" href="<?=base_url();?>blank.html"><i class=" nav-icon nav-icon i-File-Horizontal"></i><span class="item-name">BlankPage</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!-- Page loade Js -->
        <script>
            window.onload = function() {
  document.querySelector(".fond").style.display = "none";
}
            </script>