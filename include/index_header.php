<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Incutopia.com User Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Style Popup -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user-img.jfif" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo ucfirst($_SESSION['name']);?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <!-- <h4>General</h4> -->
                  <ul class="list-unstyled components">
				                       <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i><span>Enterprise Setup</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="#"> >  <span>Bussiness Model</span></a></li>
                           <li><a href="#"> > <span>Detailed Project Report (DPR)</span></a></li>
                           <li><a href="#"> > <span>Investors Pitch</span></a></li>
                           <li><a href="#"> > <span>DPIT Registration</span></a></li>
                           <li><a href="#"> > <span>Investor Pool </span></a></li>   </ul>
                     </li>
                     <li>
                        <a href="#element1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i><span>Compliance Management</span></a>
                        <ul class="collapse list-unstyled" id="element1">
                           <li><a href="tables2.html"> > <span>Company Documentation</span></a></li>
                           <li><a href="tables2.html"> > <span>GST/ Income Tax/ Other Tax </span></a></li>
                           <li><a href="tables2.html"> > <span>Account Management</span></a></li>
                           <li><a href="tables2.html"> > <span>Audit/ Report</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#element2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Marketing And Sales</span></a>
                        <ul class="collapse list-unstyled" id="element2">
                           <li><a href="#"> >  <span>Brand Management </span></a></li>
                           <li><a href="#"> >  <span>Lead Management</span></a></li>
                           <li><a href="#"> >  <span>Sales Management</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#element3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i>  <span>Financial Management</span></a>
                        <ul class="collapse list-unstyled" id="element3">
                           <li><a href="#"> <span>Financial Planning</span></a></li>
                           <li><a href="#"> <span>Bank/ NBFC/ Credit</span></a></li>
                           <li><a href="#"> <span>Subsidy / Grant Linkage</span></a></li>
                           <li><a href="#"> <span>Investment</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#element4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i>  <span>Add ons</span></a>
                        <ul class="collapse list-unstyled" id="element4">
 </ul>
                     </li>
                     <li>
                        <a href="#element5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i>  <span>Reports</span></a>
                        <ul class="collapse list-unstyled" id="element5">
 </ul>
                     </li>
                     <li>
                        <a href="#element6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i>  <span>Assessment</span></a>
                        <ul class="collapse list-unstyled" id="element6">
 </ul>
                     </li>
                     <li>
                        <a href="#element7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i>  <span>Analytics</span></a>
                        <ul class="collapse list-unstyled" id="element7">
 </ul>
                     </li>
                     <li>
                        <a href="#element8" data-toggle="collapse" 
                        aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-clone yellow_color"></i>  
                        <span>Feedback</span></a>
                        <ul class="collapse list-unstyled" id="element8">
 </ul>
                     </li>
   
                     <li>
                        <a href="logout.php">
                        <i class="fa fa-clone yellow_color"></i> 
                         <span>Log Out/ Exit</span></a>
                        <ul class="collapse list-unstyled" id="element9">
 </ul>
                     </li>

				  
				  
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <!-- PopUp -->
            <div class="popup" id="popup" style="display:none;">
               <input type="button" name="Close" class="s3-btn-close" onClick="popupClose();" value="&times">
               <div class="faq_section">
                  <h2>Frequently Asked Questions for Log in Issues :</h2>
                  <ul>
                     <li>
                        <h4>I had an account on <a href="https://incutopia.com/">https://incutopia.com/</a> but I am unable to
                           log in now</h4>
                        <p>The quickest way to resolve this is by select the forgot password option. <a href="#">Click</a> here
                           to reset your
                           password and continue
                           with your Incutopia journey</p>
                     </li>
                     <li>
                        <h4>I made an account previously, but I do not remember my email ID and password:</h4>
                        <p>Please create a new account OR email us at support@incutopia.com and share your Company Name with us
                           so that we can help
                           you to access your old account.</p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- PopUp ^ -->


            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full" >
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section" >
                           <a href="index.php"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
						 <div class="start_class">  <h2>Startup Booster Program</h2></div>
                        </div>					
						
						

						
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <!-- <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li> -->
                                 <li><a href="#" onClick="popupOpen()"><i class="fa fa-question-circle"></i></a></li>
                                 <!-- <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li> -->
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user-img.jfif" alt="#" /><span class="name_user"><?php echo ucfirst($_SESSION['name']);?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">My Profile</a>
                                       <a class="dropdown-item" href="#">Settings</a>
                                       <a class="dropdown-item" href="#">Help</a>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
